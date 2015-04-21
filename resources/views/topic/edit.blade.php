@extends('app')

@section('title', '编辑话题')

@section('content')
    @include('shared._topbar')
    <div class="rixi-main">
        <div class="container">
            <div class="form-header">
                <h1>编辑话题</h1>
                <p>再加点什么～</p>
            </div>
            <div class="form-panel">
                {!! Form::model($topic, ['route' => ['topic.update', $topic], 'method' => 'PUT']) !!}
                    @include('topic._form', ['errors' => $errors])
                    {!! Form::submit('提交', ['class' => 'btn btn-submit']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @include('shared._footer')
@endsection