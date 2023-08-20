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

    public function our_story(){
        return view('frontpages.layout.our-story');
    }

    public function event(){
        return view('frontpages.layout.events');
    }

    public function gallery(){
        return view('frontpages.layout.gallery');
    }

    public function contact(){
        return view('frontpages.layout.contact');
    }
}
