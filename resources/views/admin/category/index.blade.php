@extends('layouts.admin')
@section('title')
<title>
    Category
</title>
@endsection
@section('js')
<script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
<script src="{{asset('admins/Sliders/index/index.js')}}"></script>
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Catorgy','key'=>'List'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('categories.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên danh mục</th>
                                <th scope="col">Option</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td>{{$category->name}}</td>
                                
                                <td>
                                                <a href="{{route('categories.edit',['id'=> $category->id])}}" class="btn btn-info btn-circle btn-sm ">
                                                    <i class="fas fa-info-circle"></i>
                                                 </a>
                                   
                                                <a data-url="{{route('categories.delete',['id'=> $category->id])}}" class="btn btn-danger btn-circle btn-sm action_delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>

                            </tr>
                            @endforeach

                        </tbody>

                    </table>
                    {{ $categories->links('pagination::bootstrap-4') }}
                </div>

            </div>

        </div>
    </div>

</div>

@endsection