@extends('fe.layouts.index')
@section('title')
<title>
  Trang chủ
</title>
@endsection
@section('js')
{{-- <script src="{{asset('/front-end/js/gmaps.js')}}"></script> --}}
@endsection



@section('content-front-end')

<body>


  <div id="contact-page" class="container">

    <div class="row">

      <div class="col-sm-12">
        <div class="contact-info">
          <h2 class="title text-center">Thông tin cá nhân</h2>
          @if (\Session::has('message'))
          <div class="alert alert-success">
            <ul>
              <li>{!! \Session::get('message') !!}</li>
            </ul>
          </div>
          @endif


          <form method="post" action="{{route('customer.edit',['id'=> session()->get('id')])}}">
            @csrf
            @method('post')
            <div class="form-group">
              <label for="exampleInputEmail1">Họ và tên</label>
              <input name="name" type="text" value="{{$customer->name}}" class="form-control @error('name') is-invalid @enderror" 
                placeholder="Nhập họ và tên">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input name="email" value="{{$customer->email}}" type="text" class="form-control @error('email') is-invalid @enderror" 
                placeholder="Nhập email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Số điện thoại</label>
              <input name="sdt" type="text" value="{{$customer->sdt}}" class="form-control  @error('sdt') is-invalid @enderror" id="exampleInputEmail1"
                placeholder="Nhập số điện thoại">
                @error('sdt')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control  @error('password') is-invalid @enderror" id="exampleInputPassword1" placeholder="Password">
              @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirm Password</label>
              <input type="password" name="password_confirm" class="form-control @error('password_confirm') is-invalid @enderror" id="exampleInputPassword1"
                placeholder="password_confirm">
                @error('password_confirm')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <button type="submit" class="btn btn-primary"> Thay đổi thông tin</button>
          </form>
          <div class="social-networks">
            <h2 class="title text-center">Lịch sử đơn hàng</h2>
            <ul>
              <li>
                <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!--/#contact-page-->

  @endsection