<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-xs-7 col-xs-offset-1 col-sm-10 col-sm-offset-0">
        <h1>日系</h1>
      </div>
      <div class="col-xs-3 col-sm-2">
        <div class="topbar-login">
          @if (Auth::guest())
            <a href="{{ url('/auth/login') }}" type="button" class="btn btn-primary">我要登录</a>
          @else
            <a href="{{ url('/auth/logout') }}">{{ Auth::user()->name }}</a>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>