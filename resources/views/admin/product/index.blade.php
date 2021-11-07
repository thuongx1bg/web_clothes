@extends('layouts.admin')
@section('title')
<title>
    Sản Phẩm
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

    @include('patials.content-header',['name'=>'Product','key'=>'List'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('product.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên Sản phẩm</th>
                                <th scope="col">Gía</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Danh mục</th>
                                <th scope="col">Option</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $productItem)
                            <tr>
                                <th scope="row">{{$productItem->id}}</th>
                                <td>{{$productItem->name}}</td>
                                <td>{{number_format($productItem->price) }}</td>
                                <td><img class="productImage" src="{{$productItem->feature_image_path}}" alt=""></td>
                                <td>{{optional($productItem->category) ->name}}</td>

                               
                                <td>
                                                <a href="{{route('product.edit',['id'=>$productItem->id])}}" class="btn btn-info btn-circle btn-sm ">
                                                    <i class="fas fa-info-circle"></i>
                                                 </a>
                                   
                                                <a data-url="{{route('product.delete',['id'=>$productItem->id])}}" class="btn btn-danger btn-circle btn-sm action_delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>

                            </tr>

                            @endforeach
                        </tbody>

                    </table>
                    {{ $products->links('pagination::bootstrap-4') }}
                </div>

            </div>

        </div>
    </div>

</div>

@endsection