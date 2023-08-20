<?php

namespace App\Http\Controllers\Frontpage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontpage\FrontPageController;

class FrontPageController extends Controller
{
    public function index(){
        return view('frontpags.layout.master_frontpage');
    }

    public function our_story(){
        return view('frontpags.layout.our-story');
    }

    public function event(){
        return view('frontpags.layout.events');
    }

    public function gallery(){
        return view('frontpags.layout.gallery');
    }

    public function contact(){
        return view('frontpags.layout.contact');
    }
}
