@extends('fe.layouts.index')
@section('title')
<title>
    Trang chủ
</title>
@endsection
@section('css')

@endsection


@section('content-front-end')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{route('fe.home')}}">Trang chủ</a></li>
				  <li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div><!--/breadcrums-->

			

			<div class="register-req">
				<p>Vui lòng điền đầy đủ thông tin cho đơn hàng</p>
			</div><!--/register-req-->

			<div class="shopper-informations" >
				<div class="row">
				<!-- <form action="" method="POST">	
					@csrf -->
					<div class="col-sm-6 "  >
						<div class="shopper-info  ">
							<p>Thông tin gửi hàng</p>
								<form action="{{route('store_order')}}" method="POST">
								@csrf
								<input type="text" placeholder="Email" name="email">
								<input type="text" placeholder="Họ và tên" name="name">
								<input type="text" placeholder="Địa chỉ" name="diachi">
								<input type="text" placeholder="Số điện thoại" name="sdt">

						<div class="order-message    ">
							<p>Ghi chú đơn hàng của bạn</p>
							<textarea name="ghichu"  placeholder="Nhập ghi chú đơn hàng của bạn" rows="5"></textarea>
						</div>	
								<input type="submit" value="Gửi" name="send_order" class="btn btn-primary btn-sm">
								</form>
							<!-- <a class="btn btn-primary" href="">Get Quotes</a>
							<a class="btn btn-primary" href="">Continue</a> -->
						</div>
					</div>
					
				</div>
			</div>
			
			
			
				</div>
		</div>
	</section> <!--/#cart_items-->

	

	
	


@endsection