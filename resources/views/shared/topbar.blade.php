<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-xs-5 col-xs-offset-1 col-sm-3">
        <a href="{{ url('/') }}"><h1>日系问答</h1></a>
      </div>
      <div class="col-xs-3 col-xs-offset-3 col-sm-2 col-sm-offset-6">
        <div class="topbar-login">
          @if (\Route::is('welcome'))
            <a href="{{ route('topic.index') }}" type="button" class="btn btn-primary">我去看看</a>
          @else
            @if (Auth::guest())
              <a href="{{ url('/auth/login') }}" type="button" class="btn btn-primary">我要登录</a>
            @else
              <a href="{{ url('/home') }}">{{ Auth::user()->name }}</a>
            @endif
          @endif
        </div>
      </div>
    </div>
  </div>
</div>