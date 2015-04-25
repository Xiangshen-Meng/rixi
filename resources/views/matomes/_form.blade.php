{!! Form::hidden('topic_id', $topic->id) !!}

<div class="form-group">
    {!! Form::label('话题标题') !!}
    <h4>{{ $topic->title }}</h4>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title', '标题') !!}
    @if ( $errors->has('title') )
        <p class="control-label">{{ $errors->first('title') }}</p>
    @endif
    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '标题']) !!}
</div>

<div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
    {!! Form::label('content', '内容') !!}
    @if ( $errors->has('content') )
        <p class="control-label">{{ $errors->first('content') }}</p>
    @endif

    <script id="rixi-editor" name="content">
        @if (old('content'))
            {!! html_entity_decode(old('content')) !!}
        @else
            {!! html_entity_decode($matome->content) !!}
        @endif
    </script>
    @include('shared._ueditor', ['editor_height' => 400])
</div>