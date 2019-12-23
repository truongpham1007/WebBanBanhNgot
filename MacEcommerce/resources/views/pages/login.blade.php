@extends('layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<?php
            $customer_id = Session::get('customer_id');
              if($customer_id==NULL){ 
            ?>
             <div id="content">
			
			<form action="{{URL::to('/login-customer')}}" method="POST" class="beta-form-checkout">
							{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4 style="color: blue;" >Đăng nhập</h4>
						<div class="space60">&nbsp;</div>
						<?php
					$message = Session::get('message');
					if($message){
					echo '<div class="alert alert-danger alert-dismissable">';
					echo '<span>'.$message.'</span>';
					echo '</div>';
					Session::put('message',null);
					}
				?>
					<div class="space30">&nbsp;</div>
						
						<fieldset>
                                
                                <div class="form-group">
                                    <input class="form-control"  placeholder="E-mail" name="email_account" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password_account" type="password" autofocus>
                                </div>
                                
                               
                                <p style="color: red;">*Nếu chưa có tài khoản vui lòng <a href="{{URL::to('/register')}}">  <u style="color: blue;">đăng ký tại đây</u> </a> </p>
						<div class="space10">&nbsp;</div>
						<p style="color: red;"> *<a href="{{URL::to('/forgot')}}">  <u style="color: blue;">Quên mật khẩu</u> </a> </p>
						<div class="space20">&nbsp;</div>
						 <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                            </fieldset>
						
						
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
                                
        <?php
       }else{
            ?>
            <div class="space60">&nbsp;</div>
             <p style="color: red; font-size: 20px;">* Đăng nhập thành công </p>
            <div class="space40">&nbsp;</div>
                                 <p style="color: red; font-size: 20px;">* Vui lòng <a href="{{URL::to('/home')}}"> <u style="color: blue;"> quay lại trang chủ </u> </a> <a href="{{URL::to('/checkout')}}"> hoặc   <u style="color: blue;">vào giỏ hàng </u> </a> tại đây. Để tiếp tục mua hàng </p>
                                 <?php 
            
        }
            ?>
		<div class="space60">&nbsp;</div>
		<div class="space60">&nbsp;</div>
		
	</div> <!-- .container -->
@endsection