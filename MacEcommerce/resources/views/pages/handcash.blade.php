@extends('layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Thanh toán</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Thanh toán</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<p style="color: red;">* Bạn đã đặt hàng thành công . Hãy đợi shipper đến giao hàng cho bạn  <a href="{{URL::to('/home')}}">  <u style="color: blue;">quay về trang chủ</u> để tiếp tục mua hàng </a> </p>
		<div class="space60">&nbsp;</div>
		<div class="space20">&nbsp;</div>
	</div> <!-- .container -->
@endsection