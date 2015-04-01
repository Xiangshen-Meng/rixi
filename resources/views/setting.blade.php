@extends('app')

@section('content')
  @include('shared.topbar')

  <div class="rixi-main">
    <div class="container">
      <h2>设置</h2>
      <div class="rixi-main-panel">
        <a href="{{ url('/auth/logout') }}" type="button" class="btn btn-danger">退出登录</a>
      </div>
    </div>
  </div>
@endsection
