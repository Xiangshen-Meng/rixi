<div class="matome-list">
    @forelse ( $matomes as $matome)
        <div class="matome-element">
            <h3>
                <i class="fa fa-angle-right icon-padding-right"></i>
                <a href="{{ route('matome.show', $matome) }}">
                    {{ $matome->title }}
                </a>
            </h3>
        </div>
    @empty
        <p>赶快来写第一个整理帖吧！</p>
    @endforelse
</div>