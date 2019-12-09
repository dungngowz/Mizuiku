<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;

class HomeController extends Controller
{

    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = session()->get('client-locale') ?? 'en';

        $categories = Category::where('categories.priority', '1')
        ->join('articles','articles.category_id','categories.id')
        ->where('articles.language',$locale)
        ->select('articles.*','categories.title as category_title')
        ->get()->take(2)->toArray();

        $articles = Article::orderBy('created_at', 'desc')->get()->take(5)->toArray();
        $intro = Article::where('keyword', 'program-introduction')->first();

        $data = [ 
            'categories' => $categories, 
            'articles' => $articles,
            'intro' => $intro
        ];

        return view('client.index', $data);
    }

    //
    /**
     * Display a listing of the contact.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request)
    {
        if ($request->ajax()) {
            $contact = Contact::create($request->all());
            return $this->response(200,true, $contact, trans('The contact was created successfully'));
        }
        return view('client.lien-he');
    }

    //
    /**
     * Display a listing of the introduction.
     */
    public function introduction(Request $request)
    {
        $intro = Article::where('keyword', $request->path)->first();

        return view('client.gioi-thieu', ['intro' => $intro]);
    }

    //
    /**
     * Display a listing of the detail introduction.
     */
    public function detailIntroduction(Request $request, $slug)
    {
        $introDetail = Article::where('ref_id', $request->ref_id)->first();

        return view('client.detail', ['introDetail' => $introDetail]);
    }

    //
    /**
     * Display a listing of the e-learning.
     */
    public function eLearning()
    {
        $eLearning = Article::where('keyword', 'e-learning')->get()->toArray();

        return view('client.khoa-hoc', ['eLearning' => $eLearning]);
    }

    //
    /**
     * Display a listing of the news.
     */
    public function library(Request $request)
    {
        return view('client.thu-vien');
    }
}
