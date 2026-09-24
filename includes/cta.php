<?php /** Reusable call-to-action band (dynamic contact info). */ ?>
<section class="site-cta section-space">
    <div class="container">
        <div class="site-cta__box" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1300">
            <div class="site-cta__text">
                <h2 class="site-cta__title">Ready to get your accounts &amp; taxes in order?</h2>
                <p>Call <a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a>, email <a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a> or message us on WhatsApp &mdash; we will get back to you promptly.</p>
            </div>
            <div class="site-cta__actions">
                <a href="<?= e(whatsapp_link('Hello ' . $site['name'] . ', I would like to book a consultation.')) ?>" target="_blank" rel="noopener" class="findox-btn findox-btn--white">
                    <span class="findox-btn__text"><i class="fab fa-whatsapp"></i> WhatsApp Us</span>
                </a>
                <a href="contact.php" class="findox-btn">
                    <span class="findox-btn__text">Contact Page</span>
                </a>
            </div>
        </div>
    </div>
</section>
