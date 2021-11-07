@extends('layouts.admin')
@section('title')
<title>
    Đơn hàng
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

    @include('patials.content-header',['name'=>'Order','key'=>'List'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên khách hàng</th>
                                <th scope="col">Tổng tiền</th>
                                <th scope="col">Tình trạng</th>
                                <th scope="col">Option</th>

                            </tr>
                        </thead>
                        <tbody>
                           @foreach($order_data as $a)
                            <tr>
                                <th scope="row">{{$a->id}}</th>
                                <td>{{$a->name}}</td>
                                <td>{{$a->total}}</td>
                                <td>{{$a->status}}</td>

                               
                                <td>
                                                <a href="{{route('order.detail',['id'=>$a->id])}}" class="btn btn-info btn-circle btn-sm ">
                                                    <i class="fas fa-info-circle"></i>
                                                 </a>
                                   
                                                <a data-url="{{route('order.delete',['id'=>$a->id])}}" class="btn btn-danger btn-circle btn-sm action_delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>

                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                    
                </div>

            </div>

        </div>
    </div>

</div>

@endsection