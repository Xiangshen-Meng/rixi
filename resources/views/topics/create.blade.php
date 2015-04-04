@extends('app')

@section('content')
  @include('shared.topbar')
  <div class="rixi-main">
    <div class="container">
      <div class="form-header">
        <h1>新的话题</h1>
        <p>关于日系，有什么想知道的都告诉我们吧！我们会尽快的整理出资料通知您的～</p>
      </div>
      <div class="form-panel">
        <form role="form">
          <div class="form-group">
            <label>标题</label>
            <input type="text" class="form-control" name="title" placeholder="标题">
          </div>
          <div class="form-group">
            <label>说明</label>
            <textarea class="form-control" name="description" placeholder="说明" rows="7"></textarea>
          </div>
          <button type="submit" class="btn btn-submit">提交</button>
        </form>
      </div>
    </div>
  </div>
  @include('shared.footer')
@endsection