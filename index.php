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
                            <div class="sec-title__top" style="--tagline-bg: #ECF5F4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="" class="sec-title__shape">
                                <p class="sec-title__tagline">About <?= e($site['name']) ?></p>
                            </div>
                            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">Your Trusted Chartered Accountants in Delhi.</h2>
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
            <div class="sec-title__top" style="--tagline-bg: #FFFFFF" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="shape" class="sec-title__shape">
                <p class="sec-title__tagline">Our Services</p>
            </div>
            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">
               Smart Financial Solutions for Your Business
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
      <div class="sec-title sec-title--center">
    <div class="sec-title__top" style='--tagline-bg: #ECF5F4' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
        <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="shape" class="sec-title__shape">
        <p class="sec-title__tagline">Testimonials</p>
    </div>
    <h2 class="sec-title__title bw-split-in-up" style='--title-color: #000000'>
       Trusted by Clients Committed to Success
    </h2>
</div>

        <div class="testimonials-one__wrapper" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            <div class="testimonials-one__carousel findox-owl__carousel--with-counter findox-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 30,
                "autoplay": true,
                "loop": true,
                "smartSpeed": 700,
                "nav": true,
                "dots": false,
                "navText": ["<i class=\"icon-arrow-left\"></i>","<i class=\"icon-arrow-right\"></i>"]
            }'>
                <div class="testimonials-one__item">
                    <div class="testimonials-one__item__image">
                        <img src="assets/images/testimonals/testimonial-man.png" alt="Rajesh Sharma">
                        <div class="findox-ratings">
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                        </div>
                    </div>

                    <div class="testimonials-one__item__content">
                        <svg class="testimonials-one__item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67 66" fill="none">
                            <path d="M60.7549 6.17188C64.6411 5.66516 66.5008 7.52302 66.501 10.0576C66.501 13.2688 61.5986 15.634 59.2334 17.1553C51.6291 21.7181 46.8975 25.9432 46.8975 29.1533C46.8977 31.5194 50.6158 31.5189 52.3057 31.6875C60.4167 32.3639 65.6551 41.1506 65.6562 48.7549C65.6562 58.7254 57.3754 65.9921 47.7441 65.9922C35.7455 65.9922 28.3105 55.0075 28.3105 44.0234C28.3106 33.2093 35.7452 22.2256 43.6875 15.6348C51.2907 9.21358 57.037 6.67865 60.7549 6.17188Z" />
                            <path d="M32.4443 0.0839844C36.3306 -0.422735 38.1903 1.43513 38.1904 3.96973C38.1904 7.18088 33.2901 9.54609 30.9238 11.0674C23.3195 15.6302 18.5889 19.8554 18.5889 23.0654C18.5891 25.4314 22.3062 25.4311 23.9961 25.5996C25.639 25.7362 27.1619 26.2111 28.5498 26.9365C25.6875 32.1352 23.7433 37.9893 23.7422 44.0254C23.7422 48.9135 25.0048 53.8654 27.3721 58.1455C24.9579 59.2774 22.2542 59.9052 19.4336 59.9053C7.43498 59.9053 0 48.9206 0 37.9365C0.000139867 27.1213 7.43572 16.1377 15.377 9.54688C22.9802 3.12568 28.7264 0.590755 32.4443 0.0839844Z" />
                        </svg>

                        <p class="testimonials-one__item__quote">
                            Jolly & Co. has been managing our corporate tax filing, statutory audits, and GST compliance for over five years. Their proactive advice on <span>tax planning & ROC compliance</span> has saved us substantial costs while keeping our company 100% compliant with regulatory standards.
                        </p>

                        <div class="testimonials-one__item__identity">
                            <h4 class="testimonials-one__item__name">Rajesh Sharma</h4>
                            <p class="testimonials-one__item__designation">Director, Apex Logistics Pvt. Ltd., New Delhi</p>
                        </div>
                    </div>
                </div>

                <div class="testimonials-one__item">
                    <div class="testimonials-one__item__image">
                        <img src="assets/images/testimonals/testimonial-woman.png" alt="Pooja Agarwal">
                        <div class="findox-ratings">
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                        </div>
                    </div>

                    <div class="testimonials-one__item__content">
                        <svg class="testimonials-one__item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67 66" fill="none">
                            <path d="M60.7549 6.17188C64.6411 5.66516 66.5008 7.52302 66.501 10.0576C66.501 13.2688 61.5986 15.634 59.2334 17.1553C51.6291 21.7181 46.8975 25.9432 46.8975 29.1533C46.8977 31.5194 50.6158 31.5189 52.3057 31.6875C60.4167 32.3639 65.6551 41.1506 65.6562 48.7549C65.6562 58.7254 57.3754 65.9921 47.7441 65.9922C35.7455 65.9922 28.3105 55.0075 28.3105 44.0234C28.3106 33.2093 35.7452 22.2256 43.6875 15.6348C51.2907 9.21358 57.037 6.67865 60.7549 6.17188Z" />
                            <path d="M32.4443 0.0839844C36.3306 -0.422735 38.1903 1.43513 38.1904 3.96973C38.1904 7.18088 33.2901 9.54609 30.9238 11.0674C23.3195 15.6302 18.5889 19.8554 18.5889 23.0654C18.5891 25.4314 22.3062 25.4311 23.9961 25.5996C25.639 25.7362 27.1619 26.2111 28.5498 26.9365C25.6875 32.1352 23.7433 37.9893 23.7422 44.0254C23.7422 48.9135 25.0048 53.8654 27.3721 58.1455C24.9579 59.2774 22.2542 59.9052 19.4336 59.9053C7.43498 59.9053 0 48.9206 0 37.9365C0.000139867 27.1213 7.43572 16.1377 15.377 9.54688C22.9802 3.12568 28.7264 0.590755 32.4443 0.0839844Z" />
                        </svg>

                        <p class="testimonials-one__item__quote">
                            As a fast-growing startup, managing bookkeeping, monthly TDS, and GST returns was daunting. The team at Jolly & Co. took complete ownership of our accounts. Their expertise in <span>startup financial advisory</span> and direct access to senior partners made all the difference.
                        </p>

                        <div class="testimonials-one__item__identity">
                            <h4 class="testimonials-one__item__name">Pooja Agarwal</h4>
                            <p class="testimonials-one__item__designation">Co-Founder, GreenRoots Retail, Kalkaji</p>
                        </div>
                    </div>
                </div>

                <div class="testimonials-one__item">
                    <div class="testimonials-one__item__image">
                        <img src="assets/images/testimonals/testimonial-man.png" alt="Vikram Malhotra">
                        <div class="findox-ratings">
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                            <span class="findox-ratings__icon"><i class="fas fa-star"></i></span>
                        </div>
                    </div>

                    <div class="testimonials-one__item__content">
                        <svg class="testimonials-one__item__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 67 66" fill="none">
                            <path d="M60.7549 6.17188C64.6411 5.66516 66.5008 7.52302 66.501 10.0576C66.501 13.2688 61.5986 15.634 59.2334 17.1553C51.6291 21.7181 46.8975 25.9432 46.8975 29.1533C46.8977 31.5194 50.6158 31.5189 52.3057 31.6875C60.4167 32.3639 65.6551 41.1506 65.6562 48.7549C65.6562 58.7254 57.3754 65.9921 47.7441 65.9922C35.7455 65.9922 28.3105 55.0075 28.3105 44.0234C28.3106 33.2093 35.7452 22.2256 43.6875 15.6348C51.2907 9.21358 57.037 6.67865 60.7549 6.17188Z" />
                            <path d="M32.4443 0.0839844C36.3306 -0.422735 38.1903 1.43513 38.1904 3.96973C38.1904 7.18088 33.2901 9.54609 30.9238 11.0674C23.3195 15.6302 18.5889 19.8554 18.5889 23.0654C18.5891 25.4314 22.3062 25.4311 23.9961 25.5996C25.639 25.7362 27.1619 26.2111 28.5498 26.9365C25.6875 32.1352 23.7433 37.9893 23.7422 44.0254C23.7422 48.9135 25.0048 53.8654 27.3721 58.1455C24.9579 59.2774 22.2542 59.9052 19.4336 59.9053C7.43498 59.9053 0 48.9206 0 37.9365C0.000139867 27.1213 7.43572 16.1377 15.377 9.54688C22.9802 3.12568 28.7264 0.590755 32.4443 0.0839844Z" />
                        </svg>

                        <p class="testimonials-one__item__quote">
                            When I received a complex scrutiny assessment notice from the Income Tax Department, Jolly & Co. handled the matter with exceptional professionalism. They drafted a meticulous, legally sound reply and <span>resolved the assessment smoothly</span> without any penalty.
                        </p>

                        <div class="testimonials-one__item__identity">
                            <h4 class="testimonials-one__item__name">Vikram Malhotra</h4>
                            <p class="testimonials-one__item__designation">Senior Financial Consultant & Investor, New Delhi</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonials-one__shape-1">
                <img src="assets/images/shapes/testimonials-shape-1-1.png" alt="shape">
            </div>
            <img src="assets/images/shapes/testimonials-shape-1-2.png" alt="shape" class="testimonials-one__shape-2">
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
                        <span class="funfact__item__icon"><i class="icon-folder"></i></span>
                    </div>
                    <div class="funfact__item__content">
                        <h3 class="funfact__item__count count-box">
                            <span class="count-text" data-stop="285" data-speed="1500">0</span><span>k+</span>
                        </h3>
                        <p class="funfact__item__title">Projects Succefull</p>
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
                            <span class="count-text" data-stop="83" data-speed="1500">0</span><span>k+</span>
                        </h3>
                        <p class="funfact__item__title">Happy Clients</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                <div class="funfact__item">
                    <div class="funfact__item__shape"></div>
                    <div class="funfact__item__icon-box">
                        <span class="funfact__item__icon"><i class="icon-technical-team"></i></span>
                    </div>
                    <div class="funfact__item__content">
                        <h3 class="funfact__item__count count-box">
                            <span class="count-text" data-stop="195" data-speed="1500">0</span><span>k+</span>
                        </h3>
                        <p class="funfact__item__title">Team Support</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="400">
                <div class="funfact__item">
                    <div class="funfact__item__shape"></div>
                    <div class="funfact__item__icon-box">
                        <span class="funfact__item__icon"><i class="icon-trophy"></i></span>
                    </div>
                    <div class="funfact__item__content">
                        <h3 class="funfact__item__count count-box">
                            <span class="count-text" data-stop="366" data-speed="1500">0</span><span>+</span>
                        </h3>
                        <p class="funfact__item__title">Awards Winning</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="faq-one section-space">
    <div class="container">
        <div class="sec-title sec-title--center" style="margin-bottom: 45px;">
            <div class="sec-title__top" style="--tagline-bg: #ECF5F4" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="shape" class="sec-title__shape">
                <p class="sec-title__tagline">FAQ &amp; Blogs</p>
            </div>
            <h2 class="sec-title__title bw-split-in-up" style="--title-color: #000000">Frequently Asked Questions &amp; Latest Blogs</h2>
        </div>

        <div class="row gutter-y-40 align-items-stretch">
            <div class="col-lg-5">
                <div class="faq-one__image">
                    <div class="faq-one__content">
                        <div class="faq-one__content__inner">
                            <div class="sec-title">
                                <div class="sec-title__top" style='--tagline-bg: #FFFFFF' data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1500">
                                    <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="shape" class="sec-title__shape">
                                    <p class="sec-title__tagline">Our Faq’s</p>
                                </div>
                                <h2 class="sec-title__title bw-split-in-up" style='--title-color: #FFFFFF'>Frequently Ask Question.</h2>
                            </div>
                            <p class="faq-one__text" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">Chartered accountancy, tax and compliance services tailored to your personal and business growth.</p>
                            <div class="faq-accordion findox-accordion" data-grp-name="findox-accordion">
                                <div class="accordion" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
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
                                <div class="accordion active" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
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
                                <span>By: <a href="blogs.php">Admin</a></span>
                            </li>
                            <li>
                                <span class="blog-card-two__meta__icon"><i class="icon-comment"></i></span>
                                <a href="blogs.php">Comments (3)</a>
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
                                <span>By: <a href="blogs.php">Admin</a></span>
                            </li>
                            <li>
                                <span class="blog-card-two__meta__icon"><i class="icon-comment"></i></span>
                                <a href="blogs.php">Comments (2)</a>
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
                                <span>By: <a href="blogs.php">Admin</a></span>
                            </li>
                            <li>
                                <span class="blog-card-two__meta__icon"><i class="icon-comment"></i></span>
                                <a href="blogs.php">Comments (4)</a>
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
