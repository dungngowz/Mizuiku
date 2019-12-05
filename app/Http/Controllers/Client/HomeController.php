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
        $locale = session()->get('locale') ? session()->get('locale') : 'en';

        $categories = Category::where('categories.priority', '1')
        ->where('categories.language',$locale)
        ->join('articles','articles.category_id','categories.id')
        ->where('articles.language',$locale)
        ->select('articles.*','categories.title as category_title')
        ->get()->take(2)->toArray();

        $articles = Article::where('language',$locale)->orderBy('created_at', 'desc')->get()->take(5)->toArray();
        $intro = Article::where('keyword', 'program-introduction')->where('language',$locale)->get()->toArray();

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
        $locale = session()->get('locale') ? session()->get('locale') : 'en';
        $intro = Article::where('keyword', $request->path)->where('language',$locale)->get()->toArray();
        
        return view('client.gioi-thieu', ['intro' => $intro]);
    }

    //
    /**
     * Display a listing of the detail introduction.
     */
    public function detailIntroduction(Request $request)
    {
        $locale = session()->get('locale') ? session()->get('locale') : 'en';
        $introDetail = Article::where('slug', $request->slug)->where('language',$locale)->get()->toArray();

        return view('client.detail', ['introDetail' => $introDetail]);
    }

    //
    /**
     * Display a listing of the e-learning.
     */
    public function eLearning()
    {
        $locale = session()->get('locale') ? session()->get('locale') : 'en';
        $eLearning = Article::where('keyword', 'e-learning')->where('language',$locale)->get()->toArray();

        return view('client.khoa-hoc', ['eLearning' => $eLearning]);
    }

    //
    /**
     * Display a listing of the program timeline.
     */
    public function programTimeline()
    {
        return view('client.lich-trinh');
    }
}
