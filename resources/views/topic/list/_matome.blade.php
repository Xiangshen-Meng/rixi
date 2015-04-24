<div class="matome-list">
    @forelse ( $matomes as $matome)
        <div class="matome">
            <h3>
                <a href="{{ route('matome.show', $matome) }}">
                    <i class="fa fa-bookmark-o icon-padding-right"></i>{{ $matome->title }}
                </a>
            </h3>
        </div>
    @empty
        <p>等待第一个整理帖的出现！</p>
    @endforelse
</div>