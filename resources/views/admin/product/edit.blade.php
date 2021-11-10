@extends('layouts.admin')
@section('title')
<title>
    Add product
</title>
@endsection

@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />

<link rel="stylesheet" href="{{asset('admins/products/edit/edit.css')}}">
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Product','key'=>'Edit'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('product.update',['id'=>$product->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên sản phẩm" value="{{$product->name}}">
                            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label for="">Giá sản phẩm</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Nhập giá sản phẩm" value="{{$product->price}}">
                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlFile1"> Ảnh đại diện</label>
                            <input type="file" class="form-control-file @error('feature_image_path') is-invalid @enderror" name="feature_image_path">
                            <div class="col-md-12">
                                <div class="row">
                                    <img class="image_detail_product" src="{{$product->feature_image_path}}" alt="">
                                </div>
                            </div>
                            @error('feature_image_path')
                            <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1"> Ảnh chi tiết</label>
                            <input type="file" multiple class="form-control-file" name="image_path[]">
                            <div class="col-md-12">
                                <div class="row">
                                    @foreach($product->images as $i)
                                    <div class="col-md-3">
                                        <img class="image_detail_product" src="{{$i->image_path}}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục</label>
                            <select class="form-control select-2" name="category_id">
                                <option value="">Chọn danh mục</option>
                                {!! $htmlOption!!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nhập tags cho sản phẩm</label>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">
                                @foreach($product->tags as $t)
                                <option value="{{$t->name}}" selected>{{$t->name}}</option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nhập nội dung</label>
                            <textarea
                            id="ckeditor2"
                            class="form-control tynimce_editor_init" rows="3" name="contents">{{$product->content}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>

        </div>
    </div>

</div>

@endsection

@section('js')
<script src="{{asset('vendors/select2/select2.min.js')}}"></script>

<script src="{{asset('admins/products/add/add.js')}}"></script>

@endsection


