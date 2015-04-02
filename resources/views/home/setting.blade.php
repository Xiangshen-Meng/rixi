@extends('app')

@section('content')
  @include('shared.topbar')

  <div class="rixi-main">
    <div class="container">
      <div class="rixi-main-panel">
        <div class="col-sm-3">
          @include('home.sidebar')
        </div>

        <div class="col-sm-9">
          <a href="{{ url('/auth/logout') }}" type="button" class="btn btn-danger">退出登录</a>
        </div>
      </div>
    </div>
  </div>
@endsection
