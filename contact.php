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
ob_start();
?>

<section class="contact-one contact-one--page section-space">
    <div class="contact-one__bg">
        <img src="assets/images/shapes/contact-shape-1-2.png" alt="" class="contact-one__bg__shape">
    </div>
    <div class="container">
        <div class="row gutter-y-40">
            <div class="col-xl-5 col-lg-6">
                <div class="contact-one__content">
                    <div class="sec-title">
                        <div class="sec-title__top" style="--tagline-bg: #FFFFFF">
                            <img src="assets/images/shapes/sec-title-shape-1-1.png" alt="" class="sec-title__shape">
                            <p class="sec-title__tagline">Get In Touch</p>
                        </div>
                        <h2 class="sec-title__title" style="--title-color: #FFFFFF">Book a Consultation <br> or Request a Quote.</h2>
                    </div>
                    <ul class="contact-one__info list-unstyled">
                        <li>
                            <div class="contact-one__info__inner">
                                <span class="contact-one__info__icon"><i class="icon-phone-call"></i></span>
                                <div class="contact-one__info__content">
                                    <h4 class="contact-one__info__title">Call Us</h4>
                                    <a href="tel:<?= e($site['phone_link']) ?>" class="contact-one__info__text"><?= e($site['phone']) ?></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-one__info__inner">
                                <span class="contact-one__info__icon"><i class="icon-mail"></i></span>
                                <div class="contact-one__info__content">
                                    <h4 class="contact-one__info__title">Send Us Email</h4>
                                    <a href="mailto:<?= e($site['email']) ?>" class="contact-one__info__text"><?= e($site['email']) ?></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-one__info__inner">
                                <span class="contact-one__info__icon"><i class="icon-round-arrow"></i></span>
                                <div class="contact-one__info__content">
                                    <h4 class="contact-one__info__title">Visit Our Office</h4>
                                    <a href="<?= e(map_link()) ?>" target="_blank" rel="noopener" class="contact-one__info__text"><?= e($site['address']) ?></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="contact-one__info__inner">
                                <span class="contact-one__info__icon"><i class="far fa-clock"></i></span>
                                <div class="contact-one__info__content">
                                    <h4 class="contact-one__info__title">Office Hours</h4>
                                    <span class="contact-one__info__text"><?= e($site['hours']) ?></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
                <div class="contact-one__form">
                    <form id="whatsappForm" class="form-one" data-whatsapp="<?= e($site['whatsapp']) ?>" data-brand="<?= e($site['name']) ?>" novalidate>
                        <div class="form-one__group">
                            <div class="form-one__control form-one__control--full">
                                <input type="text" name="name" placeholder="Your Name *" required autocomplete="name">
                            </div>
                            <div class="form-one__control">
                                <input type="tel" name="phone" placeholder="Your Phone *" required autocomplete="tel">
                            </div>
                            <div class="form-one__control">
                                <input type="email" name="email" placeholder="Your Email" autocomplete="email">
                            </div>
                            <div class="form-one__control form-one__control--full">
                                <select class="selectpicker" name="service" aria-label="Select service">
                                    <option value="">Select Service</option>
                                    <?php foreach ($services as $s): ?>
                                        <option value="<?= e($s['title']) ?>"><?= e($s['title']) ?></option>
                                    <?php endforeach; ?>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-one__control form-one__control--full">
                                <textarea name="message" placeholder="How can we help you? *" rows="4" required></textarea>
                            </div>
                            <div class="form-one__control form-one__control--full">
                                <button type="submit" class="findox-btn findox-btn--base">
                                    <span class="findox-btn__text"><i class="fab fa-whatsapp"></i> SEND VIA WHATSAPP</span>
                                    <span class="findox-btn__icon"><i class="icon-arrow-right-2"></i><i class="icon-arrow-right-2"></i></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="result wa-result" id="waResult" role="status" aria-live="polite"></div>
                    <p class="wa-note">Your enquiry opens in WhatsApp so you can review and send it to us.</p>
                </div>
            </div>
        </div>
    </div>
    <img src="assets/images/resources/contact-1-1.png" alt="" class="contact-one__image">
</section>

<section class="google-map google-map__contact">
    <iframe title="Jolly & Co. location map" src="<?= e(map_embed_url()) ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
</section>

<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
?>
