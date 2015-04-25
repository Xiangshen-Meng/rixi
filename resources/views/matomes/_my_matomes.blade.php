@forelse ( $matomes as $matome)
    <div class="matome">
        <div class="matome-meta">
            <span><a href="{{ route('matome.show', $matome) }}">{{ $matome->title }}</a></span>
            <span class="divider"></span>
            <span class="matome-time">{{ $matome->humanCreatedTime() }}</span>
            <span class="pull-right">
                <a href="{{ route('matome.edit', $matome) }}" type="button" style="font-size: 15px">编辑</a>
            </span>
        </div>
        <div class="matome-content">
            {{ str_limit($matome->noFormatContent(), 30) }}
        </div>
    </div>
@empty
    <p>还没有评论哦～快去抢个位置吧!</p>
@endforelse