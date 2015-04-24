@if (Auth::check())
    @if (Auth::user()->hasVote($comment->id))
        <i class="fa fa-thumbs-o-up icon-padding-right text-danger"></i> {{ $comment->countVoters() }}
    @else
        <a href="" class="js-vote-button" id="vote-button-{{ $comment->id }}"
           data-comment-id="{{ $comment->id }}" data-token="{{ csrf_token() }}">
            <i class="fa fa-thumbs-o-up icon-padding-right"></i>
        </a>
        <span id="votes-num-{{ $comment->id }}">
            {{ $comment->countVoters() }}
        </span>
    @endif
@else
    <i class="fa fa-thumbs-o-up icon-padding-right text-danger"></i> {{ $comment->countVoters() }}
@endif
