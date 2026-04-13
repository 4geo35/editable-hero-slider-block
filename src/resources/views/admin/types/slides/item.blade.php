<div class="min-h-screen relative py-indent-double flex flex-col {{ config("editable-hero-slider-block.textPosition") === 'center' ? 'justify-center' : 'justify-end' }} w-full">
    @if ($item->recordable->image)
        @php($image = $item->recordable->image)
        <div class="absolute top-0 bottom-0 w-full z-0 overflow-hidden">
            <img src="{{ route('thumb-img', ['template' => 'original', 'filename' => $image->file_name]) }}" alt=""
                 class="h-full w-full object-cover object-top relative z-0 brightness-50 blur-[.05rem]">
        </div>

        <div class="relative z-10 text-white">
            <div class="w-full lg:w-2/3 mx-indent">
                @if ($item->title)
                    <div class="text-3xl sm:text-5xl mb-indent-sm font-semibold">{{ $item->title }}</div>
                @endif
                @if ($item->recordable->description)
                    <div class="mb-indent-lg block">
                        <div class="prose prose-lg prose-p:leading-6 !text-white max-w-none">
                            {!! $item->recordable->markdown !!}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
