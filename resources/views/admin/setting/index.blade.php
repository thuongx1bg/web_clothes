@extends('layouts.admin')
@section('title')
<title>
    Setting
</title>
@endsection
@section('css')
<style>
    .abc{
        padding-bottom: 20px;
    }
</style>
@endsection
@section('js')
<script src="{{asset('admins/delete/delete.js')}}"></script>
<script src="{{asset('vendors/SweetAlert2/sweetalert2@11.js')}}"></script>
@endsection
@section('content')

<div class="content-wrapper">

@include('patials.content-header',['name'=>'SETTING','key'=>'LIST'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 abc">
                <div class="dropdown doimau float-right">
                        <a class="btn  dropdown-toggle btn-success" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    ADD SETTING
                        </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{route('settings.create').'?type=Text'}}">Text</a>
                        <a class="dropdown-item" href="{{route('settings.create').'?type=Textarea'}}">Textarea</a>
                       
                </div>
            </div>
        </div>
                
                <div class="col-md-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Config_key</th>
                                            <th>Config_value</th>
                                            <th>ACTION</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <!-- <tr> -->
                                            <!-- <th>#</th>
                                            <th>Config_key</th>
                                            <th>Config_value</th>
                                            <th>ACTION</th> -->
                                            {{ $settings->links('pagination::bootstrap-4') }}
                                        <!-- </tr> -->
                                    </tfoot>
                                    <tbody>
                                       @foreach($settings as $setting) 
                                        <tr>
                                            <td>{{$setting->id}}</td>
                                            <td>{{$setting->config_key}}</td>
                                            <td>{{$setting->config_value}}</td>
                                            <td>
                                                <a href="{{route('settings.edit',['id'=>$setting->id]) . '?type=' . $setting->type}}" class="btn btn-info btn-circle btn-sm ">
                                                    <i class="fas fa-info-circle"></i>
                                                 </a>
                                   
                                                <a data-url="{{route('settings.delete',['id'=>$setting->id])}}" class="btn btn-danger btn-circle btn-sm action_delete">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                </table>
                                
                </div>
               
            </div>

        </div>
    </div>

</div>

@endsection