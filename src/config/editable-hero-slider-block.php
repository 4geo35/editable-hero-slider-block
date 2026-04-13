<?php

return [
    "availableTypes" => [
        "heroSlides" => [
            "title" => env("EDITABLE_HERO_SLIDER_TITLE", "Слайдер"),
            "admin" => "ehrsb-slides",
            "render" => "ehrsb::types.slides",
        ]
    ],
    "textPosition" => "center", // center or bottom

    // Components
    "customSlidesComponent" => null,
];
