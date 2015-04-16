<div class="topic-list">
    @forelse($topics as $topic)
        <div class="topic">
            <div class="topic-title">
                <a href="{{ route('topic.show', $topic) }}">{{ $topic->title }}</a>
            </div>
            <div class="topic-description">
                {{ $topic->description }}
            </div>
            <div class="topic-meta">
                <span class="span-padding-right">
                    @include('topic._favorite')
                </span>
                <span class="span-padding-right">
                    <i class="fa fa-comments icon-padding-right text-info"></i> {{ $topic->comments->count() }}
                </span>
                <span class="span-padding-right" style="font-size:15px">
                    <img src="/images/avatar/{{ $topic->author->getAvatarName() }}" />
                    <span class="text-primary">{{ $topic->author->name }}</span>
                </span>
            </div>
        </div>
    @empty
        <p>还没有话题哦～</p>
    @endforelse
</div>