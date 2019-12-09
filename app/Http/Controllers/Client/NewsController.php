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
        $categoriesNews = Category::orderBy('priority', 'desc')->orderBy('id', 'desc')->where('status', 1)->get();
        $detailCategory = Category::where('ref_id', $request->ref_id)->first();

        if(!$detailCategory || !$categoriesNews){
            return redirect('/');
        }

        $articles = Article::where('category_id', $detailCategory->id)
            ->orderBy('priority', 'desc')
            ->orderBy('id', 'desc')
            ->where('status', 1)
            ->paginate(1);
        
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
