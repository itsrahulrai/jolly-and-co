<?php
/**
 * includes/slider.php — Pure Image Hero Slider
 * 
 * Displays ONLY images in the slider with separate images for Desktop and Mobile.
 * Configurable via the $slides array below.
 */

$slides = [
    [
        'desktop' => 'assets/images/sliders/slider1.png',
        'mobile'  => 'assets/images/hero-slider/hero-slider-1-1.jpg',
        'alt'     => 'Jolly & Co. Chartered Accountants',
        'link'    => 'contact.php', // optional: link on click, or leave empty ''
    ],
    [
        'desktop' => 'assets/images/sliders/slider2.png',
        'mobile'  => 'assets/images/hero-slider/hero-slider-1-2.jpg',
        'alt'     => 'Accounting, Tax & Audit Services',
        'link'    => 'services.php',
    ]
];
?>

<section class="hero-image-slider slider">
    <div class="hero-image-slider__carousel findox-owl__carousel owl-carousel owl-theme" data-owl-options='{
        "items": 1,
        "margin": 0,
        "animateIn": "fadeIn",
        "animateOut": "fadeOut",
        "loop": true,
        "autoplay": true,
        "autoplayTimeout": 5000,
        "smartSpeed": 800,
        "nav": false,
        "dots": false
    }'>
        <?php foreach ($slides as $slide): ?>
            <div class="item hero-image-slide">
                <?php if (!empty($slide['link'])): ?>
                    <a href="<?= e($slide['link']) ?>" class="hero-image-slide__link" aria-label="<?= e($slide['alt']) ?>">
                <?php endif; ?>

                <picture class="hero-image-slide__pic">
                    <!-- Mobile Image (screens up to 767px) -->
                    <source media="(max-width: 767.98px)" srcset="<?= e($slide['mobile']) ?>">
                    <!-- Desktop Image (screens 768px and up) -->
                    <img src="<?= e($slide['desktop']) ?>" alt="<?= e($slide['alt']) ?>" class="hero-image-slide__img" loading="eager">
                </picture>

                <?php if (!empty($slide['link'])): ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>
