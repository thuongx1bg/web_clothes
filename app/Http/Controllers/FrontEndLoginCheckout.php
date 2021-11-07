<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

session_start();
class FrontEndLoginCheckout extends Controller
{
    private $customer;
    private $shipping;
    public function __construct(Customer $customer,Shipping $shipping)
    {
        $this->customer=$customer;
        $this->shipping=$shipping;
    }
    public function logincheckout(){
        return view('fe.login');
    }
    public function checkout(){
        return view('fe.checkout');
    }
    public function register(Request $request){
        $request->validate([
            'name'             => 'required',  
            'sdt'             =>'required' ,        // just a normal required validation
            'email'            => 'required|email|unique:customers',     // required and must be unique in the ducks table
            'password'         => 'required',
            'password_confirm' => 'required|same:password'
        ]);
        $data=[
            'name'=>$request->name,
            'sdt'=>$request->sdt,
            'email'=>$request->email,
            'password'=>$request->password,
        ];
        $this->customer->create($data);
        $id=DB::table('customers')->where('email',$request->email)->value('id');
        session()->put('id',$id);
       
        return view('fe.checkout');
    }
    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        $result=DB::table('customers')->where('email',$email)->where('password',$password)->get();
        if($result){
            $id=DB::table('customers')->where('email',$request->email)->value('id');
            
            session()->put('id',$id);
            return view('fe.checkout');
        }else{
            return view('fe.login');
        }
    }
    public function store_order(Request $request){
        $data=[
            'name'=>$request->name,
            'sdt'=>$request->sdt,
            'email'=>$request->email,
            'diachi'=>$request->diachi,
            'ghichu'=>$request->ghichu,
            
        ];
        $id=DB::table('shippings')->insertGetId($data);
        session()->put('shipping_id',$id);
        return redirect()->route('payment');
    }
    public function order_place(Request $request){
        // insert payment-method
        $data=array();
        $data['method']=$request->payment_option;
        $data['status']='Đang chờ xử lý';
        $payment_id=DB::table('payments')->insertGetId($data);

        // insert order
        $order_data=array();
        $order_data['customer_id']=session()->get('id');
        $order_data['shipping_id']=session()->get('shipping_id');
        $order_data['payment_id']=$payment_id;
        $order_data['total']=Cart::total();
        $order_data['status']='đang chờ xử lý';
        $order_id=DB::table('orders')->insertGetId($order_data);

        //insert order_details
        $content=Cart::content();
        foreach($content as $v_content){
            $order_d_data=array();
            $order_d_data['order_id']=$order_id;
            $order_d_data['product_id']=$v_content->id;
            $order_d_data['product_name']=$v_content->name;
            $order_d_data['price']=$v_content->price;
            $order_d_data['product_sales_quantity']=$v_content->qty;
       
            DB::table('order_details')->insertGetId($order_d_data);
        }
            if($data['method']==1){
                Cart::destroy();

                return view('fe.thanhtoanxong');
            }else{
                Cart::destroy();

                return view('fe.thanhtoanxong');
            }
            // return redirect()->route('payment');
        


    }
    public function logout(){
        session()->flush();
        return redirect()->route('fe.home');
    }
    public function payment(){
        return view('fe.payment');
    }

}
