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
                    <span class="fui-heart icon-padding-right text-danger"></span> 7
                </span>
                <span class="span-padding-right">
                    <span class="fui-chat icon-padding-right text-info"></span> 7
                </span>
                <span class="pull-right">
                    <a href="{{ route('topic.edit', $topic) }}" type="button">编辑</a>
                </span>
            </div>
        </div>
    @empty
        <p>还没有话题哦～</p>
    @endforelse
</div>