<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class HomeController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('articles')->where('priority', '1')->take(2)->get()->toArray();
        $articles = Article::get()->sortByDesc('created_at')->take(5)->toArray();

        return view('client.index', [ 'categories' => $categories, 'articles' => $articles]);
    }
}
