<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Requests\StoreQuiz;
use App\Scopes\LanguageScope;
use App\Helpers\CommonHelper;
use App\Models\Quiz;
use Illuminate\Support\Facades\Storage;

class QuizCourseController extends Controller
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
        return view('admin.quiz.index', [
            'title' => trans('admin.evaluation-course')
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function getData(Request $request) {
        $records = Quiz::all();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.components.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.quiz.cols-actions', [
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
        $title = trans('admin.evaluation-course') . ' - ' . trans('admin.create');
        $record = new Quiz;

        $urlTrans = url('/admin/quiz/create?language=');
        $urlTrans .= (empty($request->language) || $request->language == 'vi') ? 'en' : 'vi';

        return view('admin.quiz.edit', [
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
    public function store(StoreQuiz $request)
    {
        $record = new Quiz;
        $record->fill($request->all());
        $record->save();
        
        return redirect('admin/quiz');
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
        $title = trans('admin.evaluation-course') . ' - ' . trans('admin.edit');
        
        //Get detail quiz
        $record = Quiz::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        //Get url translate quiz
        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = Quiz::withoutGlobalScope(LanguageScope::class)
            ->where('ref_id', $record->ref_id)
            ->where('language', $langNeedTrans)
            ->first();

        if($chkRecord){
            $urlTrans = url('/admin/quiz/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/quiz/create?&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        return view('admin.quiz.edit', [
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
    public function update(StoreQuiz $request, $id)
    {
        $record = Quiz::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();

        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $record->fill($request->all());
        $record->save();

        return redirect('admin/quiz');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Quiz::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
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
            $record = Quiz::where('id', $item)->first();
            if(!$record) {
                return $this->response(500,false,true, trans('record Not Found!'));
            }
            $record->delete();
        }
        return $this->response(200,true,true, trans('Delete Successfully!'));
    }
}
