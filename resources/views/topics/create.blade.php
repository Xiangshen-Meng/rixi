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
                    <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                        {!! Form::label('title', '标题') !!}
                        @if ( $errors->has('title') )
                            <p class="control-label">{{ $errors->first('title') }}</p>
                        @endif
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => '标题']) !!}
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                        {!! Form::label('description', '描述') !!}
                        @if ( $errors->has('description') )
                            <p class="control-label">{{ $errors->first('description') }}</p>
                        @endif
                        {!! Form::textarea('description', null, [
                            'class' => 'form-control',
                            'placeholder' => '描述',
                            'row' => '7']) !!}
                    </div>
                    {!! Form::submit('提交', ['class' => 'btn btn-submit']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    @include('shared.footer')
@endsection