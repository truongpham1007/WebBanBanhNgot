@extends('layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{URL::to('/home')}}">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{URL::to('/save-checkout-customer')}}" method="post" class="beta-form-checkout">
				{{csrf_field()}}
				<div class="row">
					<div class="col-sm-6">
						<h4>Đặt hàng</h4>
						<div class="space20">&nbsp;</div>
							<div class="register-req" style="color: red">
				<p>*Làm ơn đăng ký hoặc đăng nhập để thanh toán giỏ hàng và xem lại lịch sử mua hàng</p>
		 		</div><!--/register-req-->	
					<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" name="shipping_name" placeholder="Họ tên" required>
						</div>
						<div class="form-block">
							
										
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" name="shipping_email" required placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input type="text" name="shipping_address" placeholder="Street Address" required>
						</div>
						

						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" name="shipping_phone" required>
						</div>
						
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea name="shipping_notes"></textarea>
						</div>
						<button class="beta-btn primary" type="submit" >Đặt hàng <i class="fa fa-chevron-right"></i>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							
							<div class="your-order-body" style="padding: 0px 10px">
								
							</div>
							

							
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection