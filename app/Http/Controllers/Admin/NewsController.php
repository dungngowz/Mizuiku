<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Response;

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
            ->select('articles.*','categories.type')
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
            ->select('articles.*','categories.type')
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
            ->select('articles.*','categories.type')
            ->join('categories', 'articles.category_id', '=', 'categories.id')
            ->where('type','environment')
            ->get();
            return datatables()->of($query)->toJson();
        }
        return view('admin.news.environment');
    }

    /**
     * Display a listing of the category.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCategory(Request $request)
    {
        if ($request->ajax()) {
            return response()->json(Category::all());;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $news = Article::create($request->all());
        return response()->json($news);
    }
}
