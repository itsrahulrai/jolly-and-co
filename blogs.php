<?php
require_once __DIR__ . '/config.php';

$current = 'blogs';
$seo = [
    'title'       => 'Tax & Accounting Blogs | Insights & Updates | Jolly & Co.',
    'description' => 'Stay updated with the latest news, guides, and tax insights on GST, Income Tax filing, Corporate Audit, and Business Compliance from Jolly & Co. Chartered Accountants in Delhi.',
    'keywords'    => 'tax blog Delhi, GST updates, ITR filing guide, CA blog India, accounting advice, corporate compliance insights, business tax planning',
    'path'        => 'blogs.php',
];
$pageHeading = 'Blogs & Insights';

$posts = [
    [
        'title'    => 'Key GST Compliance Deadlines & Updates for Indian Businesses',
        'category' => 'GST & Indirect Tax',
        'date'     => 'September 15, 2026',
        'image'    => 'assets/images/blog/blog-1-1.jpg',
        'excerpt'  => 'A complete breakdown of monthly and quarterly GST return filing dates, recent notification updates, and common pitfalls to avoid.',
    ],
    [
        'title'    => 'Income Tax Return (ITR) Filing Guide for Salaried & Professionals',
        'category' => 'Income Tax',
        'date'     => 'August 28, 2026',
        'image'    => 'assets/images/blog/blog-1-2.jpg',
        'excerpt'  => 'Everything you need to know about choosing between the old vs new tax regime, claiming deductions under 80C/80D, and timely filing.',
    ],
    [
        'title'    => 'Essential Statutory Compliance Checklist for Early-Stage Startups',
        'category' => 'Startup Advisory',
        'date'     => 'August 12, 2026',
        'image'    => 'assets/images/blog/blog-1-3.jpg',
        'excerpt'  => 'From ROC annual filings and board meetings to TDS deduction and accounting setup — here is what founders must keep in order.',
    ],
    [
        'title'    => 'Understanding Statutory Audit: What Every Business Owner Should Expect',
        'category' => 'Audit & Assurance',
        'date'     => 'July 24, 2026',
        'image'    => 'assets/images/blog/blog-1-4.jpg',
        'excerpt'  => 'Demystifying the audit process, preparation of financial statements, internal financial controls, and working smoothly with your auditor.',
    ],
    [
        'title'    => 'Best Practices for Clean Bookkeeping and Cash Flow Management',
        'category' => 'Accounting',
        'date'     => 'July 10, 2026',
        'image'    => 'assets/images/blog/blog-1-5.jpg',
        'excerpt'  => 'How accurate periodic bookkeeping protects your business margins, streamlines year-end taxation, and helps secure bank financing.',
    ],
    [
        'title'    => 'TDS Provisions & Quarterly Return Filing: Rules for Deductors',
        'category' => 'Tax Compliance',
        'date'     => 'June 22, 2026',
        'image'    => 'assets/images/blog/blog-1-6.jpg',
        'excerpt'  => 'An overview of TDS rates on contractor payments, professional fees, rent, and the penalties for late deduction or deposition.',
    ],
];

ob_start();
?>

<section class="blog-one blog-one--page section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" style="--tagline-bg: #ECF5F4">
                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="" class="sec-title__shape">
                <p class="sec-title__tagline">Articles & Advice</p>
            </div>
            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">Latest Updates & Expert Insights</h2>
        </div>

        <div class="row gutter-y-30">
            <?php foreach ($posts as $i => $post): ?>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1300" data-aos-delay="<?= 100 * (($i % 3) + 1) ?>">
                    <div class="blog-card">
                        <div class="blog-card__image">
                            <img src="<?= e($post['image']) ?>" alt="<?= e($post['title']) ?>" loading="lazy">
                            <a href="<?= e(whatsapp_link('Hello ' . $site['name'] . ', I read your blog post on "' . $post['title'] . '" and have a question.')) ?>" target="_blank" rel="noopener" class="blog-card__image__link" aria-label="<?= e($post['title']) ?>"></a>
                        </div>
                        <div class="blog-card__content">
                            <ul class="blog-card__meta list-unstyled">
                                <li>
                                    <span class="blog-card__meta__icon"><i class="far fa-folder-open"></i></span>
                                    <span><?= e($post['category']) ?></span>
                                </li>
                                <li>
                                    <span class="blog-card__meta__icon"><i class="far fa-calendar-alt"></i></span>
                                    <span><?= e($post['date']) ?></span>
                                </li>
                            </ul>
                            <h3 class="blog-card__title">
                                <a href="<?= e(whatsapp_link('Hello ' . $site['name'] . ', I would like to consult regarding "' . $post['title'] . '".')) ?>" target="_blank" rel="noopener">
                                    <?= e($post['title']) ?>
                                </a>
                            </h3>
                            <p style="color: #636363; font-size: 15px; line-height: 1.6; margin-bottom: 20px;">
                                <?= e($post['excerpt']) ?>
                            </p>
                            <a href="<?= e(whatsapp_link('Hello ' . $site['name'] . ', I would like to consult regarding "' . $post['title'] . '".')) ?>" target="_blank" rel="noopener" class="findox-btn findox-btn--base">
                                <span class="findox-btn__text">Read More & Enquire</span>
                                <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Bottom CTA Band -->
<section class="section-space pt-0">
    <div class="container">
        <div class="site-cta__box">
            <div>
                <h3 class="site-cta__title">Have a specific tax query or compliance question?</h3>
                <div class="site-cta__text">
                    <p>Speak directly with our chartered accountants in New Delhi. Fast responses via WhatsApp or call.</p>
                </div>
            </div>
            <div class="site-cta__actions">
                <a href="<?= e(whatsapp_link('Hello ' . $site['name'] . ', I have a question regarding taxation and compliance.')) ?>" target="_blank" rel="noopener" class="findox-btn">
                    <span class="findox-btn__text"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</span>
                </a>
                <a href="contact.php" class="findox-btn findox-btn--white">
                    <span class="findox-btn__text">Contact Us</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
