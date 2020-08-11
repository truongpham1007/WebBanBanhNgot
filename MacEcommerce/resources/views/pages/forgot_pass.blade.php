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
		
             <div id="content">
			
			<form action="{{route('quen-mat-khau')}}" method="POST" class="beta-form-checkout">
							{{ csrf_field() }}
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4 style="color: blue;" >Quên mật khẩu</h4>
						<div class="space60">&nbsp;</div>
				 @if(Session('thanhcong'))
                        <div class="alert alert-success">{{Session('thanhcong')}}</div>
                    @endif
						
					<div class="space30">&nbsp;</div>
						
						<div class="form-block">
							<label for="email" style="color: red;">Email*</label>
							<input type="email" name="email" required>
						</div>
						
						
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Nhận email</button>
						</div>
						
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
                                
       
		<div class="space60">&nbsp;</div>
		<div class="space60">&nbsp;</div>
		
	</div> <!-- .container -->
@endsection