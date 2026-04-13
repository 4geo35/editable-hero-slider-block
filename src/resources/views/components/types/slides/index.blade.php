@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @if ($block->render_title)
        <div class="container">
            <x-tt::h2 class="mb-indent">{{ $block->render_title }}</x-tt::h2>
        </div>
    @endif
    <div id="swiperBlockHeroSlider-{{ $block->id }}"
         class="swiper overflow-hidden mb-indent mx-auto">
        <div class="swiper-wrapper">
            @foreach($block->items as $index => $item)
                <x-ehrsb::types.slides.item :$item />
            @endforeach
        </div>
        <div class="container relative">
            <div class="swiper-pagination"></div>
        </div>
    </div>
    @include("ehrsb::web.types.slides.includes.swiper-script")
    @include("ehrsb::web.types.slides.includes.swiper-styles")
@endif
