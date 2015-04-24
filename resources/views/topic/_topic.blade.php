<div class="topic-panel">
    <div class="topic-title">
        <h1>{{ $topic->title }}</h1>
    </div>
    <div class="topic-description">
        <h2>{!! nl2br(e($topic->description)) !!}</h2>
    </div>
    <div class="topic-meta">
        <span class="span-padding-right">
            @include('topic._favorite')
        </span>
        <span class="span-padding-right">
            <i class="fa fa-comments icon-padding-right text-info"></i> {{ $topic->comments->count() }}
        </span>
        <span class="span-padding-right">
            <img src="/images/avatar/{{ $topic->author->getAvatarName() }}" />
            <span class="text-primary">{{ $topic->author->name }}</span>
        </span>
    </div>

    <div class="topic-matome">
        <div class="block-header">
            <h2>整理帖</h2>
        </div>
        @include('topic.list._matome')
    </div>

    <div class="topic-comment">
        <div class="block-header">
            <h2>所有评论</h2>
        </div>
        @include('comments._comments')
    </div>
</div>
