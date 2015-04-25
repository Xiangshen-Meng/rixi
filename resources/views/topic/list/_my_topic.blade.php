<div class="topic-list">
    @forelse($topics as $topic)
        <div class="topic">
            <div class="topic-title">
                <a href="{{ route('topic.show', $topic) }}">{{ $topic->title }}</a>
            </div>
            <div class="topic-description">
                {{ str_limit($topic->description, 30) }}
            </div>
            <div class="topic-meta">
                <span class="span-padding-right">
                    <i class="fa fa-heart icon-padding-right text-danger"></i> {{ $topic->countSupporters() }}
                </span>
                <span class="span-padding-right">
                    <i class="fa fa-comments icon-padding-right text-info"></i> {{ $topic->comments->count() }}
                </span>
                <span class="pull-right">
                    <a href="{{ route('topic.edit', $topic) }}" type="button" style="font-size: 15px">编辑</a>
                </span>
            </div>
        </div>
    @empty
        <p>还没有话题哦～</p>
    @endforelse
</div>