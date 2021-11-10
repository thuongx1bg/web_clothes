<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class CategoryFrontEnd extends Controller
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
    public function index($id)
    {
        $sliders=$this->slider->latest()->paginate(3);
        $settings=$this->setting->all();
        $categories=$this->category->where('parent_id','0')->orderby('id','desc')->get();
        $categories2=$this->category->find($id);
        
        // $products=$this->product->where('category_id',$id)->orderby('id','desc')->limit(4)->get();
        $products=$this->product->where('category_id',$id)->latest()->paginate(6);
        return view('fe.show_dm_sp',compact('sliders','categories2','settings','categories','products'));
       
       
    }
    
}
