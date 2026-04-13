@push("styles")
    <style>
        #swiperBlockHeroSlider-{{ $block->id }} .swiper-pagination {
            width: auto;
            left: auto;
            right: 0;
            bottom: var(--indent-double);
        }
        #swiperBlockHeroSlider-{{ $block->id }} .swiper-pagination-bullet.swiper-pagination-bullet-active {
            background: rgba(var(--color-primary), 1);
        }
        #swiperBlockHeroSlider-{{ $block->id }} .swiper-pagination-bullet {
            background: white;
            opacity: 1;
        }
    </style>
@endpush
