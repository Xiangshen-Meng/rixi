@extends('app')

@section('content')
<div class="login-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
          <div class="panel-heading">登陆</div>
          <div class="panel-body">
            @include('auth.error_message')

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

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
                <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> 记住我
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">登陆啦</button>

                  <a class="btn btn-link" href="{{ url('/password/email') }}">忘记了密码？</a>
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
