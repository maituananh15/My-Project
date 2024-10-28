<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class AuthController extends Controller
{
    public function login():Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.login');
    }
    public function register():Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.register');
    }
    public function postRegister(Request $request): RedirectResponse
    {
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['role'] = User::ROLE_USER;
        User::create($input);
        return redirect()->route('login.index');
    }
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if(auth()->attempt($credentials)) {
            if (auth()->user()->role === 'admin') {
                return redirect()->route('admin.user.index');
            }
            else if(auth()->user()->role === 'user'){
                return redirect()->route('user.home.main');
            }
            return redirect()->route('admin.layouts.main');
        }
        return redirect()->back()->with('error', 'Invalid Credentials');
    }
    public function logout(): RedirectResponse
    {
        auth()->logout();
        return redirect()->route('admin.layouts.main');
    }

}
