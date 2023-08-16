<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
  public function index()
  {

    $data['title']="List All Users";
    $data['users'] = User::all();

    return view('admin.users.index',$data);
  }

  public function create(){
    return view('admin.users.create');
  }
}
