<?php
/** includes/footer.php — shared footer, mobile nav, sidebar, WhatsApp button and scripts. */
require_once __DIR__ . '/../config.php';
$waHello = whatsapp_link('Hello ' . $site['name'] . ', I would like to know more about your services.');
?>
        <footer class="main-footer main-footer--modern">
            <!-- Top Newsletter / CTA Ribbon -->
            <div class="main-footer__top">
                <div class="container">
                    <div class="footer-cta-ribbon" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1200">
                        <div class="footer-cta-ribbon__wave"></div>

                        <div class="footer-cta-ribbon__inner">
                            <!-- Left: Heading -->
                            <div class="footer-cta-ribbon__heading-box">
                                <h3 class="footer-cta-ribbon__title">
                                    Need Help With <span class="footer-cta-ribbon__highlight">Accounts</span> Or <span class="footer-cta-ribbon__highlight">Tax Filing?</span>
                                </h3>
                            </div>

                            <!-- Center: 3 Trust Highlights -->
                            <div class="footer-cta-ribbon__trust">
                                <div class="footer-cta-ribbon__trust-divider"></div>
                                <div class="footer-cta-ribbon__trust-item">
                                    <div class="footer-cta-ribbon__trust-icon">
                                        <i class="far fa-comment-dots"></i>
                                    </div>
                                    <span class="footer-cta-ribbon__trust-text">Quick<br>Response</span>
                                </div>
                                <div class="footer-cta-ribbon__trust-item">
                                    <div class="footer-cta-ribbon__trust-icon">
                                        <i class="fas fa-shield-alt"></i>
                                    </div>
                                    <span class="footer-cta-ribbon__trust-text">Expert<br>Guidance</span>
                                </div>
                                <div class="footer-cta-ribbon__trust-item">
                                    <div class="footer-cta-ribbon__trust-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <span class="footer-cta-ribbon__trust-text">Trusted<br>CA Support</span>
                                </div>
                            </div>

                            <!-- Right: 2 Action Buttons -->
                            <div class="footer-cta-ribbon__actions">
                                <a href="<?= e($waHello) ?>" target="_blank" rel="noopener" class="footer-cta-ribbon__btn footer-cta-ribbon__btn--whatsapp">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>CHAT ON WHATSAPP</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="contact.php" class="footer-cta-ribbon__btn footer-cta-ribbon__btn--enquiry">
                                    <i class="far fa-envelope"></i>
                                    <span>SEND ENQUIRY</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main 4-Column Footer Body -->
                <div class="container footer-main-body">
                    <div class="row">
                        <!-- Col 1: About & Logo -->
                        <div class="col-xl-3 col-lg-6 col-md-6 footer-col footer-col--brand" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                            <div class="footer-widget footer-widget--about">
                                <div class="footer-widget__logo">
                                    <a href="index.php">
                                        <img src="assets/images/jolly-2x.png?v=<?= filemtime(__DIR__ . '/../assets/images/jolly-2x.png') ?>" srcset="assets/images/jolly-2x.png?v=<?= filemtime(__DIR__ . '/../assets/images/jolly-2x.png') ?> 1x, assets/images/jolly.png?v=<?= filemtime(__DIR__ . '/../assets/images/jolly.png') ?> 2x" width="235" height="54" alt="<?= e($site['name']) ?> Logo">
                                    </a>
                                </div>
                                <p class="footer-widget__text">
                                    <?= e($site['full_name']) ?> is a trusted chartered accountancy practice in <?= e($site['locality']) ?>, New Delhi, helping individuals, startups and growing businesses with accounts, tax, audit and compliance.
                                </p>
                                <div class="footer-social-links">
                                    <?php include __DIR__ . '/social.php'; ?>
                                </div>
                            </div>
                        </div>

                        <!-- Col 2: Quick Links -->
                        <div class="col-xl-3 col-lg-6 col-md-6 footer-col footer-col--links" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Quick Links</h3>
                                <ul class="list-unstyled footer-links-list">
                                    <li><a href="index.php"><span>Home</span> <i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="about.php"><span>About Us</span> <i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="service-accounting-bookkeeping.php"><span>Services</span> <i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="blogs.php"><span>Blogs</span> <i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="contact.php"><span>Contact</span> <i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="<?= e(map_link()) ?>" target="_blank" rel="noopener"><span>Find Us on Map</span> <i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Col 3: Our Services -->
                        <div class="col-xl-3 col-lg-6 col-md-6 footer-col footer-col--services" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Our Services</h3>
                                <ul class="list-unstyled footer-links-list">
                                    <?php foreach ($services as $s): ?>
                                        <li>
                                            <a href="<?= e($s['url']) ?>">
                                                <span><?= e($s['title']) ?></span>
                                                <i class="fas fa-chevron-right"></i>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Col 4: Contact Us -->
                        <div class="col-xl-3 col-lg-6 col-md-6 footer-col footer-col--contact" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <div class="footer-widget">
                                <h3 class="footer-widget__title">Contact Us</h3>
                                <ul class="list-unstyled footer-contact-list">
                                    <li>
                                        <div class="footer-contact-list__icon"><i class="fas fa-map-marker-alt"></i></div>
                                        <div class="footer-contact-list__info">
                                            <address><?= e($site['address']) ?></address>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-contact-list__icon"><i class="fas fa-phone-alt"></i></div>
                                        <div class="footer-contact-list__info">
                                            <a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-contact-list__icon"><i class="fas fa-envelope"></i></div>
                                        <div class="footer-contact-list__info">
                                            <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="footer-contact-list__icon"><i class="far fa-clock"></i></div>
                                        <div class="footer-contact-list__info">
                                            <span><?= e($site['hours']) ?></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright Bar -->
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom-inner">
                        <p class="main-footer__copyright">
                            &copy; <?= date('Y') ?> <?= e($site['full_name']) ?>. All Rights Reserved.
                        </p>
                        <div class="main-footer__legal">
                            <a href="about.php">Privacy Policy</a>
                            <span class="main-footer__legal-sep">|</span>
                            <a href="about.php">Terms &amp; Conditions</a>
                            <span class="main-footer__legal-sep">|</span>
                            <a href="index.php">Sitemap</a>
                        </div>
                        <a href="#" data-target="html" class="footer-scroll-top scroll-to-target" aria-label="Scroll to top">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom-Left Decorative Wave Graphic -->
            <div class="footer-corner-wave"></div>
        </footer>

