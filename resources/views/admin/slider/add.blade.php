@extends('layouts.admin')
@section('title')
<title>
    Slider
</title>
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Slider','key'=>'Add'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên slider</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên " value="{{old('name')}}">
                            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả</label>
                            
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4">{{old('description')}}</textarea>
                            @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>

                        <div class="form-group">
                            <label for="">Hình ảnh</label>
                            <input type="file" class="form-control-file @error('image_path') is-invalid @enderror" name="image_path">
                            @error('image_path')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>

        </div>
    </div>

</div>

@endsection