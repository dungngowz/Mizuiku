<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreLibrary;
use App\Scopes\LanguageScope;
use App\Helpers\CommonHelper;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class LibraryController extends Controller
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
        $title = $request->keyword == 'video' ? trans('admin.video_library') : trans('admin.photo_library');

        return view('admin.library.index', [
            'title' => $title
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
                return view('admin.components.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.library.cols-actions', [
                    'item' => $item
                ]);
            })
            ->addColumn('thumbnail', function($item) {
                return view('admin.library.cols-thumbnail', [
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
        $title = $request->keyword == 'video' ? trans('admin.video_library') : trans('admin.photo_library');
        $title = $title . ' - ' . trans('admin.create');
        $record = new Article;

        $urlTrans = url('/admin/library/create?keyword='. $request->keyword . '&language=');
        $urlTrans .= (empty($request->language) || $request->language == 'vi') ? 'en' : 'vi';
        
        return view('admin.library.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans,
            'gallery' => []
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLibrary $request)
    {
        $record = new Article;

        $params = $request->all();
        if(!empty($params['thumbnail'])){
            CommonHelper::updateFileRecord($params['thumbnail'], $record->thumbnail, 'library');
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

        // store data to table gallery
        if($request->keyword == 'photo'){
            $files = $request->fileUpload;
            if($files) {
                foreach ($files as $item) {
                    $element = json_decode($item);
                    $gallery = Gallery::create([
                        'file_path' => 'library/'. $element->file_path,
                        'file_name' => $element->file_name,
                        'post_id' => $record->id
                    ]);
                }
            }
        }
        
        return redirect('admin/library?keyword=' . $request->keyword);
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
        $title = $request->keyword == 'video' ? trans('admin.video_library') : trans('admin.photo_library');
        $title = $title . ' - ' . trans('admin.edit');
        
        //Get detail category
        $record = Article::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        //Get url translate category
        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = Article::withoutGlobalScope(LanguageScope::class)
            ->where('ref_id', $record->ref_id)
            ->where('language', $langNeedTrans)
            ->first();

        if($chkRecord){
            $urlTrans = url('/admin/library/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/library/create?keyword='. $record->keyword . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        $gallery = [];
        if($record->keyword == 'photo'){
            $recordsGallery = Gallery::where('post_id', $record->id)->get();
            if($recordsGallery){
                foreach($recordsGallery as $item){
                    $gallery[] = (object)[
                        'name' => $item->file_name,
                        'path' => Storage::url($item->file_path),
                        'size' => 1000
                    ];
                }
            }
        }

        return view('admin.library.edit', [
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
    public function update(StoreLibrary $request, $id)
    {
        $record = Article::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();

        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $params = $request->all();
        if(!empty($params['thumbnail']) && $params['thumbnail'] != $record->thumbnail){
            CommonHelper::updateFileRecord($params['thumbnail'], $record->thumbnail, 'library');
        }
        $record->fill($params);

        $record->save();

        // store and remove data to table gallery
        if($request->keyword == 'photo'){
            // store
            $filesUploads = $request->fileUpload;
            if($filesUploads) {
                foreach ($filesUploads as $item) {
                    $element = json_decode($item);
                    $gallery = Gallery::create([
                        'file_path' => 'library/'. $element->file_path,
                        'file_name' => $element->file_name,
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
                        $path = str_replace(url('storage/library').'/', '', $element->path);
                        // dd($path);
                        if( Storage::disk('local')->exists('/public/library/'.$path)) {
                            unlink(storage_path('app/public/library/'.$path));
                        }

                        // from DB
                        if(!empty($element->name)) {
                            $remove = Gallery::where('file_path', 'library/'.$path)->delete();
                        }
                    }

                }
            }

        }

        return redirect('admin/library?keyword=' . $record->keyword);
    }

    public function storeFileUpload(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();

        // store image to storage
        $image->move(storage_path('app/public/library'), $imageName);

        return response()->json(['file_path'=>$imageName]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Article::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if($record && $record->delete()){
            return $this->response(200);
        }
        return $this->response(500);
    }
}
