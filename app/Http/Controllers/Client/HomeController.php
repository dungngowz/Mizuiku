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
     *
     * @return \Illuminate\Http\Response
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
        $intro = Article::where('keyword', 'introduction')->where('language',$locale)->get()->toArray();
        
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
}
