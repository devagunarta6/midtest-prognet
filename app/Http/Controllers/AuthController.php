<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function register()
    {
        return view('auth');
    }
    public function registerProcess(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/');
    }
    public function login()
    {
        return view('login');
    }
    public function loginProcess(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 0])) {
            return redirect()->intended('/dashboard')->with('email', $request->email);
        } else {
            return response()->json(['error' => 'Something went wrong']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function adminRegister()
    {
        return view('admin.register');
    }

    public function adminRegisterProcess(Request $request)
    {
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->save();

        return redirect('/admin/login');
    }

    public function adminLogin()
    {
        return view('admin.login');
    }
    public function adminloginProcess(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1])) {
            return redirect()->intended('/admin/dashboard')->with('email', $request->email);
        } else {
            return response()->json(['error' => 'Something went wrong']);
        }
    }
}
