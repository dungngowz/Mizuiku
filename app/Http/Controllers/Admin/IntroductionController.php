<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.introduction.index');
    }

    /**
     * Display a listing of the program.
     *
     * @return \Illuminate\Http\Response
     */
    public function program()
    {
        return view('admin.introduction.program');
    }

    /**
     * Display a listing of the partner.
     *
     * @return \Illuminate\Http\Response
     */
    public function partner()
    {
        return view('admin.introduction.partner');
    }
}
