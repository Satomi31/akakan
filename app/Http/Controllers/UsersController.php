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
    return view('index', ['users' => $users, 'user_auth_id' => $user_auth_id]);
  }

  public function edit($id){
    $user = User::find($id);
    return view('edit', ['user' => $user]);
  }

  public function update(Request $request, $id){
    $user = User::find($id);
    $user->fill($request->all())->save();
    return redirect()->route('user.index');
  }
    //
}
