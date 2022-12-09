<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Authority;

class UsersController extends Controller
{
  public function index(){
    $users = User::all();
    // $authorities = Authority::all();
    // $users = User::with('authorities')->get();
    return view('index', ['users' => $users]);
  }
    //
}
