<div class="home-sidebar">
    <div class="sidebar-element">
        <a href="{{ route('home') }}">
            <img src="/images/icons/chat.png" width="{{ \Route::is('home') ? '70' : '50' }}" class="icon-padding-right"/>我的话题
        </a>
    </div>
    <div class="sidebar-element">
        <a href="{{ route('setting') }}">
            <img src="/images/icons/gear.png" width="{{ \Route::is('setting') ? '70' : '50' }}" class="icon-padding-right"/>设置
        </a>
    </div>
</div>