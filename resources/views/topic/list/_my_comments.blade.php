@forelse ( $comments as $comment)
    <div class="comment">
        <div class="comment-meta">
            <span><a href="{{ route('topic.show', $comment->topic) }}">{{ $comment->topic->title }}</a></span>
            <span class="divider"></span>
            <span class="comment-time">{{ $comment->humanCreatedTime() }}</span>
        </div>
        <div class="comment-content">
            {{ $comment->content }}
        </div>
    </div>
@empty
    <p>还没有评论哦～快去抢个位置吧!</p>
@endforelse