<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Goka | Thiết bị công nghệ chính hãng </title>
	<link rel="shortcut icon" href="//theme.hstatic.net/1000337134/1000446075/14/favicon.png?v=233" type="image/png" />
	<base href="{{asset('')}}">
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	
	<script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="frontend/assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="frontend/assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="frontend/assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="frontend/assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="frontend/assets/dest/css/style.css">
	<link rel="stylesheet" href="frontend/assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="frontend/assets/dest/css/huong-style.css">
	
</head>
<body>

	<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 90-92 Lê Thị Riêng, Bến Thành, Quận 1</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0372258239</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						
						<?php
                                   $customer_id = Session::get('customer_id');
                                   if($customer_id!=NULL){ 
                                 ?>
                                 <li><a href="{{URL::to('/manage-user-order')}}" ><i class="fa fa-user"></i>
                                 <?php
														$name = Session::get('customer_name');
														if($name){
															echo $name;
						
														}
													?></a></li>
                                  
                                  <li><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                                
                                <?php
                            }else{
                                 ?>
                                 <li><a href="{{URL::to('/login-checkout')}}">Đăng nhập</a></li>
                                 <li><a href="{{URL::to('/register')}}">Đăng kí</a></li>
                                 <?php 
                             }
                                 ?>
						
						
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{URL::to('/home')}}" id="logo"><img src="https://theme.hstatic.net/1000337134/1000446075/14/logo.png?v=232" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="post" id="searchform" action="{{URL::to('/search')}}">
							{{csrf_field()}}
					        <input type="text" id="keywords_submit" value="" name="keywords_submit" id="s" placeholder="Nhập từ khóa..." />
					        <div id="productList"></div>
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<a href="{{URL::to('/show-cart')}}"><div><i class="fa fa-shopping-cart"></i> Giỏ hàng </div></a>

							
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{URL::to('/home')}}">Trang chủ</a></li>
						<li><a href="{{URL::to('/product-type')}}">Sản phẩm</a>
						</li>
						<li><a href="{{URL::to('/about-us')}}">Giới thiệu</a></li>
						<li><a href="{{URL::to('/contact')}}">Liên hệ</a></li>
						
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	<div class="rev-slider">
		 @yield('content')
	</div> <!-- .container -->

	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Information</h4>
						<div>
							<ul>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web Design</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Web development</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Marketing</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Tips</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Resources</a></li>
								<li><a href="blog_fullwidth_2col.html"><i class="fa fa-chevron-right"></i> Illustrations</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Contact Us</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>90-92 Lê Thị Riêng, Bến Thành, Quận 1 Phone: +84 37 258 239</p>
								<div class="space10">&nbsp;</div>
								<p>Goka cung cấp sản phẩm, thiết bị công nghệ chính hãng và phụ kiện đi kèm của Microsoft Surface và Apple Macbook - Với sự tận tâm, trách nhiệm trong công việc, Goka đặt sự hài lòng của khách hàng lên hàng đầu. Cùng với chế độ bảo hành và hậu mãi cực tốt. Goka chắc chắn sẽ làm hài lòng Quý khách hàng!</p>
							</div>
						</div>
					</div>
				  </div>
				</div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Newsletter Subscribe</h4>
						<form action="#" method="post">
							<input type="email" name="your_email">
							<button class="pull-right" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->

	<script src="frontend/assets/dest/js/jquery.js"></script>
	<script src="frontend/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="frontend/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="frontend/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="frontend/assets/dest/vendors/animo/Animo.js"></script>
	<script src="frontend/assets/dest/vendors/dug/dug.js"></script>
	<script src="frontend/assets/dest/js/scripts.min.js"></script>
	<script src="frontend/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="frontend/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="frontend/assets/dest/js/waypoints.min.js"></script>
	<script src="frontend/assets/dest/js/wow.min.js"></script>
	@yield('script')
	<!--customjs-->
	<script src="frontend/assets/dest/js/custom2.js"></script>

	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
	<script>
$(document).ready(function(){

 $('#keywords_submit').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"GET",
          data:{query:query, _token:_token},
          success:function(data){
           			$('#productList').fadeIn();  
                    $('#productList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
    	var value = $(this).val();
    	var _token = $('input[name="_token"]').val();
        $.ajax({
          url:"{{route('timkiemAjax')}}",
          method:"GET",
          data:{value:value, _token:_token},
          success:function(data){
           	$("#showsearchAjax").fadeOut();
           	$("#showsearchAjax").fadeIn();
           	$("#showsearchAjax").html(data);
          }
         });
    });  

});
</script>
</body>
</html>
