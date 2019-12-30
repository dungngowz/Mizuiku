<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Article;
use App\Http\Requests\StoreNews;
use App\Models\Category;
use App\Scopes\LanguageScope;
use Illuminate\Support\Facades\Storage;
use App\Helpers\CommonHelper;

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
        $records = Article::with('category')->where('keyword', $request->keyword)->get();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.components.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('thumbnail', function($item) {
                return view('admin.news.cols-thumbnail', [
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

        $urlTrans = url('/admin/news/create?keyword='. $request->keyword . '&language=');
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

        $params = $request->all();
        if(!empty($params['thumbnail'])){
            CommonHelper::updateFileRecord($params['thumbnail'], $record->thumbnail, 'news');
        }

        if(isset($params['created_at']) && strpos($params['created_at'], '/') !== false){
            $created_at = explode('-', $params['created_at']);
            list($d, $m, $y) = explode('/', trim($created_at[1]));
            $params['created_at'] = strtotime($y . '-' . $m . '-' . $d . ' ' . trim($created_at[0]));
        }

        $record->fill($params);

        if($request->ref_id){
            $record->ref_id = $request->ref_id;
            $record->save();
        }else{
            $record->save();
            $record->ref_id = $record->id;
            $record->save();
        }
        
        return redirect('admin/news?keyword=' . $request->keyword);
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
            $urlTrans = url('/admin/news/create?keyword='. $record->keyword . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        $articleCategories = Category::withoutGlobalScope(LanguageScope::class)
            ->where('language', $record->language)
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

        $params = $request->all();
        if(!empty($params['thumbnail']) && $params['thumbnail'] != $record->thumbnail){
            CommonHelper::updateFileRecord($params['thumbnail'], $record->thumbnail, 'news');
        }

        
        if(isset($params['created_at']) && strpos($params['created_at'], '/') !== false){
            $created_at = explode('-', $params['created_at']);
            list($d, $m, $y) = explode('/', trim($created_at[1]));
            $params['created_at'] = strtotime($y . '-' . $m . '-' . $d . ' ' . trim($created_at[0]));
        }

        $record->fill($params);
        $record->save();
        return redirect('admin/news?keyword=' . $record->keyword);
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

    /**
     * Remove multiple
     *
     * @param  array  $arraySelected
     * @return \Illuminate\Http\Response
     */
    public function deleteMultiple(Request $request)
    {
        $params = array_map('intval', explode(',', $request->arraySelected));
        foreach ($params as $item) {
            $banner = Article::where('id', $item)->first();
            if(!$banner) {
                return $this->response(500,false,true, trans('Banner Not Found!'));
            }
            $banner->delete();
        }
        return $this->response(200,true,true, trans('Delete Successfully!'));
    }
}
