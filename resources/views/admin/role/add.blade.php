@extends('layouts.admin')
@section('title')
<title>
Role
</title>
@endsection

@section('css')
<link href="{{asset('vendors/select2/select2.min.css')}}" rel="stylesheet" />
<style>
    .card-header{
        background-color:aquamarine;
    }
</style>
@endsection
@section('content')

<div class="content-wrapper">

    @include('patials.content-header',['name'=>'Role','key'=>'Add'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <form method="POST" action="{{route('roles.store')}}" enctype="multipart/form-data" style="width: 100%;">
                        @csrf
                <div class="col-md-12" >
                    
                        <div class="form-group">
                            <label for="">Tên vai trò</label>
                            <input type="text" class="form-control " name="name" placeholder="Nhập tên " value="">
                           
                        </div>

                        <div class="form-group">
                            <label for="">Mô tả vai trò</label>
                            <textarea  id=""  rows="5" name="display_name" class="form-control"></textarea>
                            
                           
                        </div>

                </div>
                <div class="col-md-12">
                    <div class="col-md-12">
                        <label for="">
                           <input type="checkbox" class="checkall">
                        </label>
                        Checkall
                    </div>
                    @foreach($permisstions as $permisstion)
                    <div class="row">
                        <div class="card border-primary mb-3 col-md-12" >
                            <div class="card-header">
                                <label for="">
                                        <input type="checkbox" class="checkbox_wrapper">
                                </label>
                                    {{$permisstion->name}}
                            </div>
                            <div class="row">
                            @foreach($permisstion->permisstionsChildren as $permisstionItem)
                            <div class="card-body text-primary col-md-3">
                                <h5 class="card-title">
                                <label for="">
                                     <input type="checkbox" class="checkbox_children" name="permisstion_id[]" value="{{$permisstionItem->id}}">
                                </label>
                                {{$permisstionItem->name}}</h5>
                            </div>
                            @endforeach
                            </div>
                            
                        </div>
                    </div> 
                    @endforeach   
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

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
<script>
    $('.checkbox_wrapper').on('click',function(){
        $(this).parents('.card').find('.checkbox_children').prop('checked',$(this).prop('checked'));
    })
    $('.checkall').on('click',function(){
        $(this).parents().find('.checkbox_children').prop('checked',$(this).prop('checked'));
        $(this).parents().find('.checkbox_wrapper').prop('checked',$(this).prop('checked'));
    })
</script>
@endsection