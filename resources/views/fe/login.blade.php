@extends('fe.layouts.index')
@section('title')
<title>
    Trang chủ
</title>
@endsection
@section('css')

@endsection


@section('content-front-end')
	
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập</h2>
						@if (session('status'))
    							<div class="alert alert-danger" role="alert">
            						{{ session('status') }}
   									 </div>
						@endif
						<form action="{{route('login_customer')}}" method="POST">
							@csrf
							<input type="text" placeholder="Email" name="email"/>
							@error('email')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							<input type="password" placeholder="Password" name="password" />
							@error('password')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							<!-- <span>
								<input type="checkbox" class="checkbox"> 
								Ghi nhớ đăng nhập
							</span> -->
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{route('register_customer')}}" method="POST">
							@csrf
							<input type="text" placeholder="Họ và tên" name="name"/>
								@error('name')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							<input class="@error('sdt') is-invalid @enderror" type="number" placeholder="Số điện thoại" name="sdt"/>
								@error('sdt')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							<input class="@error('email') is-invalid @enderror" type="email" placeholder="Email" name="email"/>
							
								@error('email')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							<input class="@error('password') is-invalid @enderror" type="password" placeholder="Password" name="password"/>
								@error('password')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
							<input class="@error('password_confirm') is-invalid @enderror" type="password" placeholder="Nhập lại Password" name="password_confirm"/>
								@error('password_confirm')
    								<div class="alert alert-danger">{{ $message }}</div>
								@enderror

							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	
	
	

  
@endsection