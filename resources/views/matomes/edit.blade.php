@extends('app')

@section('title', '编辑整理帖')

@section('custom_header')
    @include('UEditor::head')
@endsection

@section('content')
    @include('shared._topbar')
    <div class="rixi-main">
        <div class="container">
            <div class="form-header">
                <h1>编辑整理帖</h1>

                <p>整理帖是对话题的详细整理和回答，我们会定期对整理帖进行推荐和审核及删除。<br>
                    感谢您对日系问答的理解与支持！</p>
            </div>
            <div class="form-panel">
                {!! Form::model($matome, ['route' => ['matome.update', $matome], 'method' => 'PUT']) !!}
                @include('matomes._edit_form', ['errors' => $errors])
                {!! Form::submit('更新', ['class' => 'btn btn-add pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @include('shared._footer')
@endsection