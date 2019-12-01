<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.library.index');
    }

    /**
     * Display a listing of the program.
     *
     * @return \Illuminate\Http\Response
     */
    public function image()
    {
        return view('admin.library.image');
    }

    /**
     * Display a listing of the partner.
     *
     * @return \Illuminate\Http\Response
     */
    public function video()
    {
        return view('admin.library.video');
    }
}
