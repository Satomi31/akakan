<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Authority;
use Auth;

class UsersController extends Controller
{
  public function index(){
    $user_auth_id = \Auth::user() -> auth_id;
    $users = User::all();
    // $authorities = Authority::all();
    // $users = User::with('authorities')->get();
    return view('index', ['users' => $users, 'user_auth_id' => $user_auth_id]);
  }

  public function edit(){

  }

  public function update(){

  }
    //
}
