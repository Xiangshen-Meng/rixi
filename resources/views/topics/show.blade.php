@extends('app')

@section('content')
  @include('shared.topbar')
  <div class="rixi-main">
    <div class="container">
        @include('topics.topic')
    </div>
  </div>
  @include('shared.footer')
@endsection