@extends('layouts.admin')
@section('title')
<title>
   User
</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{asset('admins/sliders/index/index.css')}}">
@endsection
@section('js')
<script src="{{asset('admins/delete/delete.js')}}"></script>
<script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'User','key'=>'List'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('users.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tên</th>
                                <th scope="col">Email</th>
                                <th scope="col">Vai trò</th>
                                

                                <th scope="col">Option</th>

                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>

                                <td>
                                   @foreach($user->roles as $a)
                                    
                                   {{$a->name}}
                                   <br>
                                   @endforeach
                                
                                </td>
                               

                                <td>
                                    <a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-info btn-circle btn-sm"><i class="fas fa-info-circle"></i></a>
                                    <a data-url="{{route('users.delete',['id'=>$user->id])}}" class="btn btn-danger btn-circle btn-sm action_delete"> <i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                          
                            @endforeach
                        </tbody>

                    </table>
                    {{ $users->links('pagination::bootstrap-4') }}
                </div>

            </div>

        </div>
    </div>

</div>

@endsection