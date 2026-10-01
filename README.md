### Установка

Добавить в `tailwind.admin.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-hero-slider-block/src/resources/views/livewire/admin/**/*.blade.php",
    "./vendor/4geo35/editable-hero-slider-block/src/resources/views/admin/**/*.blade.php",

Добавить в `tailwind.config.js`, созданный в пакете `tailwindcss-theme`.

    "./vendor/4geo35/editable-hero-slider-block/src/resources/views/components/**/*.blade.php",
    "./vendor/4geo35/editable-hero-slider-block/src/resources/views/web/**/*.blade.php",

Установить слайдер `npm install swiper`

Добавить в `app.js`:

    import Swiper from "swiper/bundle"
    import "swiper/css/bundle"
    window.Swiper = Swiper

#### Views

Сокращение для представлений: `ehrsb`

#### Config

Название файла: `editable-hero-slider-block`  
Название типа блока: `heroSlides`

- `textPosition` => `center`: позиция текста по вертикали `center` или `bottom`
