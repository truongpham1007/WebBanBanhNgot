<h1>Xin chào {{$user->name}}</h1>
<p>
	Nhấn vào đây để khôi phục mật khẩu của bạn
	<a href="{{url('khoiphuc/'.$user->email.'/'.$code)}}">Click vào đây</a>
</p>