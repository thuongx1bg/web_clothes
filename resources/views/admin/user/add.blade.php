@extends('layouts.admin')
@section('title')
<title>
User
</title>
@endsection

@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'User','key'=>'Add'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên</label>
                            <input type="text" class="form-control " name="name" placeholder="Nhập tên " value="{{old('name')}}">
                           
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control " name="email" placeholder="Nhập email " value="{{old('email')}}">
                           
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class="form-control " name="password" placeholder="Nhập password " value="{{old('password')}}">
                           
                        </div>

                        <div class="form-group">
                            <label>Chọn vai trò</label>
                            <select class="form-control select-2 " multiple name="role_id[]">
                                <option value=""></option>
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                               
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
@section('js')
<script src="{{asset('vendors/select2/select2.min.js')}}"></script>
<script>
    $('.select-2').select2({
        'placeholder':'Chọn vai trò'
    })
</script>
@endsection