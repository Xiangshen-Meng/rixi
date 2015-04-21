@extends('app')

@section('title', '找回密码')

@section('content')
    @include('shared._topbar')
    <div class="auth-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <div class="rixi-panel-title">
                                重置密码
                            </div>
                            <div class="col-md-12">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @include('auth._error_message')

                                {!! Form::open(['url' => '/password/email', 'class' => 'form-horizontal']) !!}

                                <div class="form-group">
                                    {!! Form::label('email', '邮箱', ['class' => 'col-sm-3 control-label']) !!}

                                    <div class="col-sm-6 col-lg-6">
                                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-sm-3 hidden-xs">
                                        <button type="submit" class="btn btn-primary">
                                            发送验证到邮箱
                                        </button>
                                    </div>
                                    <div class="col-xs-12 hidden-sm hidden-md hidden-lg">
                                        <button type="submit" class="btn btn-primary btn-block"
                                                style="margin-top: 10px">
                                            发送验证到邮箱
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="col-md-12">
                                <img src="/images/rixi/mail.png" height="300" class="center-block">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
