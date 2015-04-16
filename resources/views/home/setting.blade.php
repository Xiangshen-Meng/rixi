@extends('app')

@section('content')
    @include('shared._topbar')

    <div class="rixi-main">
        <div class="container">
            <div class="col-sm-3">
                @include('home._sidebar')
            </div>

            <div class="col-sm-9">
                @include('shared._message_bar')
                <div class="home-page-title">
                    <h2>更换角色</h2>
                </div>

                {!! Form::open(['url' => '/user']) !!}
                    <div class="form-group">
                        @for ($i = 0; $i <= 8; $i++)
                            <label class="avatar-label">
                                {!! Form::radio('avatar', 'avatar'.$i.'.png', $avatar == 'avatar'.$i.'.png' ? true : false); !!}
                                <img src="/images/avatar/avatar{{ $i }}.png"/>
                            </label>
                        @endfor
                    </div>

                    {!! Form::submit('更新', ['class' => 'btn btn-add']) !!}
                {!! Form::close() !!}

                <div class="home-page-title" style="padding-top: 50px">
                    <h2>换个账号</h2>
                </div>
                <div>
                    <a href="{{ url('/auth/logout') }}" class="btn btn-danger">
                        退出登录
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('shared._footer')
@endsection
