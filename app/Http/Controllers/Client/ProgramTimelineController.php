<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramTimeline;

class ProgramTimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.lich-trinh', [
            'title' => trans('client.program-timeline')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $record = ProgramTimeline::where('ref_id', $request->ref_id)->first();
        if(!$record){
            return redirect('lich-trinh');
        }

        return view('client.lich-trinh', [
            'record' => $record,
            'title' => $record->title
        ]);
    }
}
