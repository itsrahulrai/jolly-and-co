<?php
require_once __DIR__ . '/config.php';

$current = 'contact';
$seo = [
    'title'       => 'Contact Us | Jolly & Co. Chartered Accountants, Kalkaji New Delhi',
    'description' => 'Contact Jolly & Co. Chartered Accountants at Kalkaji Extension, New Delhi. Call, email or send your enquiry directly to our WhatsApp for accounting, tax, audit and compliance help.',
    'keywords'    => 'contact chartered accountant Delhi, CA Kalkaji contact, WhatsApp CA consultation, Jolly & Co contact',
    'path'        => 'contact.php',
];
$pageHeading = 'Contact Us';

$extra_css = '<link rel="stylesheet" href="assets/css/contact-modern.css?v=' . (file_exists(__DIR__ . '/assets/css/contact-modern.css') ? filemtime(__DIR__ . '/assets/css/contact-modern.css') : time()) . '">';

ob_start();
?>

<!-- =========================================================================
     Modern Contact Section matching Design Mockup
     ========================================================================= -->
<section class="modern-contact-section">
    <!-- Background Decor Elements -->
    <div class="modern-contact-section__bg-building"></div>
    <div class="modern-contact-section__rings"></div>
    <div class="modern-contact-section__green-glow"></div>
    <div class="modern-contact-section__green-wave"></div>
    <div class="modern-contact-section__dots"></div>

    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Heading & Contact Info Cards -->
            <div class="col-xl-5 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <div class="modern-contact-hero">
                    <div class="modern-contact-badge">
                        <span class="modern-contact-badge__slashes">//</span> GET IN TOUCH
                    </div>

                    <h1 class="modern-contact-hero__title">
                        Book a Consultation <br>or <span class="modern-contact-hero__highlight">Request a Quote.</span>
                    </h1>

                    <p class="modern-contact-hero__desc">
                        Share your requirements and our expert team will get back to you with the best solution.
                    </p>

                    <div class="modern-contact-hero__divider"></div>

                    <!-- 4 Contact Info Pill Cards -->
                    <div class="modern-contact-cards">
                        <!-- 1. Phone -->
                        <a href="tel:<?= e($site['phone_link']) ?>" class="modern-info-card">
                            <div class="modern-info-card__left">
                                <div class="modern-info-card__icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="modern-info-card__details">
                                    <span class="modern-info-card__title">Call Us</span>
                                    <span class="modern-info-card__value"><?= e($site['phone']) ?></span>
                                </div>
                            </div>
                            <div class="modern-info-card__arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>

                        <!-- 2. Email -->
                        <a href="mailto:<?= e($site['email']) ?>" class="modern-info-card">
                            <div class="modern-info-card__left">
                                <div class="modern-info-card__icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="modern-info-card__details">
                                    <span class="modern-info-card__title">Send Us Email</span>
                                    <span class="modern-info-card__value"><?= e($site['email']) ?></span>
                                </div>
                            </div>
                            <div class="modern-info-card__arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>

                        <!-- 3. Address / Office -->
                        <a href="<?= e(map_link()) ?>" target="_blank" rel="noopener" class="modern-info-card">
                            <div class="modern-info-card__left">
                                <div class="modern-info-card__icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="modern-info-card__details">
                                    <span class="modern-info-card__title">Visit Our Office</span>
                                    <span class="modern-info-card__value"><?= e($site['address']) ?></span>
                                </div>
                            </div>
                            <div class="modern-info-card__arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>

                        <!-- 4. Office Hours -->
                        <div class="modern-info-card">
                            <div class="modern-info-card__left">
                                <div class="modern-info-card__icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div class="modern-info-card__details">
                                    <span class="modern-info-card__title">Office Hours</span>
                                    <span class="modern-info-card__value"><?= e($site['hours']) ?></span>
                                </div>
                            </div>
                            <div class="modern-info-card__arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: White Floating Form Card & Doodle -->
            <div class="col-xl-7 col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="modern-contact-form-wrap">
                    <!-- White Card -->
                    <div class="modern-form-card">
                        <div class="modern-form-card__bar"></div>
                        <h2 class="modern-form-card__title">
                            Send Us a <span class="modern-form-card__highlight">Message</span>
                        </h2>
                        <p class="modern-form-card__subtitle">
                            Fill in the details below and we'll get back to you shortly.
                        </p>

                        <form id="whatsappForm" data-whatsapp="<?= e($site['whatsapp']) ?>" data-brand="<?= e($site['name']) ?>" novalidate>
                            <!-- Name -->
                            <div class="mb-3">
                                <div class="modern-input-wrap">
                                    <i class="far fa-user modern-input-icon"></i>
                                    <input type="text" name="name" class="modern-input" placeholder="Your Name *" required autocomplete="name">
                                </div>
                            </div>

                            <!-- Phone & Email in 2 columns -->
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="modern-input-wrap">
                                        <i class="fas fa-phone-alt modern-input-icon"></i>
                                        <input type="tel" name="phone" class="modern-input" placeholder="Your Phone *" required autocomplete="tel">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="modern-input-wrap">
                                        <i class="far fa-envelope modern-input-icon"></i>
                                        <input type="email" name="email" class="modern-input" placeholder="Your Email" autocomplete="email">
                                    </div>
                                </div>
                            </div>

                            <!-- Service Dropdown -->
                            <div class="mb-3">
                                <div class="modern-input-wrap">
                                    <i class="fas fa-th-large modern-input-icon"></i>
                                    <select name="service" class="modern-input modern-select" aria-label="Select service">
                                        <option value="">Select Service</option>
                                        <?php foreach ($services as $s): ?>
                                            <option value="<?= e($s['title']) ?>"><?= e($s['title']) ?></option>
                                        <?php endforeach; ?>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="fas fa-chevron-down modern-select-arrow"></i>
                                </div>
                            </div>

                            <!-- Message Textarea -->
                            <div class="mb-4">
                                <div class="modern-input-wrap">
                                    <i class="far fa-comment-dots modern-input-icon modern-input-icon--textarea"></i>
                                    <textarea name="message" class="modern-input modern-textarea" placeholder="How can we help you? *" rows="3" required></textarea>
                                </div>
                            </div>

                            <!-- WhatsApp Submit Pill Button -->
                            <button type="submit" class="modern-wa-submit">
                                <div class="modern-wa-submit__text">
                                    <i class="fab fa-whatsapp"></i>
                                    <span>SEND VIA WHATSAPP &rarr;</span>
                                </div>
                                <div class="modern-wa-submit__arrow">
                                    <i class="fas fa-arrow-right"></i>
                                </div>
                            </button>

                            <!-- Trust note with lock -->
                            <p class="modern-wa-note">
                                <i class="fas fa-lock"></i>
                                <span>Your enquiry opens in WhatsApp so you can review and send it to us.</span>
                            </p>

                            <!-- Form Result Container -->
                            <div class="result wa-result" id="waResult" role="status" aria-live="polite"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     Bottom Trust Ribbon (4 Features)
     ========================================================================= -->
