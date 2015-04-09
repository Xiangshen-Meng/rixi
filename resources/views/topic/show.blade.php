@extends('app')

@section('content')
  @include('shared.topbar')
  <div class="rixi-main" ng-controller="TopicController as topic">
    <div class="container">
        @include('shared.message_bar')
        @include('topic.topic')
    </div>
  </div>
  @include('shared.footer')
@endsection