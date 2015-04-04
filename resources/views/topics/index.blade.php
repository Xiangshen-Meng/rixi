@extends('app')

@section('content')
  @include('shared.topbar')
  <div class="welcome-banner">
    <div class="container">
      <div class="col-md-6">
        <img src="/images/sushi.svg" height="400" class="center-block">
      </div>

      <div class="col-md-6">
        <div class="welcome-banner-text">
          <h3>关于日本你想知道什么？</h3>
          <div class="welcome-banner-text-content">
            服装？料理？化妆品？文化？关于日本，把想知道的一切都告诉我们吧！
            我们会尽快的整理出资料通知您的～
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="rixi-main">
    <div class="container">
      <div class="tool-bar">
        <div class="tool-bar-info">
          <p>总计 <strong class="text-primary">9999</strong> 个话题</p>
        </div>
        <div class="new-topic-button pull-right">
          <a href="{{ route('topics.create') }}" class="btn btn-inverse">新的话题</a>
        </div>
      </div>
      <div class="topic-list">
        <div class="topic">
          <div class="topic-title">
            <a href="{{ route('topics.show') }}">关于日本你想知道什么？</a>
          </div>
          <div class="topic-description">
            服装？料理？化妆品？文化？关于日本，把想知道的一切都告诉我们吧！ 我们会尽快的整理出资料通知您的～
          </div>
          <div class="topic-meta">
            <span class="span-padding-right">
              <i class="fa fa-heart-o icon-padding-right text-danger"></i> 7
            </span>
            <span class="span-padding-right">
              <i class="fa fa-comment-o icon-padding-right text-info"></i> 7
            </span>
            <span class="pull-right" style="font-size:15px">
              By <a href="">啊哦</a>
            </span>
          </div>
        </div>
        <div class="topic">
          <div class="topic-title">
            <a href="">关于日本你想知道什么？</a>
          </div>
          <div class="topic-description">
            服装？料理？化妆品？文化？关于日本，把想知道的一切都告诉我们吧！ 我们会尽快的整理出资料通知您的～
          </div>
          <div class="topic-meta">
            <span class="span-padding-right">
              <i class="fa fa-heart-o icon-padding-right text-danger"></i> 7
            </span>
            <span class="span-padding-right">
              <i class="fa fa-comment-o icon-padding-right text-info"></i> 7
            </span>
            <span class="pull-right" style="font-size:15px">
              By <a href="">啊哦</a>
            </span>
          </div>
        </div>
        <div class="topic">
          <div class="topic-title">
            <a href="">关于日本你想知道什么？</a>
          </div>
          <div class="topic-description">
            服装？料理？化妆品？文化？关于日本，把想知道的一切都告诉我们吧！ 我们会尽快的整理出资料通知您的～
          </div>
          <div class="topic-meta">
            <span class="span-padding-right">
              <i class="fa fa-heart-o icon-padding-right text-danger"></i> 7
            </span>
            <span class="span-padding-right">
              <i class="fa fa-comment-o icon-padding-right text-info"></i> 7
            </span>
            <span class="pull-right" style="font-size:15px">
              By <a href="">啊哦</a>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('shared.footer')
@endsection
