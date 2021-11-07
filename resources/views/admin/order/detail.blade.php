@extends('layouts.admin')
@section('title')
<title>
   Chi tiết đơn hàng
</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admins/products/index/index.css')}}">
@endsection

@section('js')
<script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
<script src="{{asset('admins/products/index/index.js')}}"></script>
@endsection

@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Order','key'=>'Detail'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <h3>Thông tin khách hàng</h3>
                <table class="table">
                   @foreach($shipping as $shippings)
                        <thead>
                            <tr>
                                
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Số điện thoại</th>
                                <th scope="col">Email</th>
                                <th scope="col">Địa chỉ</th>
                                <th scope="col">Ghi chú</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                           
                            <tr>
                                
                                <td>{{$shippings->name}}</td>
                                <td>{{$shippings->sdt}}</td>
                                <td>{{$shippings->email}}</td>
                                <td>{{$shippings->diachi}}</td>
                                <td>{{$shippings->ghichu}}</td>

                               
                                

                            </tr>

                           
                        </tbody>
                    @endforeach
                    </table>
                   
                    <h3> Liệt kê chi tiết đơn hàng</h3>
                    <table class="table">
                       
                        <thead>
                            <tr>
                                
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Gía</th>
                                <th scope="col">Số lượng</th>
                                

                            </tr>
                        </thead>
                        @foreach($products as $product)
                        <tbody>
                           
                            <tr>
                                
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->product_sales_quantity}}</td>

                               
                                

                            </tr>

                           
                        </tbody>
                        @endforeach
                    </table>
                    <h3>Tổng tiền (cả thuế):</h3>
                    <h2>{{$orders->total}} vnđ</h2>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection