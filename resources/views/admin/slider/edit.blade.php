@extends('layouts.admin')
@section('title')
<title>
    Slider
</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admins/sliders/edit/index.css')}}">
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Slider','key'=>'Edit'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('slider.update',['id'=>$sliders->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên slider</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên " value="{{$sliders->name}}">
                            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{$sliders->description}}</textarea>
                            @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1"> Hình ảnh</label>
                            <input type="file" class="form-control-file @error('description') is-invalid @enderror" name="image_path">
                            <div class="col-md-12">
                                <div class="row">
                                    <img class="img_slider" src="{{$sliders->image_path}}" alt="">
                                </div>
                                @error('image_path')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                            </div>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>

        </div>
    </div>

</div>

@endsection