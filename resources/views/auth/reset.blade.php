@extends('app')

@section('content')
    @include('shared._topbar')
    <div class="login-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <div class="rixi-panel-title">
                                重置密码
                            </div>
                            <div class="col-md-6">
                                <img src="/images/hello.svg" height="300" class="center-block">
                            </div>
                            <div class="col-md-6">
                                @include('auth._error_message')

                                {!! Form::open(['url' => '/password/reset', 'class' => 'form-horizontal']) !!}
                                    {!! Form::hidden('token', $token) !!}
                                    <div class="form-group">
                                        {!! Form::label('email', '邮箱', ['class' => 'col-md-3 control-label']) !!}

                                        <div class="col-md-9">
                                            {!! Form::email('email', old('email'), ['class' => 'form-control
                                            max-input-length']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('password', '密码', ['class' => 'col-md-3 control-label']) !!}

                                        <div class="col-md-9">
                                            {!! Form::password('password', ['class' => 'form-control max-input-length']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        {!! Form::label('password', '确认密码', ['class' => 'col-md-3 control-label']) !!}

                                        <div class="col-md-9">
                                            {!! Form::password('password_confirmation', ['class' => 'form-control
                                            max-input-length']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">重置密码</button>
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
