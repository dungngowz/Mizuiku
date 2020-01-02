<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Category;
use App\Http\Requests\StoreCategory;
use App\Scopes\LanguageScope;
use App\Helpers\CommonHelper;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

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
    public function index(Request $request)
    {
        $title = ($request->type == 'news') ? trans('admin.news_categories') : trans('admin.course_categories');

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
        $records = Category::where('type', $request->type)->get();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.components.language', [
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
        $title = ($request->type == 'news') ? trans('admin.news_categories') : trans('admin.course_categories');
        $title = $title . ' - ' . trans('admin.create');
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

        // store and remove data to table gallery
        if($request->type == 'course' || $record->type == 'course'){
            // store
            $filesUploads = $request->fileUpload;
            if($filesUploads) {
                foreach ($filesUploads as $item) {
                    $element = json_decode($item);
                    $gallery = Gallery::create([
                        'table_name' => 'categories',
                        'file_path' => $element->file_path,
                        'file_name' => $element->file_name,
                        'size' => $element->size,
                        'post_id' => $record->id
                    ]);
                }
            }
            // remove
            $filesRemoves = $request->fileRemove;

            if($filesRemoves) {
                foreach ($filesRemoves as $item) {
                    $element = json_decode($item);
                    
                    // from storage
                    if(!empty($element->path)) {
                        $path = str_replace('/storage/', '', $element->path);
                        
                        if( Storage::exists($path)) {
                            Storage::delete($path);
                        }

                        // from DB
                        if(!empty($element->name)) {
                            $remove = Gallery::where('file_path', $path)->delete();
                        }
                    }

                }
            }

        }
        
        return redirect('admin/categories?type=' . $request->type);
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
    public function edit(Request $request, $id)
    {
        $title = trans('admin.news_categories') . ' - ' . trans('admin.edit');
        
        //Get detail category
        $record = Category::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        //Get url translate category
        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = Category::withoutGlobalScope(LanguageScope::class)
            ->where('ref_id', $record->ref_id)
            ->where('language', $langNeedTrans)
            ->first();

        if($chkRecord){
            $urlTrans = url('/admin/categories/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/categories/create?type='. $record->type . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        $gallery = [];
        if($request->type == 'course' || $record->type == 'course'){
            $recordsGallery = Gallery::where('post_id', $record->id)->get();
            if($recordsGallery){
                foreach($recordsGallery as $item){
                    $gallery[] = (object)[
                        'name' => $item->file_name,
                        'path' => Storage::url($item->file_path),
                        'size' => $item->size
                    ];
                }
            }
        }

        return view('admin.categories.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans,
            'gallery' => $gallery
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
        $record = Category::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();

        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $record->fill($request->all());
        $record->save();

        // store and remove data to table gallery
        if($request->type == 'course' || $record->type == 'course'){
            // store
            $filesUploads = $request->fileUpload;
            
            if($filesUploads) {
                foreach ($filesUploads as $item) {
                    $element = json_decode($item);
                    $gallery = Gallery::create([
                        'table_name' => 'categories',
                        'file_path' => $element->file_path,
                        'file_name' => $element->file_name,
                        'size' => $element->size,
                        'post_id' => $record->id
                    ]);
                }
            }
            // remove
            $filesRemoves = $request->fileRemove;

            if($filesRemoves) {
                foreach ($filesRemoves as $item) {
                    $element = json_decode($item);
                    
                    // from storage
                    if(!empty($element->path)) {
                        $path = str_replace('/storage/', '', $element->path);
                        
                        if( Storage::exists($path)) {
                            Storage::delete($path);
                        }

                        // from DB
                        if(!empty($element->name)) {
                            $remove = Gallery::where('file_path', $path)->delete();
                        }
                    }

                }
            }

        }

        return redirect('admin/categories?type=' . $record->type);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Category::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
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
            $banner = Category::where('id', $item)->first();
            if(!$banner) {
                return $this->response(500,false,true, trans('Banner Not Found!'));
            }
            $banner->delete();
        }
        return $this->response(200,true,true, trans('Delete Successfully!'));
    }
}
