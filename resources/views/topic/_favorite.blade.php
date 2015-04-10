@if ( Auth::check() && !Auth::user()->hasFavorite($topic->id) )
    <a href="" class="js-favorite-button" id="favorite-button-{{ $topic->id }}"
       data-topic-id="{{ $topic->id }}" data-token="{{ csrf_token() }}">
        <i class="fa fa-heart-o icon-padding-right text-danger"></i>
    </a>
    <span id="favorites-num-{{ $topic->id }}">
        {{ $topic->countSupporters() }}
    </span>
@else
    <i class="fa fa-heart icon-padding-right text-danger"></i> {{ $topic->countSupporters() }}
@endif