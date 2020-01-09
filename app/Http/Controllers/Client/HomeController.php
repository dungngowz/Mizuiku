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
use App\Http\Requests\ChangePassword;
use App\Models\Comment;
use App\Mail\VerifyRegister;
use Illuminate\Auth\Notifications\VerifyEmail;
use Mail;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Models\LearningOutcomes;

class HomeController extends Controller
{

    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriesNews = Category::where('type', 'news')->orderBy('priority', 'desc')->orderBy('id', 'desc')->where('status', 1)->take(2)->get();
      
        $newsByCats = Category::where('type', 'news')->sortBy()->where('status', 1)->take(2)->get()->map(function ($cat) {
            return $cat->articles()->where('status', 1)->sortBy()->first();
        })->filter(function ($value, $key) {
            return $value;
        });

        // find article is "news"
        $cats = Category::where('type', 'news')->where('status', 1)->pluck('id')->toArray();
        $news = Article::whereIn('category_id', $cats)->where('keyword', 'news')->where('status', 1)->sortBy()->get();
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

        if(!$introDetail){
            return redirect('/');
        }

        $keywords = ['program-introduction', 'co-organizingboard', 'suntory-group', 'suntory-pepsico', 'vietNam-national-student-union', 'pioneer-organization'];
        $ortherArticles = Article::whereIn('keyword', $keywords)
            ->where('id', '<>', $introDetail->id)
            ->orderBy('priority', 'desc')
            ->orderBy('id', 'desc')
            ->where('status', 1)
            ->limit(5)
            ->get();

        //Update Views
        $introDetail->views = $introDetail->views + 1;
        $introDetail->save();
        
