<?php

namespace GIS\EditableHeroSliderBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditableHeroSliderBlock\Livewire\Admin\Types\SlidesWire;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditableHeroSliderBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait;

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/config/editable-hero-slider-block.php", 'editable-hero-slider-block');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/resources/views", "ehrsb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-hero-slider-block.customSlidesComponent");
        Livewire::component(
            "ehrsb-slides",
            $component ?? SlidesWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $ehrsb = app()->config["editable-hero-slider-block"];
        $this->expandBlocks($ehrsb);
    }
}
