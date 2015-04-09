<div class="topic-panel">
    <div class="topic-title">
        <h1>{{ $topic->title }}<h1>
    </div>
    <div class="topic-description">
        <p>{{ $topic->description }}</p>
    </div>
    <div class="topic-author">
        <p></p>
    </div>
    <div class="topic-meta">
        <span class="span-padding-right">
            @if ( Auth::check() && !Auth::user()->hasFavorite($topic->id))
                <span ng-hide="favorited">
                    <a href="" ng-click="topic.favorite({{ $topic->id }}, '{{ csrf_token() }}')">
                        <i class="fa fa-heart-o icon-padding-right text-danger"></i>
                    </a> {{ $topic->countSupporters() }}
                </span>
                <span ng-show="favorited" ng-cloak class="ng-cloak">
                    <i class="fa fa-heart icon-padding-right text-danger"></i>
                    <span><% count %></span>
                </span>
            @else
                <i class="fa fa-heart icon-padding-right text-danger"></i> {{ $topic->countSupporters() }}
            @endif
        </span>
        <span class="span-padding-right">
            <span class="fui-chat icon-padding-right text-info"></span> 7
        </span>
        <span class="span-padding-right">
            <span class="fui-user icon-padding-right"></span> <a href="">{{ $topic->author->name }}</a>
        </span>
    </div>
</div>
