<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-xs-5 col-xs-offset-1 col-sm-3">
        <a href="{{ url('/') }}"><h1>日系问答</h1></a>
      </div>
      <div class="col-xs-5 col-xs-offset-1 col-sm-3 col-sm-offset-5">
        <div class="topbar-login">
          @if (\Route::is('welcome'))
            <a href="{{ route('topic.index') }}" type="button" class="btn btn-primary">我去看看</a>
          @else
            <div class="btn-group">
              <a href="{{ route('topic.index') }}" class="btn btn-primary" type="button">话题中心</a>
              <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle" type="button">
                <span class="caret"></span>
              </button>
              <ul role="menu" class="dropdown-menu">
              @if (Auth::guest())
                <li>
                  <a href="{{ url('/auth/login') }}">
                    <span class="fui-user icon-padding-right"></span> 我要登录
                  </a>
                </li>
              @else
                <li>
                  <a href="{{ url('/home') }}">
                      <img src="/images/avatar/{{ \Auth::user()->getAvatarName() }}" width=50 /> {{ Auth::user()->name }}
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="{{ url('/auth/logout') }}">
                    <span class="fui-exit icon-padding-right"></span> 退出登录
                  </a>
                </li>
              @endif
              </ul>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>