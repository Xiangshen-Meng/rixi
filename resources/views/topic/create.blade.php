@extends('app')

@section('content')
    @include('shared.topbar')
    <div class="rixi-main">
        <div class="container">
            <div class="form-header">
                <h1>新的话题</h1>

                <p>关于日系，有什么想知道的都告诉我们吧！我们会尽快的整理出资料通知您的～</p>
            </div>
            <div class="form-panel">
                {!! Form::open(['action' => 'TopicsController@store']) !!}
                    @include('topic.form', ['errors' => $errors])
                    {!! Form::submit('提交', ['class' => 'btn btn-submit']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @include('shared.footer')
@endsection