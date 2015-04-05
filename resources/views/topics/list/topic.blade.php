@forelse($topics as $topic)
    <div class="topic">
        <div class="topic-title">
            <a href="{{ route('topics.show', $topic) }}">{{ $topic->title }}</a>
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
            <span class="pull-right" style="font-size:15px">
              By <a href="">{{ $topic->author->name }}</a>
            </span>
        </div>
    </div>
@empty
    <p>No topics</p>
@endforelse