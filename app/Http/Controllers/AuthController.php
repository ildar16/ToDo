<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('todo.login');

    }

    public function getAuth(Request $request)
    {
        $validator = $this->validate($request, [
            'username' => 'required|min:5|max:200',
            'password' => 'required',
        ]);

        $auth = Auth::attempt([
            'email' => Input::get('username'),
            'password' => Input::get('password')
        ], false);

        if (! $auth)
        {
            return Redirect::route('user-login')->withErrors([
                'Error auth'
            ]);
        }

        return Redirect::route('todo');

    }

    public function getLogout()
    {
        Auth::logout();

        return Redirect::to('/');
    }

}
