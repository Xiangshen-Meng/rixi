@extends('app')

@section('content')
  @include('shared._topbar')

  <div class="rixi-main">
    <div class="container">
      <div class="col-sm-3">
        @include('home._sidebar')
      </div>

      <div class="col-sm-9">
        <a href="{{ url('/auth/logout') }}" type="button" class="btn btn-danger">退出登录</a>
      </div>
    </div>
  </div>
@endsection
