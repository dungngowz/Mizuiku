<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\User;
use App\Models\Province;
use App\Http\Requests\StoreUser;
use App\Scopes\LanguageScope;
use Illuminate\Support\Facades\Storage;
use App\Helpers\CommonHelper;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $careers;

    public function __construct()
    {
        $this->careers = [
            '1' => trans('admin.teacher'),
            '2' => trans('admin.student'),
            '3' => trans('admin.other')
        ];

        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index', [
            'title' => trans('admin.user')
        ]);
    }

    /**
     * Get datasource for datatable
     *
     * @return \Illuminate\Http\Response
     */
    public function data(Request $request) {
        $records = User::get();

        return DataTables::of($records)
            ->RawColumns(['actions'])
            ->addColumn('status', function($item) {
                return view('admin.user.cols-status', [
                    'item' => $item
                ]);
            })
            ->addColumn('actions', function($item) {
                return view('admin.user.cols-actions', [
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
        $title = trans('admin.user') . ' - ' . trans('admin.create');
        $record = new User;

        $currentLang = app()->getLocale();
        $provinces = Province::where('parent_id', 0)
            ->select('name_' . $currentLang . ' as name', 'id')
            ->orderBy('name_' . $currentLang, 'asc')
            ->get();

        return view('admin.user.edit', [
            'title' => $title,
            'record' => $record,
            'careers' => $this->careers,
            'provinces' => $provinces,
            'districts' => [],
            'currentLang' => $currentLang
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $record = new User;

        $params = $request->all();
        if(!empty($params['avatar'])){
            CommonHelper::updateFileRecord($params['avatar'], $record->avatar, 'user');
        }

        if(isset($params['created_at']) && strpos($params['created_at'], '/') !== false){
            $created_at = explode('-', $params['created_at']);
            list($d, $m, $y) = explode('/', trim($created_at[1]));
            $params['created_at'] = strtotime($y . '-' . $m . '-' . $d . ' ' . trim($created_at[0]));
        }

        $params['password'] = Hash::make($request->password);

        $record->fill($params);
        $record->save();
        
        return redirect('admin/user');
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
        $title = trans('admin.user') . ' - ' . trans('admin.edit');
        
        $record = User::find($id);
        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $currentLang = app()->getLocale();
        $provinces = Province::where('parent_id', 0)
            ->select('name_' . $currentLang . ' as name', 'id')
            ->orderBy('name_' . $currentLang, 'asc')
            ->get();

        $districts = Province::where('parent_id', $record->province_id)
            ->select('name_' . $currentLang . ' as name', 'id')
            ->orderBy('name_' . $currentLang, 'asc')
            ->get();
        
        return view('admin.user.edit', [
            'title' => $title,
            'record' => $record,
            'careers' => $this->careers,
            'provinces' => $provinces,
            'districts' => $districts,
            'currentLang' => $currentLang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUser $request, $id)
    {
        $record = User::find($id);

        if(!$record){
            return redirect()->route('admin.dashboard');
        }

        $params = $request->all();
        if(!empty($params['avatar']) && $params['avatar'] != $record->avatar){
            CommonHelper::updateFileRecord($params['avatar'], $record->avatar, 'user');
        }
        
        if(isset($params['created_at']) && strpos($params['created_at'], '/') !== false){
            $created_at = explode('-', $params['created_at']);
            list($d, $m, $y) = explode('/', trim($created_at[1]));
            $params['created_at'] = strtotime($y . '-' . $m . '-' . $d . ' ' . trim($created_at[0]));
        }

        if(!empty($params['password'])){
            $params['password'] = Hash::make($request->password);
        }else{
            $params['password'] = $record->password;
        }

        $record->fill($params);
        $record->save();
        return redirect('admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $record = User::find($id);
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
            $record = User::where('id', $item)->first();
            if(!$record) {
                return $this->response(500,false,true, trans('User Not Found!'));
            }
            $record->delete();
        }
        return $this->response(200,true,true, trans('Delete Successfully!'));
    }

    public function getDistrictsByProvince(Request $request){
        $districts = Province::where('parent_id', $request->province_id)
            ->select('id', 'name_' . $request->lang . ' as name')
            ->orderBy('name_' . $request->lang, 'asc')
            ->get();

        $html = view('admin.user.get-districts-by-province', ['districts' => $districts])->render();

        return $this->response(200,true,true, ['html' => $html]);
    }
}
