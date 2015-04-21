@extends('app')

@section('title', '用户注册')

@section('content')
    @include('shared._topbar')
    <div class="auth-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <div class="rixi-panel-title">
                                注册
                            </div>
                            <div class="col-md-4">
                                <img src="/images/rixi/computer.png" height="300" class="center-block">
                            </div>
                            <div class="col-md-8">
                                @include('auth._error_message')

                                {!! Form::open(['url' => '/auth/register', 'class' => 'form-horizontal']) !!}

                                    <div class="form-group">
                                        {!! Form::label('name', '用户名', ['class' => 'col-md-3 control-label']) !!}

                                        <div class="col-md-9">
                                            {!! Form::text('name', old('name'), ['class' => 'form-control max-input-length']) !!}
                                        </div>
                                    </div>

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
                                        {!! Form::label('password', '确认密码', ['class' => 'col-md-3 control-label']) !!}

                                        <div class="col-md-9">
                                            {!! Form::password('password_confirmation', ['class' => 'form-control max-input-length']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">
                                                提交注册
                                            </button>
                                            <a class="btn btn-link" href="{{ url('/auth/login') }}"> 我有账号啦，去登录</a>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
