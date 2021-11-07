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

			

			
			
			<div class="review-payment">
				<h2>Thông báo</h2>
			</div>

			<div class="table-responsive cart_info">
				<h3>Cảm ơn bạn đã đặt hàng,chúng tôi sẽ liên hệ với bạn sớm nhất</h3>
			</div>
            
		</div>
	</section> <!--/#cart_items-->

	

	
	


@endsection