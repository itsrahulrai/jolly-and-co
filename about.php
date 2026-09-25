<?php
require_once __DIR__ . '/config.php';

$current = 'about';
$seo = [
    'title'       => 'About Us | Jolly & Co. Chartered Accountants, Kalkaji New Delhi',
    'description' => 'Learn about Jolly & Co., a chartered accountancy firm in Kalkaji, New Delhi providing accounting, tax, audit, compliance and business advisory services with a client-first approach.',
    'keywords'    => 'about Jolly & Co, chartered accountants Kalkaji, CA firm Delhi, accounting firm New Delhi',
    'path'        => 'about.php',
];
$pageHeading = 'About Us';
ob_start();

$values = [
    ['icon' => 'icon-agreement',            'title' => 'Integrity First',      'text' => 'Honest, ethical advice and complete confidentiality for every client and every file.'],
    ['icon' => 'icon-stats-2',              'title' => 'Accuracy & Detail',    'text' => 'Careful review at every stage so your books, returns and reports are right the first time.'],
    ['icon' => 'icon-support',              'title' => 'Timely Delivery',      'text' => 'Deadlines matter in tax and compliance. We plan ahead and keep you informed well before due dates.'],
    ['icon' => 'icon-financial-consultant', 'title' => 'Personal Attention',   'text' => 'You deal directly with the people handling your work, in plain language, not jargon.'],
];
$steps = [
    ['Understand',  'We listen to your business, goals and current position before recommending anything.'],
    ['Plan',        'We agree on scope, timelines and documents needed so there are no surprises.'],
    ['Execute',     'Our team prepares, reviews and files with attention to accuracy and compliance.'],
    ['Support',     'We stay available for follow-ups, notices and questions throughout the year.'],
];
?>

<section class="about-three section-space">
    <div class="container">
        <div class="row gutter-y-40 align-items-center">
            <div class="col-xl-4 d-none d-xl-block" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                <div class="about-three__image">
                    <div class="about-three__image__one"><img src="assets/images/about/about-3-1.jpg" alt="Jolly &amp; Co. team"></div>
                    <img src="assets/images/shapes/about-shape-3-1.png" alt="" class="about-three__image__shape">
                </div>
            </div>
            <div class="col-xl-8">
                <div class="about-three__content">
                    <div class="about-three__content__left">
                        <div class="sec-title">
                            <div class="sec-title__top" style="--tagline-bg: #ECF5F4">
                                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="" class="sec-title__shape">
                                <p class="sec-title__tagline">Who We Are</p>
                            </div>
                            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">A Chartered Accountancy Practice Built on Trust.</h2>
                        </div>
                        <p class="about-three__text"><?= e($site['full_name']) ?> is located in <?= e($site['locality']) ?>, New Delhi. We support individuals, professionals, startups and established businesses with accounting, taxation, audit, compliance and advisory services.</p>
                        <p class="about-three__text">Our aim is simple: take the stress out of finance and compliance so you can concentrate on your work. We keep our advice practical, our communication clear and our fees transparent.</p>
                        <div class="about-three__button">
                            <a href="contact.php" class="findox-btn">
                                <span class="findox-btn__text">Talk to Us</span>
                                <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                            </a>
                        </div>
                    </div>
                    <div class="about-three__content__image">
                        <img src="assets/images/about/about-3-2.jpg" alt="Client meeting" class="about-three__content__img">
                        <img src="assets/images/shapes/about-badge-3-1.png" alt="" class="about-three__content__badge">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="info-section section-space-b">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" style="--tagline-bg: #FFFFFF">
                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="" class="sec-title__shape">
                <p class="sec-title__tagline">Why Choose Us</p>
            </div>
            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">The Values We Work By</h2>
        </div>
        <div class="row gutter-y-30">
            <?php foreach ($values as $i => $v): ?>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="<?= 100 * ($i + 1) ?>">
                <div class="info-card">
                    <span class="info-card__icon"><i class="<?= e($v['icon']) ?>"></i></span>
                    <h3 class="info-card__title"><?= e($v['title']) ?></h3>
                    <p class="info-card__text"><?= e($v['text']) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="info-section info-section--alt section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" style="--tagline-bg: #FFFFFF">
                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="" class="sec-title__shape">
                <p class="sec-title__tagline">How We Work</p>
            </div>
            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">A Simple, Clear Process</h2>
        </div>
        <div class="row gutter-y-30">
            <?php foreach ($steps as $i => $st): ?>
            <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="<?= 100 * ($i + 1) ?>">
                <div class="info-card info-card--step">
                    <span class="info-card__number"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
                    <h3 class="info-card__title"><?= e($st[0]) ?></h3>
                    <p class="info-card__text"><?= e($st[1]) ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
?>
