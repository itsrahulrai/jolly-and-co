<?php
require_once __DIR__ . '/config.php';

$current = 'home';
$seo = [
    'title'       => 'Jolly & Co. Chartered Accountants | Accounting, Tax & Audit in New Delhi',
    'description' => 'Jolly & Co. is a chartered accountancy firm in Kalkaji, New Delhi. Get help with bookkeeping, income tax & GST, audit, compliance and company registration.',
    'keywords'    => 'chartered accountant Kalkaji, CA firm New Delhi, GST filing Delhi, income tax return, audit, company registration Delhi',
    'path'        => 'index.php',
];
ob_start();
include __DIR__ . '/includes/slider.php';
?>


<section class="about-three section-space">
    <div class="container">
        <div class="row gutter-y-40 align-items-center">
            <div class="col-xl-4 d-none d-xl-block" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                <div class="about-three__image">
                    <div class="about-three__image__one">
                        <img src="assets/images/about/about-3-1.jpg" alt="Jolly &amp; Co. team at work">
                    </div>
                    <img src="assets/images/shapes/about-shape-3-1.png" alt="" class="about-three__image__shape">
                </div>
            </div>
            <div class="col-xl-8">
                <div class="about-three__content">
                    <div class="about-three__content__left">
                        <div class="sec-title">
                            <div class="sec-title__top" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                <span class="sec-title__dot"></span>
                                <p class="sec-title__tagline">About <?= e($site['name']) ?></p>
                            </div>
                            <h2 class="sec-title__title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100" style="--title-color: #082e54">Your Trusted <span class="sec-title__highlight">Chartered Accountants</span> in Delhi.</h2>
                        </div>
                        <p class="about-three__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Based in Kalkaji, New Delhi, <?= e($site['full_name']) ?> helps individuals, professionals and businesses keep their finances accurate, compliant and tax-efficient. We combine sound technical knowledge with clear, timely communication.</p>
                        <div class="about-three__item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                            <span class="about-three__item__icon"><i class="icon-financial-consultant"></i></span>
                            <h4 class="about-three__item__title">Accounting, Tax, Audit &amp; Compliance</h4>
                        </div>
                        <p class="about-three__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Whether you are filing a return, closing your books, setting up a new company or facing a notice, you get a single point of contact and practical advice you can act on.</p>
                        <div class="about-three__button" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                            <a href="about.php" class="findox-btn">
                                <span class="findox-btn__text">About More</span>
                                <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                            </a>
                        </div>
                    </div>
                    <div class="about-three__content__image" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        <img src="assets/images/about/about-3-2.jpg" alt="Client consultation" class="about-three__content__img">
                        <img src="assets/images/shapes/about-badge-3-1.png" alt="" class="about-three__content__badge">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features-three section-space-b">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <div class="features-three__item">
                    <div class="features-three__bg" style="background-image: url(assets/images/resources/features-3-1.jpg);"></div>
                    <div class="features-three__content">
                        <div class="features-three__top">
                            <span class="features-three__icon"><i class="icon-stats-2"></i></span>
                            <h4 class="features-three__title"><a href="service-taxation.php">Income Tax &amp; GST Made Simple</a></h4>
                        </div>
                        <p class="features-three__text">On-time return filing, registrations, notice replies and smart tax planning for individuals, firms and companies.</p>
                        <a href="service-taxation.php" class="findox-btn findox-btn--white">
                            <span class="findox-btn__text">Read More</span>
                            <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                        </a>
                    </div>
                    <img src="assets/images/shapes/features-shape-3-1.png" alt="" class="features-three__shape">
                    <img src="assets/images/shapes/features-shape-3-1-hover.png" alt="" class="features-three__shape features-three__shape--hover">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                <div class="features-three__item">
                    <div class="features-three__bg" style="background-image: url(assets/images/resources/features-3-2.jpg);"></div>
                    <div class="features-three__content">
                        <div class="features-three__top">
                            <span class="features-three__icon"><i class="icon-approach"></i></span>
                            <h4 class="features-three__title"><a href="service-business-advisory.php">Business Advisory &amp; Planning</a></h4>
                        </div>
                        <p class="features-three__text">Structuring, budgeting, cash-flow planning and loan documentation to help your business grow with confidence.</p>
                        <a href="service-business-advisory.php" class="findox-btn findox-btn--white">
                            <span class="findox-btn__text">Read More</span>
                            <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                        </a>
                    </div>
                    <img src="assets/images/shapes/features-shape-3-1.png" alt="" class="features-three__shape">
                    <img src="assets/images/shapes/features-shape-3-1-hover.png" alt="" class="features-three__shape features-three__shape--hover">
                </div>
            </div>
        </div>
    </div>
