<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title', '标题') !!}
    @if ( $errors->has('title') )
        <p class="control-label">{{ $errors->first('title') }}</p>
    @endif
    {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '标题']) !!}
</div>

<div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
    {!! Form::label('description', '描述') !!}
    @if ( $errors->has('description') )
        <p class="control-label">{{ $errors->first('description') }}</p>
    @endif
    {!! Form::textarea('description', old('description'), [
    'class' => 'form-control',
    'placeholder' => '描述',
    'row' => '7']) !!}
</div>