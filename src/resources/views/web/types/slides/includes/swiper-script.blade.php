@push("scripts")
    <script type="application/javascript">
        (function () {
            document.addEventListener("DOMContentLoaded", function () {
                const sliderElement = document.getElementById("swiperBlockHeroSlider-{{ $block->id }}")
                if (sliderElement) { initBlockHeroSliderSliders{{ $block->id }}(sliderElement); }
            })
        })()

        function initBlockHeroSliderSliders{{ $block->id }}(sliderElement) {
            let paginationElement = sliderElement.querySelector(".swiper-pagination")
            let swiper = new Swiper(sliderElement, {
                loop: true,
                simulateTouch: true,
                spaceBetween: 24,
                slidesPerView: "auto",
                pagination: {
                    el: paginationElement,
                    clickable: true,
                }
            })
        }
    </script>
@endpush
