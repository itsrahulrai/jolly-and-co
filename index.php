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
                            <h4 class="features-three__title"><a href="services.php#taxation">Income Tax &amp; GST Made Simple</a></h4>
                        </div>
                        <p class="features-three__text">On-time return filing, registrations, notice replies and smart tax planning for individuals, firms and companies.</p>
                        <a href="services.php#taxation" class="findox-btn findox-btn--white">
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
                            <h4 class="features-three__title"><a href="services.php#business-advisory">Business Advisory &amp; Planning</a></h4>
                        </div>
                        <p class="features-three__text">Structuring, budgeting, cash-flow planning and loan documentation to help your business grow with confidence.</p>
                        <a href="services.php#business-advisory" class="findox-btn findox-btn--white">
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
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-card__bg">
                        <div class="service-card__bg__main" style="background-image: url(assets/images/services/service-1-1.jpg)"></div>
                    </div>
                    <div class="service-card__content">
                        <div class="service-card__tagline">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="11.5" y="3.01463" width="12" height="12" transform="rotate(45 11.5 3.01463)" />
                            </svg>
                            <p class="service-card__tagline__text">Finance Strategic Business</p>
                        </div>
                        <h3 class="service-card__title"><a href="service-d-business-analytics.php">Business Analytics <br> Statistics</a></h3>
                        <p class="service-card__text">We deliver accurate analytics statistics to track growth, improve strategies, and support informed decisions.</p>
                        <div class="service-card__bottom">
                            <span class="service-card__icon"><i class="icon-stats-2"></i></span>
                            <h4 class="service-card__number"></h4>
                        </div>
                        <a href="service-d-business-analytics.php" class="service-card__btn"><i class="icon-right-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-card__bg">
                        <div class="service-card__bg__main" style="background-image: url(assets/images/services/service-1-2.jpg)"></div>
                    </div>
                    <div class="service-card__content">
                        <div class="service-card__tagline">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="11.5" y="3.01463" width="12" height="12" transform="rotate(45 11.5 3.01463)" />
                            </svg>
                            <p class="service-card__tagline__text">Finance Strategic Business</p>
                        </div>
                        <h3 class="service-card__title"><a href="service-d-finance-services.php">Personal Finance <br> Services</a></h3>
                        <p class="service-card__text">Our personal finance services help manage wealth, control expenses, and build trusted financial stability.</p>
                        <div class="service-card__bottom">
                            <span class="service-card__icon"><i class="icon-agreement"></i></span>
                            <h4 class="service-card__number"></h4>
                        </div>
                        <a href="service-d-finance-services.php" class="service-card__btn"><i class="icon-right-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-card__bg">
                        <div class="service-card__bg__main" style="background-image: url(assets/images/services/service-1-3.jpg)"></div>
                    </div>
                    <div class="service-card__content">
                        <div class="service-card__tagline">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="11.5" y="3.01463" width="12" height="12" transform="rotate(45 11.5 3.01463)" />
                            </svg>
                            <p class="service-card__tagline__text">Finance Strategic Business</p>
                        </div>
                        <h3 class="service-card__title"><a href="service-d-business-accounts.php">Banking & Business <br> Accounts</a></h3>
                        <p class="service-card__text">Open a secure bank business account designed for easy management, reliable transactions, and growth.</p>
                        <div class="service-card__bottom">
                            <span class="service-card__icon"><i class="icon-bank"></i></span>
                            <h4 class="service-card__number"></h4>
                        </div>
                        <a href="service-d-business-accounts.php" class="service-card__btn"><i class="icon-right-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                <div class="service-card">
                    <div class="service-card__bg">
                        <div class="service-card__bg__main" style="background-image: url(assets/images/services/service-1-4.jpg)"></div>
                    </div>
                    <div class="service-card__content">
                        <div class="service-card__tagline">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="11.5" y="3.01463" width="12" height="12" transform="rotate(45 11.5 3.01463)" />
                            </svg>
                            <p class="service-card__tagline__text">Finance Strategic Business</p>
                        </div>
                        <h3 class="service-card__title"><a href="service-d-data-solutions.php">Financial Data Analysis <br> Solutions</a></h3>
                        <p class="service-card__text">We provide advanced data analysis solutions ensuring accuracy, efficiency, and strong insights.</p>
                        <div class="service-card__bottom">
                            <span class="service-card__icon"><i class="icon-analysis"></i></span>
                            <h4 class="service-card__number"></h4>
                        </div>
                        <a href="service-d-data-solutions.php" class="service-card__btn"><i class="icon-right-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                <div class="service-card">
                    <div class="service-card__bg">
                        <div class="service-card__bg__main" style="background-image: url(assets/images/services/service-1-5.jpg)"></div>
                    </div>
                    <div class="service-card__content">
                        <div class="service-card__tagline">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="11.5" y="3.01463" width="12" height="12" transform="rotate(45 11.5 3.01463)" />
                            </svg>
                            <p class="service-card__tagline__text">Finance Strategic Business</p>
                        </div>
                        <h3 class="service-card__title"><a href="service-d-finance-planning.php">Strategic Finance <br> Planning</a></h3>
                        <p class="service-card__text">Our strategic finance planning guides organizations with budgeting, forecasting, and financial decisions.</p>
                        <div class="service-card__bottom">
                            <span class="service-card__icon"><i class="icon-planning"></i></span>
                            <h4 class="service-card__number"></h4>
                        </div>
                        <a href="service-d-finance-planning.php" class="service-card__btn"><i class="icon-right-2"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                <div class="service-card">
                    <div class="service-card__bg">
                        <div class="service-card__bg__main" style="background-image: url(assets/images/services/service-1-6.jpg)"></div>
                    </div>
                    <div class="service-card__content">
                        <div class="service-card__tagline">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="11.5" y="3.01463" width="12" height="12" transform="rotate(45 11.5 3.01463)" />
                            </svg>
                            <p class="service-card__tagline__text">Finance Strategic Business</p>
                        </div>
                        <h3 class="service-card__title"><a href="service-d-support-services.php">24/7 Team Support <br> Services</a></h3>
                        <p class="service-card__text">Our 24/7 support team ensures reliable assistance, quick solutions, and continuous service for clients.</p>
                        <div class="service-card__bottom">
                            <span class="service-card__icon"><i class="icon-support"></i></span>
                            <h4 class="service-card__number"></h4>
                        </div>
                        <a href="service-d-support-services.php" class="service-card__btn"><i class="icon-right-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-one section-space">
    <div class="container">
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
                                        <h4><span class="accordion-title__number"></span> What are main branches of finance?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <img src="assets/images/resources/faq-item-1.jpg" alt="faq">
                                            <p>Get customized security solutions tailored to your industry’s unique risks and compliance requirements.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion active" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> Should I pay off debt or invest first?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <img src="assets/images/resources/faq-item-2.jpg" alt="faq">
                                            <p>Finance is the management of money and includes activities like investing borrowing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> What is finance capital budgeting?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <img src="assets/images/resources/faq-item-3.jpg" alt="faq">
                                            <p>We offer comprehensive threat detection, risk assessment, and response strategies to safeguard.</p>
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
                                            <img src="assets/images/resources/faq-item-4.jpg" alt="faq">
                                            <p>PAN, Aadhaar, bank statements, sales/purchase registers and Form 26AS. We provide a quick custom checklist.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                                    <div class="accordion-title">
                                        <h4><span class="accordion-title__number"></span> How do you handle tax notices from department?</h4>
                                        <span class="accordion-title__icon"></span>
                                    </div>
                                    <div class="accordion-content">
                                        <div class="inner">
                                            <img src="assets/images/resources/faq-item-5.jpg" alt="faq">
                                            <p>Share your notice with us; our CAs review it, draft a comprehensive response and submit it well before due date.</p>
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
                <a href="blog-details-right.php" class="blog-card-two__image__link">
                    <span class="sr-only">Smart Financial Planning for Business Growth.</span>
                </a>
            </div>

            <div class="blog-card-two__content">
                <a href="blog-details-right.php" class="blog-card-two__category">Finance</a>
                <ul class="blog-card-two__meta list-unstyled">
                    <li>
                        <span class="blog-card-two__meta__icon"><i class="icon-user"></i></span>
                        <span>By: <a href="blog-details-right.php">Admin</a></span>
                    </li>
                    <li>
                        <span class="blog-card-two__meta__icon"><i class="icon-comment"></i></span>
                        <a href="blog-details-right.php">Comments (3)</a>
                    </li>
                </ul>
                <h3 class="blog-card-two__title">
                    <a href="blog-details-right.php">Smart Financial Planning for Business Growth.</a>
                </h3>
                <a href="blog-details-right.php" class="findox-btn findox-btn--base">
                    <span class="findox-btn__text">Learn More</span>
                    <span class="findox-btn__icon-box">
                        <span class="findox-btn__icon">
                            <i class="icon-arrow-right-up"></i>
                            <i class="icon-arrow-right-up"></i>
                        </span>
                    </span>
                </a>
            </div>

            <img src="assets/images/shapes/blog-card-shape-2-1.png" alt="shape" class="blog-card-two__shape">
            <img src="assets/images/shapes/blog-card-shape-2-1-hover.png" alt="shape" class="blog-card-two__shape blog-card-two__shape--hover">
        </div>

        <div class="blog-card-two">
            <div class="blog-card-two__image" style="background-image: url(assets/images/blog/blog-2-2.jpg)">
                <div class="blog-card-two__date">
                    <span class="blog-card-two__date__day">15</span>
                    <span class="blog-card-two__date__month">Apr</span>
                </div>
                <a href="blog-details-right.php" class="blog-card-two__image__link">
                    <span class="sr-only">Important Tax Tips Every Business Should Know.</span>
                </a>
            </div>

            <div class="blog-card-two__content">
                <a href="blog-details-right.php" class="blog-card-two__category">Taxation</a>
                <ul class="blog-card-two__meta list-unstyled">
                    <li>
                        <span class="blog-card-two__meta__icon"><i class="icon-user"></i></span>
                        <span>By: <a href="blog-details-right.php">Admin</a></span>
                    </li>
                    <li>
                        <span class="blog-card-two__meta__icon"><i class="icon-comment"></i></span>
                        <a href="blog-details-right.php">Comments (2)</a>
                    </li>
                </ul>
                <h3 class="blog-card-two__title">
                    <a href="blog-details-right.php">Important Tax Tips Every Business Should Know.</a>
                </h3>
                <a href="blog-details-right.php" class="findox-btn findox-btn--base">
                    <span class="findox-btn__text">Learn More</span>
                    <span class="findox-btn__icon-box">
                        <span class="findox-btn__icon">
                            <i class="icon-arrow-right-up"></i>
                            <i class="icon-arrow-right-up"></i>
                        </span>
                    </span>
                </a>
            </div>

            <img src="assets/images/shapes/blog-card-shape-2-1.png" alt="shape" class="blog-card-two__shape">
            <img src="assets/images/shapes/blog-card-shape-2-1-hover.png" alt="shape" class="blog-card-two__shape blog-card-two__shape--hover">
        </div>

        <div class="blog-card-two">
            <div class="blog-card-two__image" style="background-image: url(assets/images/blog/blog-2-3.jpg)">
                <div class="blog-card-two__date">
                    <span class="blog-card-two__date__day">08</span>
                    <span class="blog-card-two__date__month">Apr</span>
                </div>
                <a href="blog-details-right.php" class="blog-card-two__image__link">
                    <span class="sr-only">Why Accurate Accounting Matters for Your Business.</span>
                </a>
            </div>

            <div class="blog-card-two__content">
                <a href="blog-details-right.php" class="blog-card-two__category">Accounting</a>
                <ul class="blog-card-two__meta list-unstyled">
                    <li>
                        <span class="blog-card-two__meta__icon"><i class="icon-user"></i></span>
                        <span>By: <a href="blog-details-right.php">Admin</a></span>
                    </li>
                    <li>
                        <span class="blog-card-two__meta__icon"><i class="icon-comment"></i></span>
                        <a href="blog-details-right.php">Comments (4)</a>
                    </li>
                </ul>
                <h3 class="blog-card-two__title">
                    <a href="blog-details-right.php">Why Accurate Accounting Matters for Your Business.</a>
                </h3>
                <a href="blog-details-right.php" class="findox-btn findox-btn--base">
                    <span class="findox-btn__text">Learn More</span>
                    <span class="findox-btn__icon-box">
                        <span class="findox-btn__icon">
                            <i class="icon-arrow-right-up"></i>
                            <i class="icon-arrow-right-up"></i>
                        </span>
                    </span>
                </a>
            </div>

            <img src="assets/images/shapes/blog-card-shape-2-1.png" alt="shape" class="blog-card-two__shape">
            <img src="assets/images/shapes/blog-card-shape-2-1-hover.png" alt="shape" class="blog-card-two__shape blog-card-two__shape--hover">
        </div>

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
