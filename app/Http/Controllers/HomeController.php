<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donhang=DB::table('orders')->count();
        $product=DB::table('products')->count();
        $category=DB::table('categories')->count();
        $user=DB::table('users')->count();
        return view('home',compact('donhang','product','user','category'));
    }
}
