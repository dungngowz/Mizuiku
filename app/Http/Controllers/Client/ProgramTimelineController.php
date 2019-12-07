<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Scopes\LanguageScope;

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
        return view('client.lich-trinh');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //Get detail program timeline
        $record = ProgramTimeline::where('slug', $slug)->first();
        if(!$record){
            $record = ProgramTimeline::withoutGlobalScope(LanguageScope::class)->where('slug', $slug)->first();

            if(!$record){
                return redirect('lich-trinh');
            }

            $record = ProgramTimeline::withoutGlobalScope(LanguageScope::class)
                ->where('id', '!=', $record->id)
                ->where('ref_id', $record->ref_id)
                ->first();

            if(!$record){
                return redirect('lich-trinh');
            }
            
            return redirect('lich-trinh/' . $record->slug);
        }

        return view('client.lich-trinh', ['record' => $record]);
    }
}
