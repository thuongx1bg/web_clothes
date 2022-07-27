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
				<h2>Xem lại giỏ hàng</h2>
			</div>

			<div class="table-responsive cart_info">
				<?php
				use Gloudemans\Shoppingcart\Facades\Cart;
				$content= Cart::content();
				
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình ảnh</td>
							<td class="description">Mô tả</td>
							<td class="price">Gía</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						@foreach($content as $v_content)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{$v_content->options->image}}" width="70" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_content->name}}</a></h4>
								<p>ID: {{$v_content->id}}</p>
							</td>
							<td class="cart_price">
								<p>{{number_format($v_content->price)}} VNĐ</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<form action="{{route('update_cart')}}" method="POST">
										@csrf
										
									<input class="cart_quantity_input" type="number" name="quantity" value="{{$v_content->qty}}" autocomplete="off" size="2">
									<input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-control">
									<input type="submit" value="Cập nhập" name="update_qty">
									</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">
									<?php
									$tong=$v_content->price*$v_content->qty;
									echo number_format($tong).' '.'VNĐ';
									?>
									</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{route('delete_cart',['rowId' =>$v_content->rowId])}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
            <h4 style="margin: 40px 0;font-size: 20px;">    Chọn phương thức thanh toán </h4>
            <form action="{{route('order_place')}}" method="post">
                @csrf
			<div class="payment-options">
					<span>
						<label><input name="payment_option" value="1" type="checkbox" > Thanh toán bằng thẻ ATM <br>
					--Ngân Hàng: Viettinbank <br>
					--Stk: 123456789 <br>
					--Tên chủ tài Khoản: Quyết Chí<br>
					--Nội dung chuyển khoản:  <h4>SP 
					<?php
 
						$permitted_chars = '0123456789ABCDEFGHJK';
						// Output: 54esmdr0qf
						echo substr(str_shuffle($permitted_chars), 0, 10);
 						?>&ensp; <br>(Vui lòng ghi lại nội dung chuyển khoản để nhân viên kiểm duyệt)</h4>

					</label>

					</span>
					<span>
						<label><input name="payment_option" value="2" type="checkbox"> Thanh toán khi nhận hàng <br>

						<br>
						<br>
						<br>
						<br>
						<br> <h4></h4><br>
					</label>
					</span>
					<input type="submit" value="Đặt hàng" name="send_order_place" class="btn btn-primary btn-sm">
			</div>
            </form>
		</div>
	</section> <!--/#cart_items-->

	

	
	


@endsection