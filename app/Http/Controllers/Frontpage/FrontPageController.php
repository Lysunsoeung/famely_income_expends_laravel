<?php

namespace App\Http\Controllers\Frontpage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontpage\FrontPageController;

class FrontPageController extends Controller
{
    public function index(){
        return view('frontpages.layout.master_frontpage');
    }

    public function about(){
        return view('frontpages.layout.about');
    }

    public function contact(){
        return view('frontpages.layout.contact');
    }
}
