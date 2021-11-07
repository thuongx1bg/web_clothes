<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
class FrontEndProduct extends Controller
{
    private $product;
    private $category;
    
    public function __construct(Product $product, Category $category)
    {
        $this->product=$product;
        $this->category=$category;
    }
    public function index($id){
        $products=$this->product->find($id);
        $images=$products->find($id)->images;
        $categories=$this->category->where('parent_id','0')->orderby('id','desc')->get();
        $product2=$this->product->where('category_id',$products->category->id)->where('id','<>',$products->id)->get();
       
       
        return view('fe.product-details',compact('products','images','categories','product2'));
        
    }
}
