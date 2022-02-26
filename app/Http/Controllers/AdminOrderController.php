<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use FFI\Exception;
use Illuminate\Support\Facades\Log;
class AdminOrderController extends Controller
{
    private $order;
    public function __construct(Order $order)
    {
        $this->middleware('auth');
        $this->order=$order;
    }
    public function index(){
        $order_data=DB::table('orders')->join('customers','orders.customer_id','=','customers.id')
        ->select('customers.name','orders.id','orders.total','orders.status')->get();
        
        

        return view('admin.order.index',compact('order_data'));
    }
    public function delete($id){
        try{
            $this->order->find($id)->delete();
            return response()->json([
                'code'=>200,
                'message'=>'success',
    
            ],status:200);
    
        }
        catch (Exception $exception) {
           
            Log::error('Message:' . $exception->getMessage() . 'Line' . $exception->getLine());
            return response()->json([
                'code'=>500,
                'message'=>'fail',
    
            ],status:500);
        }
       }
    public function detail($id){
        $orders=$this->order->find($id);
        $shipping=DB::table('shippings')->where('id',$orders->shipping_id)->get();
        $products=DB::table('order_details')->where('order_id',$orders->id)->get();
        
        return view('admin.order.detail',compact('shipping','products','orders'));
    }
    
}
