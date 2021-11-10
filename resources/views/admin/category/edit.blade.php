@extends('layouts.admin')
@section('title')
<title>
Category
</title>
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'catorgy','key'=>'Edit'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('categories.update',['id'=>$category->id])}}">
                        @csrf
                        <div class="form-group">
                            <label for="">Danh mục</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror " name="name" value="{{$category->name}}" laceholder="Nhập tên danh mục">
                            @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                        </div>
                        <div class="form-group">
                            <label>Chọn danh mục</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Danh mục cha</option>
                                {!! $htmlOption!!}
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>


            </div>

        </div>
    </div>

</div>

@endsection