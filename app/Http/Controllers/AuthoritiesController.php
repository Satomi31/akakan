<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Authority;

class AuthoritiesController extends Controller
{
  public function create(Request $request)
    {
        return view('create');
    }

  public function store(Request $request)
    {
        $auth = new Authority();
        $auth->auth_level = $request->auth_level;
        $auth->save();
        return redirect()->route('user.index');
    }
    //
}
