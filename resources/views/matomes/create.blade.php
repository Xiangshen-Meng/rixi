@extends('app')

@section('title', '新建整理帖')

@section('custom_header')
    @include('UEditor::head')
@endsection

@section('content')
    @include('shared._topbar')
    <div class="rixi-main">
        <div class="container">
            <div class="form-header">
                <h1>新的整理帖</h1>

                <p>整理帖是对话题的详细整理和回答，我们会定期对整理帖进行推荐和审核及删除。<br>
                    感谢您对日系问答的理解与支持！</p>
            </div>
            <div class="form-panel">
                {!! Form::open(['action' => 'MatomesController@store']) !!}
                @include('matomes._form', ['errors' => $errors])
                {!! Form::submit('提交', ['class' => 'btn btn-add pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @include('shared._footer')
@endsection