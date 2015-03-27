@extends('app')

@section('content')
<div class="register-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
          <div class="panel-heading">注册</div>
          <div class="panel-body">
            @include('auth.error_message')

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label class="col-md-4 control-label">用户名</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">邮箱</label>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">密码</label>
                <div class="col-md-6">
                  <input type="password" class="form-control" name="password">
                </div>
              </div>

              <div class="form-group">
                <label class="col-md-4 control-label">确认密码</label>
                <div class="col-md-6">
                  <input type="password" class="form-control" name="password_confirmation">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    提交注册
                  </button>
                  <a class="btn btn-link" href="{{ url('/auth/login') }}"> 我有账号啦，去登录</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
