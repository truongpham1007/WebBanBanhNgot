@extends('layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Khôi phục tài khoản</h3>
                    </div>
                    <div class="panel-body">
                    @if(Session('thanhcong'))
                        <div class="alert alert-success">{{Session('thanhcong')}}</div>
                    @endif
                        <form role="form" action="{{ route('khoi-phuc') }}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" value="{{ $code }}" name="code" type="hidden">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" value="{{ $email }}" placeholder="E-mail" name="email" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mật khẩu" name="password" type="password" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Nhập lại mật khẩu" name="re_password" type="password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Khôi phục mật khẩu</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection