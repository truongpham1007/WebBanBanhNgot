
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Web</title>
<base href="{{asset('')}}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="backend/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="backend/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="backend/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="backend/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>Đăng nhập</h1>
			</div>
			<div class="login-block">
				<?php
					$message = Session::get('message');
					if($message){
					echo '<div class="alert alert-danger alert-dismissable">';
					echo '<span>'.$message.'</span>';
					echo '</div>';
					Session::put('message',null);
					}
				?>
				<form action="{{URL::to('/admin-dashboard')}}" method="post">
					{{ csrf_field() }}
					<input type="text" name="admin_email" placeholder="Email" required="">
					<input type="password" name="admin_password" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Ghi nhớ đăng nhập</label>
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Đăng nhập">	
					
				</form>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019 Ecommerce MacbookShop. All Rights Reserved </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="backend/js/jquery.nicescroll.js"></script>
		<script src="backend/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="backend/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
