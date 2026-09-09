<x-tt::modal.dialog wire:model="displayData">
    <x-slot name="title">{{ $itemId ? "Редактировать" : "Добавить" }} элемент</x-slot>
    <x-slot name="content">
        <form wire:submit.prevent="{{ $itemId ? 'update' : 'store' }}" class="space-y-indent-half"
              id="heroSliderBlockDataForm-{{ $block->id }}">

            <div>
                <label for="heroSliderImage-{{ $block->id }}" class="inline-block mb-2">
                    Изображение<span class="text-danger {{ $itemId ? 'hidden' : '' }}">*</span>
                </label>
                <input type="file" id="heroSliderImage-{{ $block->id }}"
                       class="form-control {{ $errors->has('image') ? 'border-danger' : '' }}"
                       wire:loading.attr="disabled"
                       wire:model.lazy="image">
                <x-tt::form.error name="image"/>
                <div class="text-info mt-2">Рекомендуется изображение минимум 1600x900</div>
            </div>

            <div>
                <label for="heroSliderTitle-{{ $block->id }}" class="inline-block mb-2">
                    Заголовок
                </label>
                <input type="text" id="heroSliderTitle-{{ $block->id }}"
                       class="form-control {{ $errors->has("title") ? "border-danger" : "" }}"
                       wire:loading.attr="disabled"
                       wire:model="title">
                <x-tt::form.error name="title"/>
            </div>

            <div>
                <label for="heroSliderDescription-{{ $block->id }}" class="flex justify-start items-center mb-2">
                    Описание
                    @include("tt::admin.description-button", ["id" => "HeroSliderDescriptionHidden{$block->id}"])
                </label>
                @include("tt::admin.description-info", ["id" => "HeroSliderDescriptionHidden{$block->id}"])
                <textarea id="heroSliderDescription-{{ $block->id }}" class="form-control !min-h-52 {{ $errors->has('description') ? 'border-danger' : '' }}"
                          rows="10"
                          wire:model.live="description">
                        {{ $description }}
                    </textarea>
                <x-tt::form.error name="description" />

                <div class="prose prose-sm mt-indent-half">
                    {!! \Illuminate\Support\Str::markdown($description) !!}
                </div>
            </div>

            <div class="flex items-center space-x-indent-half">
                <button type="button" class="btn btn-outline-dark" wire:click="closeData">
                    Отмена
                </button>
                <button type="submit" form="heroSliderBlockDataForm-{{ $block->id }}" class="btn btn-primary"
                        wire:loading.attr="disabled">
                    {{ $itemId ? "Обновить" : "Добавить" }}
                </button>
            </div>
        </form>
    </x-slot>
</x-tt::modal.dialog>
