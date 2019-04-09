<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show the website homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('website.pages.home');
    }
}
