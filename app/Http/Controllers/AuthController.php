<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function doLogin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/');
        }

        return back()->withErrors(['message' => "ไม่สามารถเข้าสู่ระบบได้"]);
    }

    public function register(){
        return view('auth.register');
    }

    public function doRegister(Request $request){
        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input("password");
        $password_confirmation = $request->input("password_confirmation");

        if($password != $password_confirmation){
            return back()->withErrors(['message' => 'รหัสผ่าน และ รหัสผ่านยืนยันไม่ตรงกัน']);
        }

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->password = Hash::make($password);
        $user->save();

        return redirect('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

}
