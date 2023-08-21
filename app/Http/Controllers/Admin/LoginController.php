<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('admin.login');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => __('Username Is Required'),
            'password.required' => __('Password Is Required'),
        ]);

        if (Auth::attempt($request->except('_token'))) {
            return redirect()->route('admin.index');
        }else {
            return back()->withErrors(['error' => __('The username or password is incorrect')]);
        }
    }
}
