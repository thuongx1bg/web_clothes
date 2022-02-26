@extends('fe.layouts.index')
@section('title')
<title>
Sản phầm chi tiết 
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
						
						
						
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<!-- <div class="view-product">
								<img src="{{$products->feature_image_path}}" alt="" />
								
							</div> -->
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
									@foreach($images as $key=> $s)
										<div class="item {{$key==0 ?  'active' : ''}}">
											
										  <a href=""><img src="{{$s->image_path}}" alt=""></a>
										  <!-- <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a> -->
										  
										</div>
										@endforeach
										<!-- <div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div> -->
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$products->name}}</h2>
								<p>ID: {{$products->id}}</p>
								<img src="images/product-details/rating.png" alt="" />
								<form action="{{route('save_cart')}}" method="POST">
								@csrf
								<span>
									<span>{{$products->price}} VNĐ</span>
									<label>Số lượng:</label>
									<input type="number" value="1" min="1" name="qty" />
									<input type="hidden" name="product_hidden" value="{{$products->id}}">
								</span>
								<p><b>Tình trạng</b> Còn hàng</p>
								<p><b>Danh mục: {{$products->category->name}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
								<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm vào giỏ hàng
									</button>
								</form>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Mô tả sản phẩm</a></li>
								
								<!-- <li><a href="#tag" data-toggle="tab">Tag</a></li> -->
								<!-- <li ><a href="#reviews" data-toggle="tab">Reviews (5)</a></li> -->
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
							<p>{{$products->content}}</p>
									<p><b>Sporter</b></p>
							</div>
							
							<!-- <div class="tab-pane fade" id="tag" >
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery1.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery2.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery3.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="images/home/gallery4.jpg" alt="" />
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							
							<!-- <div class="tab-pane fade  " id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							 -->
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản phẩm liên quan</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
							@for($i=0;$i<$leng=(count($product2)/3);$i=$i+6)
								<div class="item active">	
								
								<a href="{{route('detailsp',['id'=> $product2[$i]->id])}}">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center abc">
													<img src="{{$product2[$i]->feature_image_path}}" alt="" />
													<h2> {{$product2[$i]->price}} VNĐ</h2>
													<p>{{$product2[$i]->name}}</p>
													<form action="{{route('save_cart')}}" method="POST">
												@csrf
												<input type="hidden" value="1" min="1" name="qty" />
												<input type="hidden" name="product_hidden" value="{{$product2[$i]->id}}">
												<button type="submit" class="btn btn-fefault cart">
													<i class="fa fa-shopping-cart"></i>
													Thêm vào giỏ hàng
												</button>
											</form>	
												</div>
											</div>
										</div>
									</div>
								</a>
								@if($i+1<$leng=count($product2))
								<a href="{{route('detailsp',['id'=> $product2[$i+1]->id])}}">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center abc">
													<img src="{{$product2[$i+1]->feature_image_path}}" alt="" />
													<h2>{{$product2[$i+1]->price}} VNĐ</h2>
													<p>{{$product2[$i+1]->name}} </p>
													<form action="{{route('save_cart')}}" method="POST">
												@csrf
												<input type="hidden" value="1" min="1" name="qty" />
												<input type="hidden" name="product_hidden" value="{{$product2[$i+1]->id}}">
												<button type="submit" class="btn btn-fefault cart">
													<i class="fa fa-shopping-cart"></i>
													Thêm vào giỏ hàng
												</button>
											</form>	
												</div>
											</div>
										</div>
									</div>
								</a>
								@endif
								@if($i+2<$leng=count($product2))
								<a href="{{route('detailsp',['id'=> $product2[$i+2]->id])}}">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center abc">
													<img src="{{$product2[$i+2]->feature_image_path}}" alt="" />
													<h2>{{$product2[$i+2]->price}} VNĐ</h2>
													<p>{{$product2[$i+2]->name}}</p>
													<form action="{{route('save_cart')}}" method="POST">
												@csrf
												<input type="hidden" value="1" min="1" name="qty" />
												<input type="hidden" name="product_hidden" value="{{$product2[$i+2]->id}}">
												<button type="submit" class="btn btn-fefault cart">
													<i class="fa fa-shopping-cart"></i>
													Thêm vào giỏ hàng
												</button>
											</form>	
												</div>
											</div>
										</div>
									</div>
								</a>
								@endif	
								</div>
								<div class="item">	
								@if($i+3<$leng=count($product2))
								<a href="{{route('detailsp',['id'=> $product2[$i+3]->id])}}">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center abc">
													<img src="{{$product2[$i+3]->feature_image_path}}" alt="" />
													<h2>{{$product2[$i+3]->price}} VNĐ</h2>
													<p>{{$product2[$i+3]->name}}</p>
													<form action="{{route('save_cart')}}" method="POST">
												@csrf
												<input type="hidden" value="1" min="1" name="qty" />
												<input type="hidden" name="product_hidden" value="{{$product2[$i+3]->id}}">
												<button type="submit" class="btn btn-fefault cart">
													<i class="fa fa-shopping-cart"></i>
													Thêm vào giỏ hàng
												</button>
											</form>	
												</div>
											</div>
										</div>
									</div>
								</a>
								@endif
								@if($i+4<$leng=count($product2))
								<a href="{{route('detailsp',['id'=> $product2[$i+4]->id])}}">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center abc">
													<img src="{{$product2[$i+4]->feature_image_path}}" alt="" />
													<h2>{{$product2[$i+4]->price}} VNĐ</h2>
													<p>{{$product2[$i+4]->name}}</p>
													<form action="{{route('save_cart')}}" method="POST">
												@csrf
												<input type="hidden" value="1" min="1" name="qty" />
												<input type="hidden" name="product_hidden" value="{{$product2[$i+4]->id}}">
												<button type="submit" class="btn btn-fefault cart">
													<i class="fa fa-shopping-cart"></i>
													Thêm vào giỏ hàng
												</button>
											</form>	
												</div>
											</div>
										</div>
									</div>
								</a>
								@endif
								@if($i+5<$leng=count($product2))
								<a href="{{route('detailsp',['id'=> $product2[$i+5]->id])}}">
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center abc">
													<img src="{{$product2[$i+5]->feature_image_path}}" alt="" />
													<h2>{{$product2[$i+5]->price}} VNĐ</h2>
													<p>{{$product2[$i+5]->name}}</p>
													<form action="{{route('save_cart')}}" method="POST">
												@csrf
												<input type="hidden" value="1" min="1" name="qty" />
												<input type="hidden" name="product_hidden" value="{{$product2[$i+5]->id}}">
												<button type="submit" class="btn btn-fefault cart">
													<i class="fa fa-shopping-cart"></i>
													Thêm vào giỏ hàng
												</button>
											</form>	
												</div>
											</div>
										</div>
									</div>
								</a>
								@endif
								</div>
							</div>
								@endfor	
								<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>	
							</div>
							
							  
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	
	

  
   
@endsection