        return view('client.detail-intro', ['introDetail' => $introDetail, 'ortherArticles' => $ortherArticles]);
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
    public function ajaxRegister(Request $request)
    {
        $validation = \Validator::make($request->all(),[ 
            'name' => 'required',
            'email' => "required|unique:users,email",
            'password' => "required"
        ]);
        if($validation->fails()){
            return $this->response(500,false,null, $validation->messages());
        } 
        else {
            // create user
            DB::beginTransaction();
            try {
                $data = $request->all();

                $data['province_id'] = $data['city'];
                $data['district_id'] = $data['district'];

                $data['password'] = Hash::make($data['password']);
                $user = User::create($data);
                DB::commit(); 
            } catch (\Exception $e) { 
                DB::rollback(); 
                return $this->response(500, false, null, $e->getMessage());
            }

            // Send Email Verify
            Mail::to($data['email'], $data['name'])->send(new VerifyRegister($user));

            return $this->response(200,true,$user, trans('Created User Successfully!'));
        }
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

    /**
     * Show User Info
     */
    public function showManageAccount()
    {
        $user = auth()->user();
        $locale = $_COOKIE[config('const.key_locale_client')] ?? 'vi';
        $findColumn = 'name_' . $locale;

        $cityName = Province::where('id' , $user->province_id)->first();
        $user->city_name = $cityName ? $cityName->$findColumn : null;

        $disctrictName = Province::where('id' , $user->district_id)->first();
        $user->district_name = $disctrictName ? $disctrictName->$findColumn : null;
        $user->avatar;

        $city = Province::where('parent_id' , 0)->get();
        $disctrict = Province::where('parent_id' , $user->province_id)->get();
        
        return view('client.info-user', [
            'user' => $user,
            'city' => $city,
            'findColumn' => $findColumn,
            'district' => $disctrict
        ]);
    }

    /**
     * Logout
     */
    public function logoutClient() {
        \Auth::logout();
        return redirect('/');
    }

    /**
     * Show User Info
     */
    public function updateInfo(Request $request)
    {
        $user = auth()->user();
        $params = $request->all();
        
        // upload avatar
        if($request->avatar){
            $image = $request->file('avatar');
            $image->move(storage_path('app/public/avatar'), $image->getClientOriginalName());
            $params['avatar'] = 'avatar/'.$image->getClientOriginalName();
        }

        $params['receive_emails'] = empty($params['receive_emails']) ? 0 : 1;

        // update data user
        $user->update($params);
        
        return redirect()->route('showManageAccount')->with('showAlertSuccess' , true);
    }

    /**
     * Show Change Password
     */
    public function showChangePassword()
    {
        return view('client.change-pass', [
            'user' => auth()->user(),
        ]);
    }

    /**
     * Update Password
     */
    public function updateChangePassword(ChangePassword $request)
    {
        $user = auth()->user();
        if(Hash::check($request->old_password, $user->password)) {
            if($request->new_password == $request->confirm_new_password) {
                $user->update(['password'=> Hash::make($request->new_password)]);
                return $this->response(200,true,true, trans('Change password successfully!'));
            }
            return $this->response(500,false,null, trans('New password not like re-new password!'));
        }

        return $this->response(500,false,null, trans('Old password wrong!'));
    }

    /**
     * Show My Course
     */
    public function showMyCourse()
    {
        $user = auth()->user();
        $courses = Category::where('type', 'course')->orderBy('priority', 'desc')->orderBy('created_at', 'desc')->get();
        $courseIds = Category::where('type', 'course')->pluck('id')->toArray();
        $documents = Gallery::whereIn('post_id', $courseIds)->where('table_name', 'categories')->get();
        
        return view('client.my-course', [
            'user' => $user,
            'courses' => $courses,
            'documents' => $documents,
            'learning_process' => empty($user->learning_process) ? [] : (array)json_decode($user->learning_process)
        ]);
    }

    /**
     * Show Course
     */
    public function showCourse(Request $request, $slug)
    {
        $courses = Category::where('type', 'course')->where('status', 1)->orderBy('priority', 'desc')->orderBy('id', 'desc')->pluck('ref_id')->toArray();
        $course = Category::where('type', 'course')->where('status', 1)->where('slug', $slug)->first();
        $user = Auth::user();
        
        if(!$user || !$courses || !$course || empty($course->articles)){
            return redirect('/');
        }

        $indexCourse = array_search($course->ref_id, $courses);
        $isAllowSee = true;
        if($indexCourse > 0){
            $course_ref_id = $courses[$indexCourse - 1];
            $learning_process = empty($user->learning_process) ? [] : (array)json_decode($user->learning_process);
            if(!isset($learning_process[$course_ref_id]) || $learning_process[$course_ref_id] < 100){
                $isAllowSee = false;
            }
        }

        $videoLearned = $user->learningOutcomes()->where('course_ref_id', $course->ref_id)->pluck('video_ref_id')->toArray();
        $comments = Comment::where('post_id', $course->id)->get();
        
        return view('client.detail-course', [
            'title' => $course->title,
            'course' => $course,
            'listArticle' => $course->articles()->orderBy('priority', 'desc')->orderBy('id', 'desc')->get(),
            'comments' => $comments,
            'isAllowSee' => $isAllowSee,
            'videoLearned' => $videoLearned
        ]);
    }

     /**
     * Add Comment
     */
    public function addComment(Request $request)
    {
        DB::beginTransaction();
        try {
            $comments = Comment::create([
                'post_id' => $request->post_id,
                'content' => $request->content,
                'ip' => $request->ip(),
                'created_user_id' => $request->user()->id,
                'updated_user_id' => $request->user()->id,
            ]);
            DB::commit(); 
            return $this->response(200,true,true, trans('Create comment successfully!'));
        } catch (\Exception $e) { 
            DB::rollback(); 
            return $this->response(500,false,null, $e->getMessage());
        }
    }

    public function updateViewsCourse(Request $request){
        
        $video_ref_id = $request->video_ref_id;
        $course_ref_id = $request->course_ref_id;
        $user = Auth::user();

        if(!$user){
            return $this->response(500,false,null, 'Bạn chưa đăng nhập');
        }

        $learning = LearningOutcomes::where('user_id', $user->id)->where('course_ref_id', $course_ref_id)->where('video_ref_id', $video_ref_id)->first();
        if(!$learning){
            $learning = new LearningOutcomes;
            $learning->fill([
                'video_ref_id' => $video_ref_id,
                'course_ref_id' => $course_ref_id,
                'user_id' => $user->id
            ]);
            $learning->save();
        }

        return $this->response(200, false, null, [
            'user' => $user
        ]);
    }

    public function updatePercentFinishCourse(Request $request){
        $course_ref_id = $request->course_ref_id;
        $perc = intval($request->perc);
        $user = Auth::user();

        if(!$user){
            return $this->response(500, false, null, 'Bạn chưa đăng nhập');
        }

        if(empty($user->learning_process)){
            $learning_process = array(
                $course_ref_id => $perc
            );
        }else{
            $learning_process = (array)json_decode($user->learning_process);
            $learning_process[$course_ref_id] = $perc;
        }

        $finished = 1;
        $courseCategories = Category::where('type', 'course')->where('status', 1)->count();
        if($courseCategories != count($learning_process)){
            $finished = 0;
        }else{
            foreach($learning_process as $item){
                if($item < 100){
                    $finished = 0;
                }
            }
        }
        $user->complete_courses = $finished;
        
        $user->learning_process = json_encode($learning_process);
        $user->save();

        return $this->response(200, false, null, [
            'data' => $learning_process
        ]);
    }

    public function statistical(Request $request){
        $currentLang = app()->getLocale();
        $provinces = Province::where('parent_id', 0)
            ->select('name_' . $currentLang . ' as name', 'id')
            ->orderBy('priority', 'desc')
            ->orderBy('name_' . $currentLang, 'asc')
            ->get();

        $province_id = empty($request->province_id) ? $provinces[0]->id : $request->province_id;
        $districts = Province::where('parent_id', $province_id)
            ->select('name_' . $currentLang . ' as name', 'id')
            ->orderBy('priority', 'desc')
            ->orderBy('name_' . $currentLang, 'asc')
            ->get();

        $query = User::select('province_id', 'district_id', 'work_place', \DB::raw('count(*) as total_participants'), \DB::raw('sum(complete_courses) as complete_courses'))
            ->groupBy('province_id', 'district_id', 'work_place');

        if(!empty($request->province_id)){
            $query = $query->where('province_id', $request->province_id);
        }

        if(!empty($request->district_id)){
            $query = $query->where('district_id', $request->district_id);
        }

        if(!empty($request->work_place)){
            $query = $query->where('work_place', 'like' , '%' . $request->district_id . '%');
        }

        $reports = $query->get();

        return view('client.statistical', [
            'title' => trans('client.statistical'),
            'currentLang' => $currentLang,
            'provinces' => $provinces,
            'districts' => $districts,
            'reports' => $reports
        ]);
    }
}
