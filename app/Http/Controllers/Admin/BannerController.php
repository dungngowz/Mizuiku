<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Banner;
use App\Http\Requests\StoreBanner;
use App\Scopes\LanguageScope;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
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
        return view('admin.banners.index', [
            'title' => 'Banners'
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = Banner::where('type', 'home')->get();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.components.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.banners.cols-actions', [
                    'item' => $item
                ]);
            })
            ->addColumn('thumbnail', function($item) {
                return view('admin.banners.cols-thumbnail', [
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
        $title = 'Banner - ' . trans('admin.create');
        $record = new Banner;

        $urlTrans = url('/admin/banners/create?type='. $request->type . '&language=');
        $urlTrans .= (empty($request->language) || $request->language == 'vi') ? 'en' : 'vi';

        return view('admin.banners.edit', [
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
    public function store(StoreBanner $request)
    {
        $record = new Banner;

        $params = $request->all();
        if(!empty($params['thumbnail'])){
            CommonHelper::updateFileRecord($params['thumbnail'], $record->thumbnail, 'banners');
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
        
        return redirect('admin/banners?type=' . $request->type);
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
        $title = 'Banner - ' . trans('admin.edit');
        
        //Get detail Banner
        $record = Banner::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        //Get url translate Banner
        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = Banner::withoutGlobalScope(LanguageScope::class)
            ->where('ref_id', $record->ref_id)
            ->where('language', $langNeedTrans)
            ->first();

        if($chkRecord){
            $urlTrans = url('/admin/banners/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/banners/create?type='. $record->type . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        return view('admin.banners.edit', [
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
    public function update(StoreBanner $request, $id)
    {
        $record = Banner::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();

        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $params = $request->all();
        if(!empty($params['thumbnail']) && $params['thumbnail'] != $record->thumbnail){
            CommonHelper::updateFileRecord($params['thumbnail'], $record->thumbnail, 'banners');
        }
        $record->fill($params);

        $record->save();
        return redirect('admin/banners?type=' . $record->type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Banner::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
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
            $banner = Banner::where('id', $item)->first();
            if(!$banner) {
                return $this->response(500,false,true, trans('Banner Not Found!'));
            }
            $banner->delete();
        }
        return $this->response(200,true,true, trans('Delete Successfully!'));
    }
}
