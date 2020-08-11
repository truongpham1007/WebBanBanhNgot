@extends('layout')
@section('content')
<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
								<ul>
									<!-- THE FIRST SLIDE -->
									<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img1.jpg?v=232" data-src="https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img1.jpg?v=232" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img1.jpg?v=232'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
													</div>
												</div>

						        </li>
								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						          <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
												<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img3.jpg?v=232" data-src="https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img3.jpg?v=232" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img3.jpg?v=232'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
											</div>
											</div>

								<li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
						            <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined" data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined" data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined" data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined" data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined" data-oheight="undefined">
													<div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined" src="https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img4.jpg?v=232" data-src="https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img4.jpg?v=232" style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('https://theme.hstatic.net/1000337134/1000446075/14/ms_banner_img4.jpg?v=232'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
												</div>
											</div>

						        </li>

							

						        </li>
								</ul>
							</div>
						</div>

						<div class="tp-bannertimer"></div>
					</div>
				</div>
				<!--slider-->
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						
						<div class="space50">&nbsp;</div>
						<div class="beta-products-list">
							<h4>Sản phẩm được yêu thích</h4>
							<div class="space20">&nbsp;</div>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($all_product as $sale => $product)
								
								
								<div class="col-sm-3">
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
							<div class="space40">&nbsp;</div>	
						</div> <!-- .beta-products-list -->
						<div class="beta-products-list">
							<h4>Sản phẩm khuyến mãi</h4>
							<div class="beta-products-details">
							</div>
							<div class="row">
								@foreach($sale_product as $sale => $product)
								@if($product->product_promotion_price != 0)
								
								<div class="col-sm-3">
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
								@endif
								@endforeach
								
							</div>
						</div> <!-- .sale -->
						<div class="space50">&nbsp;</div>
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
@endsection