@extends('app')

@section('content')
    @include('shared.topbar')
    <div class="login-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <div class="rixi-panel-title">
                                登录
                            </div>
                            <div class="col-md-6">
                                <img src="/images/hello.svg" height="300" class="center-block">
                            </div>
                            <div class="col-md-6">
                                @include('auth.error_message')

                                {!! Form::open(['url' => '/auth/login', 'class' => 'form-horizontal']) !!}
                                    {!! Form::hidden('remember', 'on') !!}
                                    <div class="form-group">
                                        {!! Form::label('email', '邮箱', ['class' => 'col-md-3 control-label']) !!}

                                        <div class="col-md-9">
                                            {!! Form::email('email', old('email'), ['class' => 'form-control max-input-length']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('password', '密码', ['class' => 'col-md-3 control-label']) !!}

                                        <div class="col-md-9">
                                            {!! Form::password('password', ['class' => 'form-control max-input-length']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">马上登录</button>
                                            <a href="{{ url('/auth/register') }}" type="button" class="btn btn-danger">我要注册</a>
                                            <a class="btn btn-link" href="{{ url('/password/email') }}">忘记密码？</a>
                                        </div>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
