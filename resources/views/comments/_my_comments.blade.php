@forelse ( $comments as $comment)
    <div class="comment">
        <div class="comment-meta">
            <span><a href="{{ route('topic.show', $comment->topic) }}">{{ $comment->topic->title }}</a></span>
            <span class="divider"></span>
            <span class="comment-time">{{ $comment->humanCreatedTime() }}</span>
            <span class="pull-right">
                {!! Form::open(['route' => ['comment.destroy', $comment], 'method' => 'delete']) !!}
                    <button type="submit" class="btn btn-danger btn-xs">删除</button>
                {!! Form::close() !!}
            </span>
        </div>
        <div class="comment-content">
            {{ str_limit($comment->noFormatContent(), 30) }}
        </div>
    </div>
@empty
    <p>还没有评论哦～快去抢个位置吧!</p>
@endforelse