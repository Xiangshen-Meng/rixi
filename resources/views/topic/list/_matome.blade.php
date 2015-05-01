<div class="matome-list">
    @forelse ( $matomes as $matome)
        <div class="matome-element">
            <h3>
                <a href="{{ route('matome.show', $matome) }}">
                    {{ $matome->title }}
                </a>
                <i class="fa fa-angle-double-right"></i>
            </h3>
            <p>
                {{ str_limit($matome->noFormatContent(), 30) }}
            </p>
        </div>
    @empty
        <p>赶快来写第一个整理帖吧！</p>
    @endforelse
</div>