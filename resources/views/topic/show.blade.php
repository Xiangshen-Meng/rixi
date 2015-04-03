@extends('app')

@section('content')
  @include('shared.topbar')
  <div class="rixi-main">
    <div class="container">
      <div class="topic-panel">
        <div class="topic-title">
          <h1>关于日本你想知道什么？<h1>
        </div>
        <div class="topic-description">
          <p>服装？料理？化妆品？文化？关于日本，把想知道的一切都告诉我们吧！ 我们会尽快的整理出资料通知您的～</p>
        </div>
        <div class="topic-author">
          <p></p>
        </div>
        <div class="topic-meta">
          <span class="span-padding-right">
            <a href=""><i class="fa fa-heart-o icon-padding-right text-danger"></i></a> 7
          </span>
          <span class="span-padding-right">
            <i class="fa fa-comment-o icon-padding-right text-info"></i> 7
          </span>
          <span>
            <i class="fa fa-smile-o icon-padding-right"></i> <a href="">啊哦</a>
          </span>
        </div>
      </div>
    </div>
  </div>
  @include('shared.footer')
@endsection