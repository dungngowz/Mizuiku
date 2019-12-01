<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index');
    }

    /**
     * Display a listing of the program.
     *
     * @return \Illuminate\Http\Response
     */
    public function program()
    {
        return view('admin.news.program');
    }

    /**
     * Display a listing of the partner.
     *
     * @return \Illuminate\Http\Response
     */
    public function environment()
    {
        return view('admin.news.environment');
    }
}
