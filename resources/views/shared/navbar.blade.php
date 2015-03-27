<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-main">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/') }}">主页</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{ url('/auth/login') }}">登陆</a></li>
          <li><a href="{{ url('/auth/register') }}">注册</a></li>
        @else
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="{{ url('/auth/logout') }}">退出</a></li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>
