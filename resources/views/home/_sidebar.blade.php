<div class="home-sidebar">
    <div class="sidebar-element">
        <a href="{{ route('topic.create') }}">
            <img src="/images/icons/pencil.png" width="50" class="icon-lg-padding-right"/>新建话题
        </a>
    </div>
    <div class="sidebar-element">
        <a href="{{ route('my_topics') }}">
            <img src="/images/icons/chat.png" width="{{ \Route::is('my_topics') ? '70' : '50' }}" class="icon-lg-padding-right"/>我的话题
        </a>
    </div>
    <div class="sidebar-element">
        <a href="{{ route('my_comments') }}">
            <img src="/images/icons/compose.png" width="{{ \Route::is('my_comments') ? '70' : '50' }}" class="icon-lg-padding-right"/>我的评论
        </a>
    </div>
    <div class="sidebar-element">
        <a href="{{ route('setting') }}">
            <img src="/images/icons/gear.png" width="{{ \Route::is('setting') ? '70' : '50' }}" class="icon-lg-padding-right"/>设置
        </a>
    </div>
</div>