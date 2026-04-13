@props(["item"])
@if ($item->recordable->image)
    @php
        $block = $item->block;
        $image = $item->recordable->image;
        $textPosition = config("editable-hero-slider-block.textPosition");
    @endphp

    <div class="swiper-slide">
        <div class="min-h-screen relative py-indent-double flex flex-col {{ $textPosition === 'center' ? 'justify-center' : 'justify-end' }} w-full">
            @include("ehrsb::web.types.slides.includes.bg-image")
            <div class="container relative z-10 text-white">
                <div class="w-full lg:w-2/3">
                    @if ($item->title)
                        <x-tt::h2 class="mb-indent-sm">{{ $item->title }}</x-tt::h2>
                    @endif
                    @if ($item->recordable->description)
                        <div class="mb-indent-lg block">
                            <div class="prose prose-lg prose-p:leading-6 !text-white max-w-none">
                                {!! $item->recordable->markdown !!}
                            </div>
                        </div>
                    @endif
                    @includeIf("ebtns::web.render-buttons", ["blockItem" => $item])
                </div>
            </div>
        </div>
    </div>
@endif
