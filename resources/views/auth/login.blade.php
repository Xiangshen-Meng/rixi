@extends('app')

@section('content')
  @include('shared.topbar')
  <div class="login-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="rixi-panel-title">
                登录
              </div>
              <div class="col-md-6">
                <img src="/images/hello.svg" height="300" class="center-block">
              </div>
              <div class="col-md-6">
                @include('auth.error_message')

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                    <label class="col-md-3 control-label">邮箱</label>
                    <div class="col-md-9">
                      <input type="email" class="form-control max-input-length" name="email" value="{{ old('email') }}">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-3 control-label">密码</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control max-input-length" name="password">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <label class="checkbox">
                        <input type="checkbox" data-toggle="checkbox" name="remember">
                        记住我
                      </label>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button type="submit" class="btn btn-primary">马上登录</button>
                      <a href="{{ url('/auth/register') }}" type="button" class="btn btn-danger">我要注册</a>
                      <a class="btn btn-link" href="{{ url('/password/email') }}">忘记密码？</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
