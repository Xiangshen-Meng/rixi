<div class="home-sidebar">
  <div class="sidebar-element">
    <a href="{{ route('home') }}" class="{{ \Route::is('home') ? 'active' : '' }}"><span class="fui-user icon-padding-right"></span> 我的账号</a>
  </div>
  <div class="sidebar-element">
    <a href="{{ route('setting') }}" class="{{ \Route::is('setting') ? 'active' : '' }}"><span class="fui-gear icon-padding-right"></span> 设置</a>
  </div>
</div>