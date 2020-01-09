<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Article;
use App\Models\Category;
use App\Http\Requests\StoreCourseVideo;
use App\Scopes\LanguageScope;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\Storage;

class CourseVideoController extends Controller
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
        $courseCategories = Category::where('type', 'course')->orderBy('priority', 'desc')->orderBy('id', 'desc')->get();

        return view('admin.course-video.index', [
            'title' => trans('admin.course_video'),
            'courseCategories' => $courseCategories
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = Article::with('category')->where('keyword', 'course');

        if($request->category_id){
            $records = $records->where('category_id', $request->category_id);
        }

        $records = $records->get();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.components.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.course-video.cols-actions', [
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
        $title = trans('admin.course_video') . ' - ' . trans('admin.create');
        $record = new Article;

        $urlTrans = url('/admin/course-video/create?keyword='. $request->keyword . '&language=');
        $currentLang = empty($request->language) ? 'vi' : $request->language;
        $urlTrans .= ($currentLang == 'vi') ? 'en' : 'vi';

        $courseCategories = Category::withoutGlobalScope(LanguageScope::class)
            ->where('language', $currentLang)
            ->orderBy('id', 'desc')
            ->where('type', 'course')
            ->get();
        
        return view('admin.course-video.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans,
            'courseCategories' => $courseCategories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseVideo $request)
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
        
        return redirect('admin/course-video?keyword=' . $request->keyword);
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
        $title = trans('admin.course_video') . ' - ' . trans('admin.edit');
        
        //Get detail category
        $record = Article::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        //Get url translate category
        $currentLang = empty($request->language) ? $record->language : $request->language;
        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = Article::where('ref_id', $record->ref_id)->where('language', $langNeedTrans)->first();
        if($chkRecord){
            $urlTrans = url('/admin/course-video/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/course-video/create?keyword='. $record->keyword . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        $courseCategories = Category::withoutGlobalScope(LanguageScope::class)
            ->where('language', $currentLang)
            ->where('type', 'course')
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.course-video.edit', [
            'title' => $title,
            'record' => $record,
            'urlTrans' => $urlTrans,
            'courseCategories' => $courseCategories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCourseVideo $request, $id)
    {
        $record = Article::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();

        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $record->fill($request->all());
        $record->save();

        return redirect('admin/course-video?keyword=' . $record->keyword);
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
