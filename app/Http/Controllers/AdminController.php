<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginAdmin(){
        return view('login');
        //  dd(bcrypt('123456789'));
    }
    public function postLoginAdmin(Request $request)
    {
       

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication was successful..
            session()->put('email',$request->email);
            session()->put('id',$request->id);
            return redirect()->to('home');
        }
        else{
            session()->put('message','Email hoặc mật khẩu không đúng !');
            return redirect()->to('admin');
        }
    }
    public function logoutAdmin(){
        // $this->AuthLogin();
        // session()->put('email',null);
        // session()->put('id',null);
        Auth::logout();
        return redirect()->to('admin');
    }
}
