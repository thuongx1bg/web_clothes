@extends('fe.layouts.index')
@section('title')
<title>
    Trang chủ
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

	
	<section>
		<div class="container">
			<div class="row">
				
			<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục sản phẩm</h2>
						<div class="panel-group category-products" id="accordian">
							<!--category-productsr-->
							@foreach($categories as $key => $category)
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a  href="{{route('categoryfe',['id'=>$category->id])}}">
										<!-- data-toggle="collapse" data-parent="#accordian" -->
											<!-- <span class="badge pull-right"><i class="fa fa-plus"></i></span> -->
											{{$category->name}}
										</a>
									</h4>
								</div>
								<!-- <div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="#">Nike </a></li>
											<li><a href="#">Under Armour </a></li>
											<li><a href="#">Adidas </a></li>
											<li><a href="#">Puma</a></li>
											<li><a href="#">ASICS </a></li>
										</ul>
									</div>
								</div> -->
							</div>
							@endforeach
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Quảng cáo</h2>
                            
							<div class="brands-name">
								
								<a href="https://nubesttall.vn/tangchieucao/giup-con-cao-lon-het-tiem-nang-cung-nubesttall-1004?utm_source=SEM-01&utm_medium=nubesttall&utm_content=NB&utm_campaign=BR-TQ-0000-MF-KEYS-CPA00-NB-1511-WEB-.thuoctangchieucao&gclid=Cj0KCQjww4OMBhCUARIsAILndv4ellTzIdZj7K3xrSeI1re0rvta_wjGai1OP3APvj5kgBJgoHgXeIQaAk80EALw_wcB">
								<img style="width:262px" src="https://www.tvbuy.vn/public/product/nubest-tall-60-capsules-grow-taller-nanometer-calcium-and-herbs-front.png?v=1604118849?v2" alt="">
								</a>
							</div>
                            <h3>NuBest Tall</h3>
                            <p>- NuBest Tall - lựa chọn tối ưu giúp
trẻ phát triển chiều cao vượt trội- NuBest Tall.</p>
						</div><!--/brands_products-->
						
						<div class="price-range"><!--price-range-->
							<h2>Price Range</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">$ 0</b> <b class="pull-right">$ 600</b>
							</div>
						</div><!--/price-range-->
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Kết quả tìm kiếm</h2>
						
							@foreach($products as $product)
						<a href="{{route('detailsp',['id'=> $product->id])}}">
						<div class="col-sm-4 abc ">
							<div class="product-image-wrapper">
								<div class="single-products ">
										<div class="productinfo text-center  " >
											<div class="abc"><img   src="{{$product->feature_image_path}}" alt="" /></div>
											
											
											<h2>{{$product->price}} VNĐ</h2>
											<p>{{$product->name}}</p>
											<form action="{{route('save_cart')}}" method="POST">
												@csrf
												<input type="hidden" value="1" min="1" name="qty" />
												<input type="hidden" name="product_hidden" value="{{$product->id}}">
												<button type="submit" class="btn btn-fefault cart">
													<i class="fa fa-shopping-cart"></i>
													Thêm vào giỏ hàng
												</button>
											</form>	
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Yêu thích</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>So sánh</a></li>
									</ul>
								</div>
							</div>
						</div>
						</a>
						@endforeach
							
						
						
						
						<!--features_items-->
					</div>
					
				</div>
			</div>
		</div>
	</section>
@endsection