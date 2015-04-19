<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 col-xs-offset-1">
                <a href="{{ url('/') }}"><h1>日系问答</h1></a>
            </div>
            <div class="col-xs-5">
                <div class="topbar-login pull-right">
                    @if (\Route::is('welcome'))
                        <a href="{{ route('topic.index') }}" type="button" class="btn btn-primary">我去看看</a>
                    @else
                        <div class="btn-group">
                            @if (Auth::guest())
                                <a href="{{ url('/auth/login') }}" class="btn btn-primary" type="button">我要登录</a>
                            @else
                                <a href="{{ route('my_topics') }}">
                                    <img src="/images/avatar/{{ \Auth::user()->getAvatarName() }}"
                                         width=40 style="margin-top: -7px; margin-right: 7px"/>
                                    <span class="hidden-xs">{{ Auth::user()->name }}</span>
                                </a>
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>