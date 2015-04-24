<div class="matome-panel">
    <div class="matome-title">
        <h1>
            {{ $matome->title }}
            <span>
                <a href="{{ route('topic.show', $topic) }}"><i class="fa fa-reply"></i> 回到话题</a>
            </span>
        </h1>
    </div>

    <div class="matome-meta">
        <span class="span-padding-right">
            <img src="/images/avatar/{{ $matome->user->getAvatarName() }}" />
            <span class="text-primary">{{ $matome->user->name }}</span>
        </span>
        <span class="divider"></span>
        <span class="matome-time">{{ $matome->humanCreatedTime() }}</span>
    </div>

    <div class="matome-content">
        {!! html_entity_decode($matome->content) !!}
    </div>

    <div class="matome-topic">
        <h2>{{ $topic->title }}</h2>
        <h3>{!! nl2br(e($topic->description)) !!}</h3>
        <p>
            <a href="{{ route('topic.show', $topic) }}">
                <i class="fa fa-reply"></i> 回到话题
            </a>
        </p>
    </div>
</div>