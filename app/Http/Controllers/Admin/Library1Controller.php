<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Yajra\DataTables\DataTables;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.library.index', [
            'title' => 'Library'
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = Gallery::all();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('actions', function($item) {
                return view('admin.library.cols-actions', [
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
        return view('admin.library.create' , ['title' => trans('admin.library'). ' - ' .trans('admin.create')]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->fileUpload;
        // dd($request->all(), json_decode($request->fileUpload[0]));
        if($data) {
            foreach ($data as $item) {
                $element = json_decode($item);

                // store data to DB
                $gallery = Gallery::create([
                    'file_path' => 'gallery/'. $element->file_path,
                    'file_name' => $element->file_name
                ]);
            }
        }

        return redirect()->route('admin.library');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $record = Gallery::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        return view('admin.library.edit', [
            'title' => trans('admin.library').' - ' .trans('admin.edit'),
            'record' => $record
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $record = Gallery::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }
        $record->update($request->all());

        return redirect()->route('admin.library');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = Gallery::find($id);
        if($record && $record->delete()){
            return $this->response(200);
        }
        return $this->response(500);
    }

    public function storeFileUpload(Request $request)
    {
        $image = $request->file('file');
        $imageName = time().'.'.$image->extension();

        // store image to storage
        $image->move(storage_path('app/public/gallery'), $imageName);

        return response()->json(['file_path'=>$imageName]);
    }
}
