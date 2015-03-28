@extends('app')

@section('content')
  @include('shared.topbar')
  <div class="register-page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="rixi-panel-title">
                注册
              </div>
              <div class="col-md-6">
                <img src="/images/computer.svg" height="300" class="center-block">
              </div>
              <div class="col-md-6">
                @include('auth.error_message')

                <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">

                  <div class="form-group">
                    <label class="col-md-3 control-label">用户名</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control max-input-length" name="name" value="{{ old('name') }}">
                    </div>
                  </div>

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
                    <label class="col-md-3 control-label">确认密码</label>
                    <div class="col-md-9">
                      <input type="password" class="form-control max-input-length" name="password_confirmation">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
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
  </div>
@endsection
