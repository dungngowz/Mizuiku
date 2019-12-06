<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\ProgramTimeline;
use App\Http\Requests\StoreProgramTimeline;

class ProgramTimelineController extends Controller
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
        return view('admin.program-timeline.index', [
            'title' => 'Program Timeline'
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = ProgramTimeline::where('keyword', $request->keyword)->get();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.commons.language', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.program-timeline.cols-actions', [
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
    public function create(Request $request){
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProgramTimeline $request){
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
        $record = ProgramTimeline::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = ProgramTimeline::where('ref_id', $record->ref_id)->where('language', $langNeedTrans)->first();
        if($chkRecord){
            $urlTrans = url('/admin/program-timeline/'.$chkRecord->id.'/edit');
        }else{
            $urlTrans = url('/admin/program-timeline/create?keyword='. $record->keyword . '&language=' . $langNeedTrans . '&ref_id='.$record->ref_id);
        }

        return view('admin.program-timeline.edit', [
            'title' => $record->title,
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
    public function update(StoreProgramTimeline $request, $id)
    {
        $record = ProgramTimeline::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $record->fill($request->all());
        $record->save();
        return redirect('admin/program-timeline?keyword=' . $record->keyword);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = ProgramTimeline::find($id);
        if($record && $record->delete()){
            return $this->response(200);
        }
        return $this->response(500);
    }
}
