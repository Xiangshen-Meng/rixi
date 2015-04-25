@extends('app')

@section('title', '我的整理帖')

@section('content')
    @include('shared._topbar')

    <div class="rixi-main">
        <div class="container">
            <div class="col-sm-3">
                @include('home._sidebar')
            </div>

            <div class="col-sm-9">
                <div class="home-page-title">
                    <h2>我的整理帖</h2>
                </div>
                @include('matomes._my_matomes', ['matomes' => $matomes])
            </div>
        </div>
    </div>

    @include('shared._footer')
@endsection