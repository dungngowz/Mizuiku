<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Banner;
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
        $categoriesNews = Category::orderBy('priority', 'desc')->orderBy('id', 'desc')->where('status', 1)->take(1)->get();
      
        $newsByCats = Category::sortBy()->where('status', 1)->take(1)->get()->map(function ($cat) {
            return $cat->articles()->where('status', 1)->sortBy()->first();
        });

        // find article is "news"
        $cats = Category::where('type', 'news')->where('status', 1)->pluck('id')->toArray();
        $news = Article::whereIn('category_id', $cats)->where('status', 1)->sortBy()->get();
        $compare = $news->diff($newsByCats)->take(5);

        $intro = Article::where('keyword', 'program-introduction')->sortBy()->first();
        $libraryPhoto = Article::with(['gallery'])->where('keyword', 'photo')->where('status', 1)->sortBy()->take(6)->get();
        $libraryVideo = Article::where('keyword', 'video')->where('status', 1)->sortBy()->take(3)->get();
        $banners = Banner::where('type', 'home')->sortBy()->get();
        
        $data = [ 
            'newsByCats' => $newsByCats, 
            'categoriesNews' => $categoriesNews,
            'articles' => $compare,
            'intro' => $intro,
            'photos' => $libraryPhoto,
            'videos' => $libraryVideo,
            'banners' => $banners
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
        $eLearning = Article::where('keyword', 'e-learning')->first();
        
        //Update Views
        $eLearning->views = $eLearning->views + 1;
        $eLearning->save();

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
        if(\Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return $this->response(200,true,null, trans('Login Successfully!'));
        }
        return $this->response(500,false,null, trans('Login Fail!'));
    }

    /**
     * Show Term
     * @param  $keyword
     */
    public function showTermOrPolicy($keyword)
    {
        $term = Article::where('keyword', $keyword)->first();

        // Get other articles
        $cats = Category::where('type', 'news')->where('status', 1)->pluck('id')->toArray();
        $otherArticles = Article::whereIn('category_id', $cats)->where('status', 1)->sortBy()->take(5)->get();

        return view('client.term-and-policy', [
            'data' => $term, 
            'otherArticles' => $otherArticles
        ]);
    }
}
