<?php
/** includes/footer.php — shared footer, mobile nav, sidebar, WhatsApp button and scripts. */
require_once __DIR__ . '/../config.php';
$waHello = whatsapp_link('Hello ' . $site['name'] . ', I would like to know more about your services.');
?>
        <footer class="main-footer main-footer--two">
            <div class="main-footer__top">
                <div class="container">
                    <div class="main-footer__newsletter" data-aos="fade-down" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                        <div class="row gutter-y-30 align-items-center">
                            <div class="col-xl-7">
                                <div class="main-footer__newsletter__content">
                                    <div class="main-footer__logo">
                                        <a href="index.php">
                                            <img src="assets/images/jolly.png" width="225" alt="<?= e($site['name']) ?> logo">
                                        </a>
                                    </div>
                                    <h3 class="main-footer__newsletter__title">Need help with accounts <br> or tax filing?</h3>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="footer-cta__buttons">
                                    <a href="<?= e($waHello) ?>" target="_blank" rel="noopener" class="findox-btn">
                                        <span class="findox-btn__text"><i class="fab fa-whatsapp"></i> CHAT ON WHATSAPP</span>
                                    </a>
                                    <a href="contact.php" class="findox-btn findox-btn--white">
                                        <span class="findox-btn__text">SEND ENQUIRY</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row gutter-y-40">
                        <div class="col-xl-3 col-lg-5 col-md-7" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                            <div class="footer-widget footer-widget--about">
                                <h2 class="footer-widget__title">About</h2>
                                <p class="footer-widget__text">
                                    <?= e($site['full_name']) ?> is a chartered accountancy practice in <?= e($site['locality']) ?>, New Delhi, helping individuals, startups and growing businesses with accounts, tax, audit and compliance.
                                </p>
                                <?php include __DIR__ . '/social.php'; ?>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="200">
                            <div class="footer-widget footer-widget--links footer-widget--links-1">
                                <h2 class="footer-widget__title">Quick Links</h2>
                                <ul class="list-unstyled footer-widget__links">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="blogs.php">Blogs</a></li>
                                    <li><a href="contact.php">Contact</a></li>
                                    <li><a href="<?= e(map_link()) ?>" target="_blank" rel="noopener">Find Us on Map</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="300">
                            <div class="footer-widget footer-widget--links footer-widget--links-2">
                                <h2 class="footer-widget__title">Services</h2>
                                <ul class="list-unstyled footer-widget__links">
                                    <?php foreach ($services as $s): ?>
                                        <li><a href="services.php#<?= e($s['slug']) ?>"><?= e($s['title']) ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-7" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="400">
                            <div class="footer-widget footer-widget--contact">
                                <h2 class="footer-widget__title">Contact</h2>
                                <ul class="footer-contact list-unstyled">
                                    <li><i class="icon-location"></i><address><?= e($site['address']) ?></address></li>
                                    <li><i class="icon-phone-call"></i><a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a></li>
                                    <li><i class="fas fa-envelope"></i><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></li>
                                    <li><i class="far fa-clock"></i><span><?= e($site['hours']) ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer__bottom">
                <div class="container">
                    <div class="main-footer__bottom__inner">
                        <p class="main-footer__copyright">
                            &copy; Copyright <?= date('Y') ?> <?= e($site['full_name']) ?>. All rights reserved.
                        </p>
                        <ul class="main-footer__page list-unstyled">
                            <li><a href="about.php">About</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="blogs.php">Blogs</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="assets/images/shapes/footer-shape-2-1.png" alt="" class="main-footer__shape-1">
            <img src="assets/images/shapes/footer-shape-2-2.png" alt="" class="main-footer__shape-2">
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
<!-- site js (WhatsApp form) -->
<script src="assets/js/custom.js"></script>
<?php if (!empty($extra_js)): ?>
    <?= $extra_js ?>
<?php endif; ?>
</body>
</html>
