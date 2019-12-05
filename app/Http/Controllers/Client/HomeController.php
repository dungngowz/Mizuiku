<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;

class HomeController extends Controller
{

    protected $locale;

    public function __construct()
    {
        $this->locale = session()->get('locale') ? session()->get('locale') : 'en';
    }

    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $locale = 

        $categories = Category::where('categories.priority', '1')
        ->where('categories.language',$this->locale)
        ->join('articles','articles.category_id','categories.id')
        ->where('articles.language',$this->locale)
        ->select('articles.*','categories.title as category_title')
        ->get()->take(2)->toArray();

        $articles = Article::where('language',$this->locale)->orderBy('created_at', 'desc')->get()->take(5)->toArray();
        $intro = Article::where('keyword', 'introduction')->where('language',$this->locale)->get()->toArray();

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
        $intro = Article::where('keyword', 'introduction')->where('language',$this->locale)->get()->toArray();

        return view('client.gioi-thieu', ['intro' => $intro]);
    }

    //
    /**
     * Display a listing of the introduction.
     */
    public function detailIntroduction(Request $request)
    {
        $introDetail = Article::where('keyword', 'introduction-detail')->where('language',$this->locale)->get()->toArray();

        return view('client.detail', ['introDetail' => $introDetail]);
    }
}
