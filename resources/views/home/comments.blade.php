@extends('app')

@section('title', '我的评论')

@section('content')
    @include('shared._topbar')

    <div class="rixi-main">
        <div class="container">
            <div class="col-sm-3">
                @include('home._sidebar')
            </div>

            <div class="col-sm-9">
                <div class="home-page-title">
                    <h2>我的评论</h2>
                </div>
                @include('comments._my_comments', ['comments' => $comments])
            </div>
        </div>
    </div>

    @include('shared._footer')
@endsection