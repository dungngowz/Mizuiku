<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Article;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $keyword)
    {
        $articles = Article::where('keyword', $keyword)
            ->orderBy('priority', 'desc')
            ->orderBy('id', 'desc')
            ->where('status', 1)
            ->paginate(15);
        
        return view('client.library', [
            'articles' => $articles,
            'title' => $keyword == 'video' ? trans('client.video') : trans('client.album')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $keyword, $slugArticle)
    {
        $record = Article::where('ref_id', $request->ref_id)->first();
        
        $categoriesNews = Category::orderBy('priority', 'desc')->orderBy('id', 'desc')->where('status', 1)->get();

        if(!$record){
            return redirect('/');
        }

        $ortherArticles = Article::where('category_id', $record->category_id)
            ->where('id', '<>', $record->id)
            ->orderBy('priority', 'desc')
            ->orderBy('id', 'desc')
            ->where('status', 1)
            ->get();

        return view('client.news-detail', [
            'record' => $record,
            'categoriesNews' => $categoriesNews,
            'ortherArticles' => $ortherArticles
        ]);
    }
}
