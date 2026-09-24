<?php
require_once __DIR__ . '/config.php';

$current = 'services';
$seo = [
    'title'       => 'Our Services | Accounting, Tax, Audit & Compliance | Jolly & Co.',
    'description' => 'Explore services from Jolly & Co.: accounting & bookkeeping, income tax & GST, audit & assurance, business advisory, ROC/TDS compliance and company registration in New Delhi.',
    'keywords'    => 'accounting services Delhi, GST registration, ITR filing, audit services, TDS return, company registration, LLP registration, startup India',
    'path'        => 'services.php',
];
$pageHeading = 'Our Services';

$faqs = [
    ['Which documents do I need to start?',            'It depends on the service. Message us on WhatsApp or use the contact page and we will send you a short checklist for your specific requirement.'],
    ['Do you work with individuals as well as businesses?', 'Yes. We handle income tax returns and planning for individuals and professionals, as well as accounting, GST and compliance for businesses of all sizes.'],
    ['Can you help with notices from the tax department?', 'Yes. Share the notice with us and we will review it, prepare the reply and guide you on the next steps before the due date.'],
    ['How do I get a fee quote?',                     'Tell us what you need through the contact form. It opens WhatsApp with your details so we can respond with a clear quote.'],
];
ob_start();
?>

<section class="services-page section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" style="--tagline-bg: #ECF5F4">
                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="" class="sec-title__shape">
                <p class="sec-title__tagline">What We Do</p>
            </div>
            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">Services Tailored to Your Needs</h2>
        </div>
        <div class="row gutter-y-30">
            <?php foreach ($services as $i => $s): ?>
            <div class="col-xl-4 col-md-6" id="<?= e($s['slug']) ?>" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="<?= 100 * (($i % 3) + 1) ?>">
                <div class="service-card">
                    <div class="service-card__image"><img src="<?= e($s['image']) ?>" alt="<?= e($s['title']) ?>" loading="lazy"></div>
                    <div class="service-card__body">
                        <span class="service-card__icon"><i class="<?= e($s['icon']) ?>"></i></span>
                        <h3 class="service-card__title"><?= e($s['title']) ?></h3>
                        <p class="service-card__text"><?= e($s['short']) ?></p>
                        <ul class="service-card__list list-unstyled">
                            <?php foreach ($s['points'] as $p): ?><li><i class="fas fa-check"></i> <?= e($p) ?></li><?php endforeach; ?>
                        </ul>
                        <a class="service-card__link" target="_blank" rel="noopener" href="<?= e(whatsapp_link('Hello ' . $site['name'] . ', I would like to enquire about ' . $s['title'] . '.')) ?>">
                            Enquire on WhatsApp <i class="icon-arrow-right-up"></i>
                        </a>
                    </div>
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
                <p class="sec-title__tagline">FAQs</p>
            </div>
            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">Frequently Asked Questions</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="accordion faq-list" id="faqAccordion">
                    <?php foreach ($faqs as $i => $f): ?>
                    <div class="accordion-item">
                        <h3 class="accordion-header">
                            <button class="accordion-button <?= $i ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>" aria-expanded="<?= $i ? 'false' : 'true' ?>"><?= e($f[0]) ?></button>
                        </h3>
                        <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i ? '' : 'show' ?>" data-bs-parent="#faqAccordion">
                            <div class="accordion-body"><?= e($f[1]) ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/includes/cta.php'; ?>
<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
?>
