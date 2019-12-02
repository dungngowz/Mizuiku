<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Category;
use App\Http\Requests\StoreCategory;

class CategoryController extends Controller
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
        $title = trans('admin.news_categories');

        return view('admin.categories.index', [
            'title' => $title
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = Category::all();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.commons.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.categories.cols-actions', [
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
        $title = trans('admin.news_categories') . ' - ' . trans('admin.create');
        $record = new Category;

        $urlTrans = url('/admin/categories/create?type='. $request->type . '&language=');
        $urlTrans .= (empty($request->language) || $request->language == 'vi') ? 'en' : 'vi';

        return view('admin.categories.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategory $request)
    {
        $record = new Category;
        $record->fill($request->all());

        if($request->ref_id){
            $record->ref_id = $request->ref_id;
            $record->save();
        }else{
            $record->save();
            $record->ref_id = $record->id;
            $record->save();
        }
        
        return redirect('admin/categories');
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
        $title = trans('admin.news_categories') . ' - ' . trans('admin.edit');
        
        $record = Category::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = Category::where('id', $id)->where('language', $langNeedTrans)->first();
        if($chkRecord){
            $urlTrans = url('/admin/categories/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/categories/create?type='. $record->type . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        return view('admin.categories.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCategory $request, $id)
    {
        $record = Category::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $record->fill($request->all());
        $record->save();
        return redirect('admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
