@extends('app')

@section('content')
<div class="password-page">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-success">
          <div class="panel-heading">重置密码</div>
          <div class="panel-body">
            @if (session('status'))
              <div class="alert alert-success">
                {{ session('status') }}
              </div>
            @endif

            @include('auth.error_message')

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

              <div class="form-group">
                <label class="col-md-4 control-label">邮箱</label>
                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <button type="submit" class="btn btn-primary">
                    发送重置链接到邮箱
                  </button>
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
