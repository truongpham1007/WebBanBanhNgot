@extends('layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{URL::to('/home')}}">Home</a> / <span>Sản phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<p>Loại sản phẩm</p>
						<div class="space20">&nbsp;</div>
						<ul class="aside-menu">
							@foreach($category  as $keycate => $cate)
							<li><a href="{{URL::to('/category-type/'.$cate->category_id)}}">{{$cate->category_name}}</a></li>	
							@endforeach
						</ul>
						<div class="space30">&nbsp;</div>
						<p>Thương hiệu</p>
						<div class="space20">&nbsp;</div>
						<ul class="aside-menu">
							@foreach($brand  as $keybrand => $brand)
							<li><a href="{{URL::to('/brand-type/'.$brand->brand_id)}}">{{$brand->brand_name}}</a></li>	
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Tất cả sản phẩm</h4>
							<div class="beta-products-details">
								<p class="pull-left"></p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($all_product as $all => $product)

								<div class="col-sm-4">
									<div class="single-item">
										@if($product->product_promotion_price != 0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{URL::to('/product-detail/'.$product->product_id)}}"><img src="{{$product->product_image}}" alt=""
												height="320px" width="270px"></a>
										</div>
										<div class="space10">&nbsp;</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$product->product_name}}</p>
											<div class="space10">&nbsp;</div>
											<p class="single-item-price">
																				
												@if($product->product_promotion_price==0)
												<span class="flash-sale" style="font-size: 25px;">{{number_format($product->product_unit_price)}} Đ</span>
												<div class="space35">&nbsp;</div>

												@else
												<span class="flash-del" style="font-size: 25px;">{{number_format($product->product_unit_price)}} Đ</span>
												
												<div class="space10">&nbsp;</div>
												<span class="flash-sale" style="font-size: 25px;">
												{{number_format($product->product_promotion_price)}} Đ</span>
												@endif
										
											</p>

											<div class="space20">&nbsp;</div>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{URL::to('/product-detail/'.$product->product_id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{URL::to('/product-detail/'.$product->product_id)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>

										</div>
										<div class="space20">&nbsp;</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm bán chạy</h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sale_product as $all => $product)

								<div class="col-sm-4">
									<div class="single-item">
										@if($product->product_promotion_price != 0)
											<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{URL::to('/product-detail/'.$product->product_id)}}"><img src="{{$product->product_image}}" alt=""
												height="320px" width="270px"></a>
										</div>
										<div class="space10">&nbsp;</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$product->product_name}}</p>
											<p class="single-item-price">
												@if($product->product_promotion_price==0)
												<span class="flash-sale">{{number_format($product->product_unit_price)}} Đ</span>

												@else
												<span class="flash-del">{{number_format($product->product_unit_price)}} Đ</span>
												<span class="flash-sale">{{number_format($product->product_promotion_price)}} Đ</span>
												@endif
											</p>

											<div class="space20">&nbsp;</div>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{URL::to('/product-detail/'.$product->product_id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{URL::to('/product-detail/'.$product->product_id)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
												<div class="space40">&nbsp;</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="space40">&nbsp;</div>

						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
