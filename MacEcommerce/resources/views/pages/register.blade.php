@extends('layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{URL::to('/add-customer')}}" method="post" class="beta-form-checkout">
				{{csrf_field()}}
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>

						
						<div class="form-block">
							<label for="email">Địa chỉ email*</label>
							<input type="email" name="customer_email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Họ tên*</label>
							<input type="text" name="customer_name" required>
						</div>

											
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" name="customer_pass" required>
						</div>
						<div class="form-block">
							<label for="your_last_name">Số điện thoại*</label>
							<input type="text" name="customer_phone" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng ký</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->

@endsection