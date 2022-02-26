<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Slider;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class Fe_Home extends Controller
{
    private $slider;
    private $setting;
    private $category;private $product;
    public function __construct(Slider $slider, Setting $setting,Category $category,Product $product)
    {
        $this->slider=$slider;
        $this->setting=$setting;
        $this->category=$category;
        $this->product=$product;
    }
    public function index()
    {
        $sliders=$this->slider->latest()->paginate(3);
        $settings=$this->setting->all();
        $categories=$this->category->where('parent_id','0')->orderby('id','desc')->get();
        $products=$this->product->where('category_id','14')->orderby('id','desc')->limit(6)->get();
        return view('fe.home',compact('sliders','settings','categories','products'));
       
    }

    public function search(Request $request)
    {
        // $sliders=$this->slider->latest()->paginate(3);
        $settings=$this->setting->all();
        $categories=$this->category->where('parent_id','0')->orderby('id','desc')->get();
        $products=$this->product->where('name','like','%'.$request->keyword_submit.'%')->orderby('id','desc')->limit(6)->get();
        return view('fe.search',compact('settings','categories','products'));
       
    }
    public function contact()
    {
        
        $settings=$this->setting->all();
        $categories=$this->category->where('parent_id','0')->orderby('id','desc')->get();
        
        return view('fe.contact',compact('settings','categories'));
     
    }

    
   
    
}