</section>




<section class="services-one section-space">
    <div class="container">
        <div class="sec-title sec-title--center">
            <div class="sec-title__top" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <span class="sec-title__dot"></span>
                <p class="sec-title__tagline">Our Services</p>
            </div>
            <h2 class="sec-title__title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100" style="--title-color: #082e54">
               Smart <span class="sec-title__highlight">Financial Solutions</span> for Your Business
            </h2>
        </div>

        <div class="row gutter-y-30">
            <?php foreach ($services as $i => $s): 
                $svcUrl = !empty($s['url']) ? $s['url'] : ('service-' . $s['slug'] . '.php');
            ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="<?= 100 * (($i % 3) + 1) ?>">
                <div class="service-card">
                    <div class="service-card__bg">
                        <div class="service-card__bg__main" style="background-image: url(<?= e($s['image']) ?>)"></div>
                    </div>
                    <div class="service-card__content">
                        <div class="service-card__tagline">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="11.5" y="3.01463" width="12" height="12" transform="rotate(45 11.5 3.01463)" />
                            </svg>
                            <p class="service-card__tagline__text">Chartered Accountancy</p>
                        </div>
                        <h3 class="service-card__title"><a href="<?= e($svcUrl) ?>"><?= e($s['title']) ?></a></h3>
                        <p class="service-card__text"><?= e($s['short']) ?></p>
                        <div class="service-card__bottom">
                            <span class="service-card__icon"><i class="<?= e($s['icon']) ?>"></i></span>
                            <h4 class="service-card__number"></h4>
                        </div>
                        <a href="<?= e($svcUrl) ?>" class="service-card__btn"><i class="icon-right-2"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="testimonials-one section-space">
    <div class="container">
        <div class="sec-title sec-title--center testimonials-sec-title">
            <div class="testimonials-sec-title__badge" data-aos="fade-up" data-aos-duration="1000">
                <span class="testimonials-sec-title__dot"></span>
                <span class="testimonials-sec-title__tagline">Client Success Stories</span>
            </div>
            <h2 class="testimonials-sec-title__heading" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                What Our Clients Say <span class="testimonials-sec-title__highlight">About Us</span>
            </h2>
            <p class="testimonials-sec-title__sub" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                Read what business owners have to say about their experience with Jolly &amp; Co.
            </p>
        </div>

        <div class="testimonials-one__wrapper" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            <div class="testimonials-one__carousel findox-owl__carousel owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 30,
                "autoplay": true,
                "loop": true,
                "smartSpeed": 700,
                "nav": true,
                "dots": true,
                "navText": ["<i class=\"fas fa-chevron-left\"></i>","<i class=\"fas fa-chevron-right\"></i>"]
            }'>

                <!-- Slide 1: Pooja Agarwal (Exact match with reference mockup) -->
                <div class="testimonials-card__item">
                    <!-- Left: Client Profile Card -->
                    <div class="testimonials-card__profile">
                        <div class="testimonials-card__avatar-box">
                            <img src="assets/images/team/team-2-1.jpg" alt="Pooja Agarwal" class="testimonials-card__avatar-img">
                            <span class="testimonials-card__avatar-check"><i class="fas fa-check"></i></span>
                            <span class="testimonials-card__verified-badge"><i class="fas fa-check-circle"></i> Verified Client</span>
                        </div>
                        <h4 class="testimonials-card__name">Pooja Agarwal</h4>
                        <p class="testimonials-card__role">Co-Founder, GreenRoots Retail</p>
                        <p class="testimonials-card__location"><i class="fas fa-map-marker-alt"></i> Kalkaji, New Delhi</p>
                        <div class="testimonials-card__service-badge">
                            <i class="fas fa-rocket"></i> Startup Advisory &amp; GST
                        </div>
                    </div>

                    <!-- Right: Testimonial Content & Feature Metrics -->
                    <div class="testimonials-card__body">
                        <!-- Top Category Pill -->
                        <div class="testimonials-card__category">
                            <span class="testimonials-card__category-icon"><i class="fas fa-chart-bar"></i></span>
                            <span>Startup Financial Advisory</span>
                        </div>

                        <!-- Quote with Large Green Quotes -->
                        <div class="testimonials-card__quote-wrap">
                            <span class="testimonials-card__quote-mark testimonials-card__quote-mark--left">“</span>
                            <p class="testimonials-card__quote-text">
                                As a fast-growing startup, managing bookkeeping, monthly TDS, and GST returns was daunting. The team at Jolly &amp; Co. took complete ownership of our accounts. Their expertise in <mark class="testimonials-card__highlight">startup financial advisory</mark> and direct access to senior partners made all the difference.
                            </p>
                            <span class="testimonials-card__quote-mark testimonials-card__quote-mark--right">”</span>
                        </div>
                    </div>
                </div>

                <!-- Slide 2: Rajesh Sharma -->
                <div class="testimonials-card__item">
                    <!-- Left: Client Profile Card -->
                    <div class="testimonials-card__profile">
                        <div class="testimonials-card__avatar-box">
                            <img src="assets/images/team/team-2-2.jpg" alt="Rajesh Sharma" class="testimonials-card__avatar-img">
                            <span class="testimonials-card__avatar-check"><i class="fas fa-check"></i></span>
                            <span class="testimonials-card__verified-badge"><i class="fas fa-check-circle"></i> Verified Client</span>
                        </div>
                        <h4 class="testimonials-card__name">Rajesh Sharma</h4>
                        <p class="testimonials-card__role">Managing Director, Apex Logistics</p>
                        <p class="testimonials-card__location"><i class="fas fa-map-marker-alt"></i> Okhla Phase-III, New Delhi</p>
                        <div class="testimonials-card__service-badge">
                            <i class="fas fa-shield-alt"></i> Corporate Tax &amp; Audit
                        </div>
                    </div>

                    <!-- Right: Testimonial Content & Feature Metrics -->
                    <div class="testimonials-card__body">
                        <!-- Top Category Pill -->
                        <div class="testimonials-card__category">
                            <span class="testimonials-card__category-icon"><i class="fas fa-chart-line"></i></span>
                            <span>Corporate Tax &amp; Audit</span>
                        </div>

                        <!-- Quote with Large Green Quotes -->
                        <div class="testimonials-card__quote-wrap">
                            <span class="testimonials-card__quote-mark testimonials-card__quote-mark--left">“</span>
                            <p class="testimonials-card__quote-text">
                                Jolly &amp; Co. has been managing our corporate tax filing, statutory audits, and GST compliance for over five years. Their proactive advice on <mark class="testimonials-card__highlight">tax planning &amp; ROC compliance</mark> has saved us substantial costs while keeping our company 100% compliant with regulatory standards.
                            </p>
                            <span class="testimonials-card__quote-mark testimonials-card__quote-mark--right">”</span>
                        </div>

                    </div>
                </div>

                <!-- Slide 3: Vikram Malhotra -->
                <div class="testimonials-card__item">
                    <!-- Left: Client Profile Card -->
                    <div class="testimonials-card__profile">
                        <div class="testimonials-card__avatar-box">
                            <img src="assets/images/team/team-2-3.jpg" alt="Vikram Malhotra" class="testimonials-card__avatar-img">
                            <span class="testimonials-card__avatar-check"><i class="fas fa-check"></i></span>
                            <span class="testimonials-card__verified-badge"><i class="fas fa-check-circle"></i> Verified Client</span>
                        </div>
                        <h4 class="testimonials-card__name">Vikram Malhotra</h4>
                        <p class="testimonials-card__role">Senior Consultant &amp; Investor</p>
                        <p class="testimonials-card__location"><i class="fas fa-map-marker-alt"></i> Greater Kailash, New Delhi</p>
                        <div class="testimonials-card__service-badge">
                            <i class="fas fa-balance-scale"></i> Tax Notice &amp; Scrutiny
                        </div>
                    </div>

                    <!-- Right: Testimonial Content & Feature Metrics -->
                    <div class="testimonials-card__body">
                        <!-- Top Category Pill -->
                        <div class="testimonials-card__category">
                            <span class="testimonials-card__category-icon"><i class="fas fa-file-invoice-dollar"></i></span>
                            <span>Scrutiny Notice Resolution</span>
                        </div>

                        <!-- Quote with Large Green Quotes -->
                        <div class="testimonials-card__quote-wrap">
                            <span class="testimonials-card__quote-mark testimonials-card__quote-mark--left">“</span>
                            <p class="testimonials-card__quote-text">
                                When I received a complex scrutiny assessment notice from the Income Tax Department, Jolly &amp; Co. handled the matter with exceptional professionalism. They drafted a meticulous, legally sound reply and <mark class="testimonials-card__highlight">resolved the assessment smoothly</mark> without any penalty.
                            </p>
                            <span class="testimonials-card__quote-mark testimonials-card__quote-mark--right">”</span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="funfact funfact--two">
    <div class="container">
        <div class="row gutter-y-30">

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <div class="funfact__item">
                    <div class="funfact__item__shape"></div>
                    <div class="funfact__item__icon-box">
                        <span class="funfact__item__icon"><i class="icon-clock"></i></span>
                    </div>
                    <div class="funfact__item__content">
                        <h3 class="funfact__item__count count-box">
                            <span class="count-text" data-stop="15" data-speed="1500">0</span><span>+</span>
                        </h3>
                        <p class="funfact__item__title">Years Experience</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                <div class="funfact__item">
                    <div class="funfact__item__shape"></div>
                    <div class="funfact__item__icon-box">
                        <span class="funfact__item__icon"><i class="icon-satisfaction"></i></span>
                    </div>
                    <div class="funfact__item__content">
                        <h3 class="funfact__item__count count-box">
                            <span class="count-text" data-stop="95" data-speed="1500">0</span><span>+</span>
                        </h3>
                        <p class="funfact__item__title">Corporate Clients</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                <div class="funfact__item">
                    <div class="funfact__item__shape"></div>
                    <div class="funfact__item__icon-box">
                        <span class="funfact__item__icon"><i class="icon-stats-2"></i></span>
                    </div>
                    <div class="funfact__item__content">
                        <h3 class="funfact__item__count count-box">
                            <span class="count-text" data-stop="99" data-speed="1500">0</span><span>%</span>
                        </h3>
                        <p class="funfact__item__title">Compliance Rate</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="400">
                <div class="funfact__item">
                    <div class="funfact__item__shape"></div>
                    <div class="funfact__item__icon-box">
                        <span class="funfact__item__icon"><i class="icon-financial-consultant"></i></span>
                    </div>
                    <div class="funfact__item__content">
                        <h3 class="funfact__item__count count-box">
                            <span class="count-text" data-stop="20" data-speed="1500">0</span><span>+</span>
                        </h3>
                        <p class="funfact__item__title">CA &amp; Tax Experts</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="faq-one section-space">
    <div class="container">
        <div class="sec-title sec-title--center" style="margin-bottom: 45px;">
            <div class="sec-title__top" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <span class="sec-title__dot"></span>
                <p class="sec-title__tagline">FAQ &amp; Blogs</p>
            </div>
            <h2 class="sec-title__title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100" style="--title-color: #082e54">
                Frequently Asked Questions &amp; <span class="sec-title__highlight">Latest Blogs</span>
            </h2>
        </div>

        <div class="row gutter-y-40 align-items-stretch">
            <div class="col-lg-5">
                <div class="faq-one__image">
                    <div class="faq-one__content">
                        <div class="faq-one__content__inner">
                            <div class="sec-title">
                                <div class="sec-title__top" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                    <span class="sec-title__dot" style="background: #5bbd0f;"></span>
                                    <p class="sec-title__tagline">Our FAQs</p>
                                </div>
                                <h2 class="sec-title__title" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100" style='--title-color: #FFFFFF'>Frequently Asked <span class="sec-title__highlight">Questions.</span></h2>
                            </div>
                            <p class="faq-one__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Chartered accountancy, tax and compliance services tailored to your personal and business growth.</p>
                            <div class="faq-accordion findox-accordion" data-grp-name="findox-accordion">
                                <div class="accordion active" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> What accounting & tax services do you offer?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>We handle bookkeeping, financial statement preparation, statutory & tax audits, income tax return filing, GST compliance, TDS management, and company registration.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> Should I choose the old or new tax regime?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>It depends on your deductions (80C, 80D, home loan interest, HRA). We run a comparative tax calculation to determine which regime minimizes your overall tax liability.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> What is the process for business advisory & planning?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>We analyze your cash flow, profit margins, capital budgeting, and statutory obligations to provide actionable strategies for tax efficiency and sustainable growth.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> What documents are needed for GST & ITR filing?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Basic KYC (PAN, Aadhaar), annual bank statements, sales/purchase registers, Form 26AS/AIS, and investment proofs. We provide a customized checklist for your profile.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> How do you handle tax notices from the department?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <p>Share the notice with us; our chartered accountants review the assessment, prepare a legally sound and backed response, and file it before the statutory deadline.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <img src="assets/images/shapes/faq-shape-1-1.png" alt="shape" class="faq-one__content__shape">
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-lg-7">
               <div class="faq-one__blogs">

                <div class="blog-card-two">
                    <div class="blog-card-two__image" style="background-image: url(assets/images/blog/blog-2-1.jpg)">
                        <div class="blog-card-two__date">
                            <span class="blog-card-two__date__day">22</span>
                            <span class="blog-card-two__date__month">Apr</span>
                        </div>
                        <a href="blogs.php" class="blog-card-two__image__link">
                            <span class="sr-only">Smart Financial Planning for Business Growth.</span>
                        </a>
                    </div>

                    <div class="blog-card-two__content">
                        <a href="blogs.php" class="blog-card-two__category">Finance</a>
                        <ul class="blog-card-two__meta list-unstyled">
                            <li>
                                <span class="blog-card-two__meta__icon"><i class="icon-user"></i></span>
                                <span>By: <a href="blogs.php">Jolly & Co</a></span>
                            </li>
                           
                        </ul>
                        <h3 class="blog-card-two__title">
                            <a href="blogs.php">Smart Financial Planning for Business Growth.</a>
                        </h3>
                        <a href="blogs.php" class="findox-btn findox-btn--base">
                            <span class="findox-btn__text">Learn More</span>
                            <span class="findox-btn__icon-box">
                                <span class="findox-btn__icon">
                                    <i class="icon-arrow-right-up"></i>
                                    <i class="icon-arrow-right-up"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="blog-card-two">
                    <div class="blog-card-two__image" style="background-image: url(assets/images/blog/blog-2-2.jpg)">
                        <div class="blog-card-two__date">
                            <span class="blog-card-two__date__day">15</span>
                            <span class="blog-card-two__date__month">Apr</span>
                        </div>
                        <a href="blogs.php" class="blog-card-two__image__link">
                            <span class="sr-only">Important Tax Tips Every Business Should Know.</span>
                        </a>
                    </div>

                    <div class="blog-card-two__content">
                        <a href="blogs.php" class="blog-card-two__category">Taxation</a>
                        <ul class="blog-card-two__meta list-unstyled">
                            <li>
                                <span class="blog-card-two__meta__icon"><i class="icon-user"></i></span>
                                <span>By: <a href="blogs.php">Jolly & Co</a></span>
                            </li>
                           
                        </ul>
                        <h3 class="blog-card-two__title">
                            <a href="blogs.php">Important Tax Tips Every Business Should Know.</a>
                        </h3>
                        <a href="blogs.php" class="findox-btn findox-btn--base">
                            <span class="findox-btn__text">Learn More</span>
                            <span class="findox-btn__icon-box">
                                <span class="findox-btn__icon">
                                    <i class="icon-arrow-right-up"></i>
                                    <i class="icon-arrow-right-up"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>

                <div class="blog-card-two">
                    <div class="blog-card-two__image" style="background-image: url(assets/images/blog/blog-2-3.jpg)">
                        <div class="blog-card-two__date">
                            <span class="blog-card-two__date__day">08</span>
                            <span class="blog-card-two__date__month">Apr</span>
                        </div>
                        <a href="blogs.php" class="blog-card-two__image__link">
                            <span class="sr-only">Why Accurate Accounting Matters for Your Business.</span>
                        </a>
                    </div>

                    <div class="blog-card-two__content">
                        <a href="blogs.php" class="blog-card-two__category">Accounting</a>
                        <ul class="blog-card-two__meta list-unstyled">
                            <li>
                                <span class="blog-card-two__meta__icon"><i class="icon-user"></i></span>
                                <span>By: <a href="blogs.php">Jolly & Co</a></span>
                            </li>
                           
                        </ul>
                        <h3 class="blog-card-two__title">
                            <a href="blogs.php">Why Accurate Accounting Matters for Your Business.</a>
                        </h3>
                        <a href="blogs.php" class="findox-btn findox-btn--base">
                            <span class="findox-btn__text">Learn More</span>
                            <span class="findox-btn__icon-box">
                                <span class="findox-btn__icon">
                                    <i class="icon-arrow-right-up"></i>
                                    <i class="icon-arrow-right-up"></i>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
?>
