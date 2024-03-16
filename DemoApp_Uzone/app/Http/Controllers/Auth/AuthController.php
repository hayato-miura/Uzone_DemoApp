<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Undocumented function
     *
     * @return View
     */
    public function showLogin()
    {
        return view('login.login_form');
    }

    /**
     * Undocumented function
     *
     * @param App\Http\Requests\LoginFormRequest
     * $request
     */
    public function login(LoginFormRequest $request )
    {
        dd($request->all());
          printf('ssss');
    }
}