@extends('fe.layouts.index')
@section('title')
<title>
Giỏ hàng
</title>
@endsection
@section('css')
<style>
	
	.abc img {
	-webkit-transform: scale(1);
	transform: scale(1);
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
}
.abc:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

</style>
@endsection


@section('content-front-end')
	

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="{{route('fe.home')}}">Trang chủ</a></li>
				  <li class="active">Gỉo hàng của bạn</li>
				</ol>
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
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Hóa đơn</h3>
				<p>Vui lòng chọn phương thức thanh toán</p>
			</div>
			<div class="row">
				
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Tổng <span>{{Cart::subtotal()}} VNĐ</span></li>
							<li> Thuế <span>{{Cart::tax(0)}} VNĐ</span></li>
							<li>Phí vận chuyển <span>Free</span></li>
							<li>Thành tiền <span>{{Cart::total()}} VNĐ</span></li>
						</ul>
							<!-- <a class="btn btn-default update" href="">Update</a> -->
							
							<?php
									$id=session()->get('id');
									if($id==NULL){

								?>
								<a class="btn btn-default check_out" href="{{route('login_checkout')}}">Thanh toán</a>
								<?php
									}else{
								?>
								<a class="btn btn-default check_out" href="{{route('checkout')}}">Thanh toán</a>
								<?php
									}
							?>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	

	@endsection