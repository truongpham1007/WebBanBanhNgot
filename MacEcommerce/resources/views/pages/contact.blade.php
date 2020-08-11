@extends('layout')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Contacts</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{URL::to('/home')}}">Home</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://maps.google.com/maps?q=Uit&t=&z=13&ie=UTF8&iwloc=&output=embed" ></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">

			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2 style="color: blue;">Form liên hệ</h2>
					<div class="space20">&nbsp;</div>
					@if(Session('thanhcong'))
                        <div class="alert alert-success">{{Session('thanhcong')}}</div>
                    @endif
					<p style="color: red;">Vui lòng gửi phản hồi hoặc yêu cầu của quý khách đến với chúng tôi</p>
					<br>
					<p style="color: red;">Những thông tin ký hiệu dấu (*) bắt buộc phải điền</p>
					<div class="space20">&nbsp;</div>
					<form action="{{URL::to('/add-contacts')}}" method="post" class="contact-form">
						{{csrf_field()}}
						<div class="form-block">
							<input name="name" type="text" placeholder="Họ và tên (*)">
						</div>
						<div class="form-block">
							<input name="email" type="email" placeholder="Email của bạn (*)">
						</div>
						<div class="form-block">
							<input name="title" type="text" placeholder="Tiêu đề">
						</div>
						<div class="form-block">
							<textarea name="desc" placeholder="Lời nhắn"></textarea>
						</div>
						<div class="form-block">
						<button type="submit" class="beta-btn primary">Gửi  <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2 style="color: blue;">Thông tin liên hệ</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title" style="color: red;">Địa chỉ</h6>
					<div class="space10">&nbsp;</div>
					<p>
						 Khu phố 6, Linh Trung, Thủ Đức, Hồ Chí Minh
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title" style="color: red;">Thắc mắc kinh doanh</h6>
					<div class="space10">&nbsp;</div>
					<p>
						Trường phòng kinh doanh<br>
						<a href="phuonghao@mostersteam.com">phuonghao@mostersteam.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title" style="color: red;">Việc làm</h6>
					<div class="space10">&nbsp;</div>
					<p>
						Trưởng phòng nhân sự <br>
						<a href="hr@betadesign.com">hr@mostersteam.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
	@endsection
