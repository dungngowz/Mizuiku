<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\ProgramTimeline;
use App\Http\Requests\StoreProgramTimeline;
use App\Scopes\LanguageScope;

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
            'title' => trans('admin.program_timeline')
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = ProgramTimeline::all();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('language', function($item) {
                return view('admin.components.language', [
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
        $title = trans('admin.program_timeline') . ' - ' . trans('admin.create');
        $record = new ProgramTimeline;

        $urlTrans = url('/admin/program-timeline/create?type='. $request->type . '&language=');
        $urlTrans .= (empty($request->language) || $request->language == 'vi') ? 'en' : 'vi';

        return view('admin.program-timeline.edit', [
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
    public function store(StoreProgramTimeline $request){
        $record = new ProgramTimeline;
        $record->fill($request->all());

        if($request->ref_id){
            $record->ref_id = $request->ref_id;
            $record->save();
        }else{
            $record->save();
            $record->ref_id = $record->id;
            $record->save();
        }
        
        return redirect('admin/program-timeline');
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
        //Get detail program timeline
        $record = ProgramTimeline::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        //Get url translate article
        $langNeedTrans = ($record->language == 'vi') ? 'en' : 'vi';
        $chkRecord = ProgramTimeline::withoutGlobalScope(LanguageScope::class)
            ->where('ref_id', $record->ref_id)
            ->where('language', $langNeedTrans)
            ->first();

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
        $record = ProgramTimeline::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $record->fill($request->all());
        $record->save();
        return redirect('admin/program-timeline');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = ProgramTimeline::withoutGlobalScope(LanguageScope::class)->where('id', $id)->first();
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
            $item = ProgramTimeline::where('id', $item)->first();
            if(!$item) {
                return $this->response(500,false,true, trans('Item Not Found!'));
            }
            $item->delete();
        }
        return $this->response(200,true,true, trans('Delete Successfully!'));
    }
}
