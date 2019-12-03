<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

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
        // $categories = Category::with('articles')->where('priority', '1')->get();
        // $data = [];
        // foreach ($categories as $item) {
        //     // $item = [];
        //     dd($item);
        //     array_push($item, [$key->getAttributes(),'articles' => '']);
        //     // array_push()
        // }
        $data = Category::with('articles')->get()->pluck('categories')->flatten();
        dd($data);

        // $categories = \DB::table('categories')->where('priority', '1')->limit(2);
        // $articles = $categories->rightJoin('articles','category_id','categories.id')->get();
        $data = [
            // 'categories' => $categories ->get(),
            // 'articles' => $articles
            'data' => $categories
        ];

        return view('client.index', $data);
    }
}
