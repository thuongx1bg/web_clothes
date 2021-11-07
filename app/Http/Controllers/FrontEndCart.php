<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Print_;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Redirect;

class FrontEndCart extends Controller
{
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
        Cart::setGlobalTax(10);
        return redirect()->route('show_cart');
        
       
    }
    public function show_cart(){
        return view('fe.cart');
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