<section class="modern-contact-ribbon">
    <div class="container">
        <div class="row g-0">
            <!-- 1. Quick Response -->
            <div class="col-12 col-sm-6 col-lg-3 modern-contact-ribbon__col">
                <div class="modern-trust-badge">
                    <div class="modern-trust-badge__icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="modern-trust-badge__info">
                        <h4 class="modern-trust-badge__title">Quick Response</h4>
                        <p class="modern-trust-badge__desc">We reply within 24 hours</p>
                    </div>
                </div>
            </div>

            <!-- 2. Expert Guidance -->
            <div class="col-12 col-sm-6 col-lg-3 modern-contact-ribbon__col">
                <div class="modern-trust-badge">
                    <div class="modern-trust-badge__icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="modern-trust-badge__info">
                        <h4 class="modern-trust-badge__title">Expert Guidance</h4>
                        <p class="modern-trust-badge__desc">Talk to our specialists</p>
                    </div>
                </div>
            </div>

            <!-- 3. Customized Solutions -->
            <div class="col-12 col-sm-6 col-lg-3 modern-contact-ribbon__col">
                <div class="modern-trust-badge">
                    <div class="modern-trust-badge__icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <div class="modern-trust-badge__info">
                        <h4 class="modern-trust-badge__title">Customized Solutions</h4>
                        <p class="modern-trust-badge__desc">As per your business needs</p>
                    </div>
                </div>
            </div>

            <!-- 4. Trusted by Businesses -->
            <div class="col-12 col-sm-6 col-lg-3 modern-contact-ribbon__col">
                <div class="modern-trust-badge">
                    <div class="modern-trust-badge__icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="modern-trust-badge__info">
                        <h4 class="modern-trust-badge__title">Trusted by Businesses</h4>
                        <p class="modern-trust-badge__desc">500+ happy clients</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================================
     Google Map Section
     ========================================================================= -->
<section class="google-map google-map__contact">
    <iframe title="Jolly & Co. location map" src="<?= e(map_embed_url()) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
?>
