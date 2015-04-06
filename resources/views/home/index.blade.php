@extends('app')

@section('content')
    @include('shared.topbar')

    <div class="rixi-main">
        <div class="container">
            <div class="col-sm-3">
                @include('home.sidebar')
            </div>

            <div class="col-sm-9">
                @include('topic.list.my_topic', ['topics' => $topics])
            </div>
        </div>
    </div>

@endsection
