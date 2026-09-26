<?php
/**
 * includes/header.php — shared <head>, topbar and navigation.
 * Every page sets $seo (title, description, keywords, image, noindex) and $current
 * BEFORE including this file. Anything not set falls back to the defaults in config.php.
 */
require_once __DIR__ . '/../config.php';

$seo     = isset($seo) && is_array($seo) ? $seo : [];
$current = $current ?? ($current_page ?? '');

$pageTitle = $seo['title']       ?? ($page_title ?? ($title ?? $site['default_title']));
$pageDesc  = $seo['description'] ?? ($meta_description ?? ($description ?? $site['default_description']));
$pageKeys  = $seo['keywords']    ?? ($meta_keywords ?? ($keywords ?? $site['default_keywords']));
$pageImage = $seo['image']       ?? ($og_image ?? $site['og_image']);
$base      = site_base_url();

if (!empty($canonical_url)) {
    $canonical = $canonical_url;
} else {
    $path = $seo['path'] ?? basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
    $canonical = ($path === 'index.php') ? $base . '/' : $base . '/' . $path;
}
$ogImage   = (strpos($pageImage, 'http') === 0) ? $pageImage : ($base . '/' . ltrim($pageImage, '/'));
$bodyClass = !empty($body_class) ? $body_class : 'custom-cursor';

$sameAs = array_values(array_filter($site['social']));
$schema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'AccountingService',
    'name'        => $site['full_name'],
    'url'         => $base . '/',
    'image'       => $base . '/' . $site['og_image'],
    'telephone'   => $site['phone_link'],
    'email'       => $site['email'],
    'address'     => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $site['address'],
        'addressLocality' => $site['locality'],
        'addressRegion'   => $site['region'],
        'postalCode'      => $site['postal'],
        'addressCountry'  => $site['country'],
    ],
    'sameAs'      => $sameAs,
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDesc) ?>" />
    <meta name="keywords" content="<?= e($pageKeys) ?>" />
    <meta name="robots" content="<?= !empty($seo['noindex']) ? 'noindex, nofollow' : 'index, follow' ?>" />
    <link rel="canonical" href="<?= e($canonical) ?>" />

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= e($site['name']) ?>" />
    <meta property="og:title" content="<?= e($pageTitle) ?>" />
    <meta property="og:description" content="<?= e($pageDesc) ?>" />
    <meta property="og:url" content="<?= e($canonical) ?>" />
    <meta property="og:image" content="<?= e($ogImage) ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?= e($pageTitle) ?>" />
    <meta name="twitter:description" content="<?= e($pageDesc) ?>" />
    <meta name="twitter:image" content="<?= e($ogImage) ?>" />

    <script type="application/ld+json"><?= json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?></script>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/aos/css/aos.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/findox-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/slick/slick.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />
    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/findox.css" />
    <!-- site overrides (WhatsApp button, extra responsive rules) -->
    <link rel="stylesheet" href="assets/css/custom.css?v=<?= filemtime(__DIR__ . '/../assets/css/custom.css') ?>" />
    <link rel="stylesheet" href="assets/css/service-pages.css?v=<?= filemtime(__DIR__ . '/../assets/css/service-pages.css') ?>" />
    <link rel="stylesheet" href="assets/css/testimonials.css?v=<?= filemtime(__DIR__ . '/../assets/css/testimonials.css') ?>" />
    <?php if (!empty($extra_css)): ?>
        <?= $extra_css ?>
    <?php endif; ?>
</head>

<body class="<?= e($bodyClass) ?>">
<div class="custom-cursor__cursor"></div>
<div class="custom-cursor__cursor-two"></div>

<div class="preloader">
    <div class="preloader__image" style="background-image: url(assets/images/loader.png);"></div>
</div>
<!-- /.preloader -->
<div class="page-wrapper">

    <div class="header header--two">
        <div class="topbar topbar--two">
            <div class="container">
                <div class="topbar__inner">
                    <ul class="topbar__info list-unstyled">
                        <li>
                            <span class="topbar__info__icon"><i class="fas fa-phone-alt"></i></span>
                            <span><a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a></span>
                        </li>
                        <li class="topbar__email">
                            <span class="topbar__info__icon"><i class="fas fa-envelope"></i></span>
                            <span><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></span>
                        </li>
                    </ul>
                    <div class="topbar__right">
                        <ul class="topbar__info list-unstyled">
                            <li>
                                <span class="topbar__info__icon"><i class="icon-location"></i></span>
                                <span><a href="<?= e(map_link()) ?>" target="_blank" rel="noopener"><?= e($site['address']) ?></a></span>
                            </li>
                        </ul>
                        <div class="topbar__social">
                            <p class="topbar__social__title">follow us:</p>
                            <?php include __DIR__ . '/social.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="main-header main-header--three sticky-header sticky-header--one-page">
            <div class="container">
                <div class="main-header__inner">
                    <div class="main-header__logo">
                        <a href="index.php">
                            <img src="assets/images/jolly-2x.png?v=<?= filemtime(__DIR__ . '/../assets/images/jolly-2x.png') ?>" srcset="assets/images/jolly-2x.png?v=<?= filemtime(__DIR__ . '/../assets/images/jolly-2x.png') ?> 1x, assets/images/jolly.png?v=<?= filemtime(__DIR__ . '/../assets/images/jolly.png') ?> 2x" alt="<?= e($site['name']) ?> logo" width="255" height="58">
                        </a>
                    </div>
                    <nav class="main-header__nav main-menu">
                        <ul class="main-menu__list">
                            <li class="<?= $current === 'home' ? 'current' : '' ?>"><a href="index.php">Home</a></li>
                            <li class="<?= $current === 'about' ? 'current' : '' ?>"><a href="about.php">About</a></li>
                            <li class="dropdown <?= (strpos($current, 'service') === 0) ? 'current' : '' ?>">
                                <a href="service-accounting-bookkeeping.php">Services</a>
                                <ul>
                                    <li><a href="service-accounting-bookkeeping.php">Accounting &amp; Bookkeeping</a></li>
                                    <li><a href="service-income-tax-gst.php">Income Tax &amp; GST</a></li>
                                    <li><a href="service-audit-assurance.php">Audit &amp; Assurance</a></li>
                                    <li><a href="service-business-advisory.php">Business Advisory</a></li>
                                    <li><a href="service-compliance-services.php">Compliance Services</a></li>
                                    <li><a href="service-startup-registration.php">Startup &amp; Company Registration</a></li>
                                </ul>
                            </li>
                            <li class="<?= $current === 'blogs' ? 'current' : '' ?>"><a href="blogs.php">Blogs</a></li>
                            <li class="<?= $current === 'contact' ? 'current' : '' ?>"><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="main-header__right">
                        <div class="mobile-nav__btn mobile-nav__toggler">
                            <span></span><span></span><span></span>
                        </div>
                       
                        <a href="contact.php" class="main-header__btn findox-btn">
                            <span class="findox-btn__text">Enquire Now</span>
                            <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                        </a>
                        <div class="main-header__call">
                            <span class="main-header__call__icon"><i class="icon-phone-call"></i></span>
                            <div class="main-header__call__content">
                                <h4 class="main-header__call__title">Get Contact Now</h4>
                                <a href="tel:<?= e($site['phone_link']) ?>" class="main-header__call__number"><?= e($site['phone']) ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
