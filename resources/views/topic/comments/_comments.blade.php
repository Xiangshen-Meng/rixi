@forelse ( $comments as $comment)
    <div class="comment">
        <div class="comment-meta">
            <span><img src="/images/avatar/{{ $comment->user->getAvatarName() }}" /></span>
            <span class="text-primary">{{ $comment->user->name }}</span>
            <span class="divider"></span>
            <span class="comment-time">{{ $comment->humanCreatedTime() }}</span>
            <span class="divider"></span>
            <span class="comment-support">
                @include('topic.comments._vote')
            </span>
        </div>
        <div class="comment-content">
            {!! html_entity_decode($comment->content) !!}
        </div>
    </div>
@empty
    <p>还没有评论哦～快去抢个位置吧!</p>
@endforelse

@if (Auth::check())
    <div class="comment-form">
        {!! Form::open(['action' => 'CommentsController@store', 'class' => 'form-horizontal']) !!}
        {!! Form::hidden('topic_id', $topic->id) !!}

        <div id="rixi-editor" name="content"></div>
        @include('shared._ueditor')

        {!! Form::submit('评论', ['class' => 'btn btn-add pull-right']) !!}
        {!! Form::close() !!}
    </div>


@else
    <p style="padding-top: 20px">
        <a href="{{ url('auth/login') }}" class="btn btn-primary">
            <img src="/images/icons/rocket.png" width="40" class="icon-padding-right"/>我要去评论
        </a>
    </p>
@endif