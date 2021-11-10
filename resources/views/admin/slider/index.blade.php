@extends('layouts.admin')
@section('title')
<title>
    Slider
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

    @include('patials.content-header',['name'=>'Slider','key'=>'List'])



    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('slider.create')}}" class="btn btn-success float-right m-2">Add</a>
                </div>
                <div class="col-md-12">
                  
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Slider</th>
                                            <th>Description</th>
                                            <th>Hình ảnh</th>
                                            <th>ACTION</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <!-- <tr> -->
                                            <!-- <th>#</th>
                                            <th>Config_key</th>
                                            <th>Config_value</th>
                                            <th>ACTION</th> -->
                                            {{ $sliders->links('pagination::bootstrap-4') }}
                                        <!-- </tr> -->
                                    </tfoot>
                                    <tbody>
                                    @foreach($sliders as $slider)
                                        <tr>
                                            <td>{{$slider->id}}</td>
                                            <td>{{$slider->name}}</td>
                                            <td>{{$slider->description}}</td>
                                            <td>
                                                <img class="img_slider "src="{{$slider->image_path}}" alt="">
                                            </td>
                                            <td>
                                                <a href="{{route('slider.edit',['id'=>$slider->id])}}" class="btn btn-info btn-circle btn-sm ">
                                                    <i class="fas fa-info-circle"></i>
                                                 </a>
                                   
                                                <a data-url="{{route('slider.delete',['id'=>$slider->id])}}" class="btn btn-danger btn-circle btn-sm action_delete">
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