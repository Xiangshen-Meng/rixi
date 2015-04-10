<div class="topic-panel">
    <div class="topic-title">
        <h1>{{ $topic->title }}</h1>
    </div>
    <div class="topic-description">
        <p>{{ $topic->description }}</p>
    </div>
    <div class="topic-meta">
        <span class="span-padding-right">
            @include('topic._favorite')
        </span>
        <span class="span-padding-right">
            <span class="fui-chat icon-padding-right text-info"></span> 7
        </span>
        <span class="span-padding-right">
            <span class="fui-user icon-padding-right"></span> <a href="">{{ $topic->author->name }}</a>
        </span>
    </div>

    <div class="topic-comment">
    </div>
</div>
