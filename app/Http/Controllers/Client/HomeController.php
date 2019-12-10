<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Province;
use App\Http\Requests\RegisterClient;
use App\Models\User;
use App\Http\Requests\LoginClient;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locale = session()->get(config('const.key_locale_client')) ?? 'en';

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

        if($request->fullUrl() != $introDetail->url_detail_about_us){
            header('Location: '.$introDetail->url_detail_about_us);
            exit();
        }

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
        $gallery = Gallery::paginate(12)->toArray();
        return view('client.thu-vien', [
            'gallery' => $gallery,
            'title' => trans('client.album')
        ]);
    }

    /**
     * Store a newly created user
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ajaxRegister(RegisterClient $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        
        // Send Email Verify
        $user->sendEmailVerificationNotification();

        return $this->response(200,true,$user, trans('Created User Successfully!'));
    }

    /**
     * Get Provinces
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getProvinces(Request $request)
    {
        $locale = session()->get(config('const.key_locale_client')) ?? 'en';

        $city = Province::where('parent_id' , 0)->get();
        if($request->id) {
            if($request->id == 0) {
                return $this->response(200,true,null,'No data found!');
            }
            $disctrict = Province::where('parent_id' , $request->id)->get();
            return $this->response(200,true,$disctrict);
        }

        return $this->response(200,true,$city);
    }

    /**
     * Login
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ajaxLogin(LoginClient $request)
    {
        dd($request);
        return $this->response(200,true,null, trans('Login Successfully!'));
    }
}
