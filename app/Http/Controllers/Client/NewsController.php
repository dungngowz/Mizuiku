<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Article;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $slugCategory)
    {
        $categoriesNews = Category::where('type', 'news')->orderBy('priority', 'desc')->orderBy('id', 'desc')->where('status', 1)->get();
        $detailCategory = Category::where('ref_id', $request->ref_id)->first();

        if(!$detailCategory || !$categoriesNews){
            return redirect('/');
        }

        $articles = Article::where('category_id', $detailCategory->id)
            ->orderBy('priority', 'desc')
            ->orderBy('id', 'desc')
            ->where('status', 1)
            ->paginate(15);
        
        return view('client.news', [
            'categoriesNews' => $categoriesNews,
            'detailCategory' => $detailCategory,
            'articles' => $articles
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slugCategory, $slugArticle)
    {
        $record = Article::where('ref_id', $request->ref_id)->first();
        
        $categoriesNews = Category::where('type', 'news')->orderBy('priority', 'desc')->orderBy('id', 'desc')->where('status', 1)->get();

        if(!$record){
            return redirect('/');
        }

        //Update Views
        $record->views = $record->views + 1;
        $record->save();

        $ortherArticles = Article::where('category_id', $record->category_id)
            ->where('id', '<>', $record->id)
            ->orderBy('priority', 'desc')
            ->orderBy('id', 'desc')
            ->where('status', 1)
            ->limit(5)
            ->get();

        return view('client.news-detail', [
            'record' => $record,
            'categoriesNews' => $categoriesNews,
            'ortherArticles' => $ortherArticles
        ]);
    }
}
