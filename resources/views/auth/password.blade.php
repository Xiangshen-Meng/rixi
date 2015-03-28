@extends('app')

@section('content')
  @include('shared.topbar')
<div class="password-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-success">
          <div class="panel-body">
            <div class="rixi-panel-title">
              重置密码
            </div>
            <div class="col-md-12">
              @if (session('status'))
                <div class="alert alert-success">
                  {{ session('status') }}
                </div>
              @endif

              @include('auth.error_message')

              <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                  <label class="col-sm-2 col-lg-2 col-lg-offset-2 control-label">邮箱</label>
                  <div class="col-sm-6 col-lg-4">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                  </div>
                  <div class="col-sm-4 hidden-xs">
                    <button type="submit" class="btn btn-primary">
                      发送验证到邮箱
                    </button>
                  </div>
                  <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                    <button type="submit" class="btn btn-primary btn-block" style="margin-top: 10px">
                      发送验证到邮箱
                    </button>
                  </div>
                </div>
              </form>
            </div>

            <div class="col-md-12">
              <img src="/images/mail.svg" height="300" class="center-block">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
