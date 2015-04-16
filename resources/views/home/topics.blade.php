@extends('app')

@section('content')
    @include('shared._topbar')

    <div class="rixi-main">
        <div class="container">
            <div class="col-sm-3">
                @include('home._sidebar')
            </div>

            <div class="col-sm-9">
                <div class="home-page-title">
                    <h2>我的话题</h2>
                </div>
                @include('topic.list._my_topic', ['topics' => $topics])
            </div>
        </div>
    </div>

    @include('shared._footer')
@endsection