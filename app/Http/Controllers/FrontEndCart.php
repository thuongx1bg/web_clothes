<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Print_;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;
use App\Models\Slider;
use App\Models\Setting;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use App\Models\Category;
use App\Models\Product;

class FrontEndCart extends Controller
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
    public function save_cart(Request $request){
        $productId=$request->product_hidden;
        $quantity=$request->qty;
       
        $product_infor= DB::table('products')->where('id',$productId)->first();
        $data['id']=$productId;
        $data['qty']=$quantity;
        $data['name']=$product_infor->name;
        $data['price']=$product_infor->price;
        $data['weight']=1;
        $data['options']['image']=$product_infor->feature_image_path;
        Cart::add($data);
        Cart::setGlobalTax(5);
        return redirect()->route('show_cart');
        
       
    }
    public function show_cart(){
        $settings=$this->setting->all();
        $categories=$this->category->where('parent_id','0')->orderby('id','desc')->get();
        return view('fe.cart',compact('settings','categories'));
    }
    public function delete_cart($rowId){
        Cart::update($rowId,0);
        return redirect()->route('show_cart');
    }
    public function update_cart(Request $request){
        $rowId=$request->rowId_cart;
        $qty=$request->quantity;
        Cart::update($rowId,$qty);
        return redirect()->route('show_cart');
    }
}