</div><!-- /.page-wrapper -->

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="icon-close"></i></span>
        <div class="logo-box">
            <a href="index.php" aria-label="logo image">
                <img class="logo-plate" src="assets/images/jolly-logo.png" width="225" alt="<?= e($site['name']) ?> logo" />
            </a>
        </div>
        <div class="mobile-nav__container"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <span class="mobile-nav__contact__icon"><i class="fa fa-envelope"></i></span>
                <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a>
            </li>
            <li>
                <span class="mobile-nav__contact__icon"><i class="fa fa-phone-alt"></i></span>
                <a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a>
            </li>
        </ul>
        <?php include __DIR__ . '/social.php'; ?>
    </div>
</div>


<!-- Floating WhatsApp button (number comes from config.php) -->
<a href="<?= e($waHello) ?>" class="wa-float" target="_blank" rel="noopener" aria-label="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top">
    <span class="scroll-to-top__text">back top</span>
    <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
</a>

<script src="assets/vendors/jquery/jquery-3.7.1.min.js"></script>
<script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="assets/vendors/jarallax/jarallax.min.js"></script>
<script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="assets/vendors/wnumb/wNumb.min.js"></script>
<script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendors/owl-carousel/js/owlcarousel2-filter.min.js"></script>
<script src="assets/vendors/aos/js/aos.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
<script src="assets/vendors/isotope/isotope.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/chart/chart.js"></script>
<!-- gsap js -->
<script src="assets/vendors/gsap/gsap.js"></script>
<script src="assets/vendors/gsap/scrolltrigger.min.js"></script>
<script src="assets/vendors/gsap/splittext.min.js"></script>
<script src="assets/vendors/gsap/findox-split.js"></script>
<!-- template js -->
<script src="assets/js/findox.js"></script>
<!-- site js (WhatsApp form & sticky nav) -->
<script src="assets/js/custom.js?v=<?= filemtime(__DIR__ . '/../assets/js/custom.js') ?>"></script>
<?php if (!empty($extra_js)): ?>
    <?= $extra_js ?>
<?php endif; ?>
</body>
</html>
