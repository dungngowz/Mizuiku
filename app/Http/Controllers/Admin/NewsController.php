<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = \DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->get();
            return datatables()->of($query)->toJson();;
        }
        return view('admin.news.index');
    }

    /**
     * Display a listing of the program.
     *
     * @return \Illuminate\Http\Response
     */
    public function program(Request $request)
    {
        if ($request->ajax()) {
            $query = \DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->where('type','program')
            ->get();
            return datatables()->of($query)->toJson();
        }
        return view('admin.news.program');
    }

    /**
     * Display a listing of the partner.
     *
     * @return \Illuminate\Http\Response
     */
    public function environment(Request $request)
    {
        if ($request->ajax()) {
            $query = \DB::table('articles')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->where('type','environment')
            ->get();
            return datatables()->of($query)->toJson();
        }
        return view('admin.news.environment');
    }
}
