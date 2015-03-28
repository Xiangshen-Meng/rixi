<div class="iconbar iconbar-stick-left hidden-xs">
  <ul>
    <li class="{{ $active_home or '' }}"><a href="{{ url('/home') }}" class="fui-home"></a></li>
    <li class="{{ $active_setting or '' }}"><a href="{{ url('/setting') }}" class="fui-gear"></a></li>
  </ul>
</div>

<div class="iconbar iconbar-horizontal hidden-sm hidden-md hidden-lg">
  <ul>
    <li class="{{ $active_home or '' }}"><a href="{{ url('/home') }}" class="fui-home"></a></li>
    <li class="{{ $active_setting or '' }}"><a href="{{ url('/setting') }}" class="fui-gear"></a></li>
  </ul>
</div>