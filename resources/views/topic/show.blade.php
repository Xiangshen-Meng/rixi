@extends('app')

@section('content')
  @include('shared._topbar')
  <div class="rixi-main">
    <div class="container">
        @include('shared._message_bar')
        @include('topic._topic')
    </div>
  </div>
  @include('shared._footer')
@endsection