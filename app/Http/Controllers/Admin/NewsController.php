<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Article;
use App\Http\Requests\StoreNews;
use App\Models\Category;
use App\Scopes\LanguageScope;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'title' => trans('admin.news')
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = Article::where('keyword', $request->keyword)->get();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.commons.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.news.cols-actions', [
                    'item' => $item
                ]);
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $title = trans('admin.news') . ' - ' . trans('admin.create');
        $record = new Article;

        $urlTrans = url('/admin/news/create?type='. $request->type . '&language=');
        $currentLang = empty($request->language) ? 'vi' : $request->language;
        $urlTrans .= ($currentLang == 'vi') ? 'en' : 'vi';

        $articleCategories = Category::withoutGlobalScope(LanguageScope::class)
            ->where('language', $currentLang)
            ->where('type', 'news')
            ->get();

        return view('admin.news.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans,
            'articleCategories' => $articleCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNews $request)
    {
        $record = new Article;
        $record->fill($request->all());

        if($request->ref_id){
            $record->ref_id = $request->ref_id;
            $record->save();
        }else{
            $record->save();
            $record->ref_id = $record->id;
            $record->save();
        }
        
        return redirect('admin/news?type=' . $request->type);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = trans('admin.news') . ' - ' . trans('admin.edit');
        
        $record = Article::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $currentLang = empty($request->language) ? 'vi' : $request->language;
        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = Article::where('ref_id', $record->ref_id)->where('language', $langNeedTrans)->first();
        if($chkRecord){
            $urlTrans = url('/admin/news/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/news/create?type='. $record->type . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        $articleCategories = Category::withoutGlobalScope(LanguageScope::class)
            ->where('language', $currentLang)
            ->where('type', 'news')
            ->get();

        return view('admin.news.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans,
            'articleCategories' => $articleCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreNews $request, $id)
    {
        $record = Article::find($id);

        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $record->fill($request->all());
        $record->save();
        return redirect('admin/news?type=' . $record->type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Article::find($id);
        if($record && $record->delete()){
            return $this->response(200);
        }
        return $this->response(500);
    }
}
