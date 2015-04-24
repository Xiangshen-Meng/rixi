@extends('app')

@section('title', $matome->title)

@section('content')
    @include('shared._topbar')
    <div class="rixi-main">
        <div class="container">
            @include('shared._message_bar')
            @include('matomes._matome')
        </div>
    </div>
    @include('shared._footer')
@endsection