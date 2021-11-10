@extends('layouts.admin')
@section('title')
<title>
    Role
</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admins/sliders/index/index.css')}}">
@endsection
@section('js')
<script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
<script src="{{asset('admins/Sliders/index/index.js')}}"></script>
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Role','key'=>'List'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('roles.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên vai trò</th>
                                <th scope="col">Mô tả</th>
                                

                                <th scope="col">Option</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td>{{$role->display_name}}</td>
                               

                                <td>
                                    <a href="{{route('roles.edit',['id'=>$role->id])}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                    <a data-url="{{route('roles.delete',['id'=> $role->id])}}" class="btn btn-danger btn-circle btn-sm action_delete"> <i class="fas fa-trash"></i></a>
                                </td>

                            </tr>
                          
                            @endforeach
                        </tbody>

                    </table>
                    {{ $roles->links('pagination::bootstrap-4') }}
                </div>

            </div>

        </div>
    </div>

</div>

@endsection