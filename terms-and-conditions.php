<?php
require_once __DIR__ . '/config.php';

$current = 'terms-and-conditions';
$seo = [
    'title'       => 'Terms and Conditions | Jolly & Co. Chartered Accountants, New Delhi',
    'description' => 'Review the Terms and Conditions of Jolly & Co. Chartered Accountants. Understand the scope of professional services, client responsibilities, fee structures, and engagement guidelines.',
    'keywords'    => 'terms and conditions, CA engagement terms, client responsibilities, Jolly & Co terms, chartered accountant Delhi terms of service',
    'path'        => 'terms-and-conditions.php',
];
$pageHeading = 'Terms & Conditions';
$breadcrumbParent = ['title' => 'Home', 'url' => 'index.php'];

$lastUpdated = 'September 2026';
$waLink = whatsapp_link('Hello ' . $site['name'] . ', I have a query regarding your Terms and Conditions.');

ob_start();
?>

<section class="legal-page-section">
    <div class="container">
        <div class="row gutter-y-40">
            <!-- Main Content Card -->
            <div class="col-xl-8 col-lg-7">
                <div class="legal-content-card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="legal-meta-badge">
                        <i class="fas fa-file-contract"></i> Last Updated: <?= e($lastUpdated) ?>
                    </div>

                    <h1 class="legal-title">Terms &amp; Conditions of Engagement</h1>
                    <p class="legal-intro">
                        Welcome to <strong><?= e($site['full_name']) ?></strong> ("Firm", "we", "our", or "us"). By accessing or utilizing our website (<strong><?= e(site_base_url()) ?></strong>), requesting a consultation, or formally engaging our firm for Chartered Accountancy, audit, taxation, and business compliance services, you agree to comply with and be bound by the following Terms and Conditions. Please review them carefully.
                    </p>

                    <div class="legal-highlight-box">
                        <p>
                            <strong>Professional Standards:</strong> All professional services rendered by <?= e($site['name']) ?> are governed by the <em>Chartered Accountants Act, 1949</em>, the Code of Ethics, and standard auditing guidelines prescribed by the <strong>Institute of Chartered Accountants of India (ICAI)</strong>.
                        </p>
                    </div>

                    <!-- Section 1 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">1</span>
                        Scope of Professional Services
                    </h2>
                    <p class="legal-text">
                        <?= e($site['name']) ?> provides professional Chartered Accountancy and advisory services, including but not limited to:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Accounting &amp; Bookkeeping:</strong> Day-to-day accounts maintenance, bank reconciliations, ledger scrutiny, and MIS reports.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Taxation &amp; Filing:</strong> Income Tax Return (ITR) filing, GST registration &amp; return filings, TDS returns, and tax planning.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Audit &amp; Assurance:</strong> Statutory audit under the Companies Act, Tax Audit under Section 44AB of the Income-tax Act, internal audits, and stock verification.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Corporate Compliance:</strong> ROC/MCA annual filings, Director KYC, startup registrations, MSME/Udyam, and trademark assistance.
                        </li>
                    </ul>
                    <p class="legal-text">
                        The specific scope, deliverables, and fees for any engagement will be established through an official Engagement Letter, proposal, or written service confirmation mutually agreed upon between the client and our firm.
                    </p>

                    <!-- Section 2 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">2</span>
                        Client Responsibilities &amp; Document Accuracy
                    </h2>
                    <p class="legal-text">
                        The accuracy and timeliness of our statutory filings, audit opinions, and tax calculations depend directly on the authentic records provided by you. By engaging us, you agree to:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Provide complete, accurate, authentic, and unadulterated invoices, bank statements, ledgers, vouchers, and statutory notices.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Ensure that documents and information required for statutory deadlines (e.g., monthly GST return filing, advance tax computation, ITR due dates) are furnished well in advance of official government cut-off dates.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Inform us promptly of any changes in your business operations, shareholding, directorship, registered address, or banking arrangements.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Safeguard your primary portal credentials (passwords, OTPs, Digital Signature Certificates / DSC tokens) and share them only through authorized, secure channels when required for e-filing.
                        </li>
                    </ul>

                    <!-- Section 3 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">3</span>
                        Professional Fees, Taxes &amp; Out-of-Pocket Expenses
                    </h2>
                    <p class="legal-text">
                        Our fee structure is transparent and discussed prior to the commencement of any assignment:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Professional Fees:</strong> Billed on an assignment basis, monthly retainer, or milestone completion as agreed in writing.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Government Fees &amp; Taxes:</strong> Statutory government fees (such as MCA filing fees, stamp duty, trademark fees, GST/TDS challans, and advance tax payments) are strictly payable by the client and are not included in our professional fees.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Applicable Taxes:</strong> Goods &amp; Services Tax (GST) will be charged on our professional invoices as applicable under prevailing tax laws.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Payment Timelines:</strong> Invoices are payable upon receipt or within the credit period specified. We reserve the right to suspend pending work or portal submissions if bills remain unpaid after reminders.
                        </li>
                    </ul>

                    <!-- Section 4 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">4</span>
                        Confidentiality &amp; Non-Disclosure
                    </h2>
                    <p class="legal-text">
                        <?= e($site['name']) ?> treats all client files, financial transactions, business strategies, and proprietary information with utmost confidentiality. No client information will be disclosed to third parties without your prior written consent, except where mandated by statutory authorities or judicial orders under Indian law.
                    </p>

                    <!-- Section 5 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">5</span>
                        Website Content &amp; Informational Disclaimer
                    </h2>
                    <p class="legal-text">
                        The content published on this website—including articles, blog posts, guides, FAQs, and compliance updates—is provided solely for general educational and informational awareness:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            It does not constitute formal tax, legal, or audit advice, nor does browsing this site create a Chartered Accountant–Client relationship.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Tax regulations and notifications change frequently. While we strive to maintain accurate information, we advise clients and visitors to obtain personalized professional counsel tailored to their unique circumstances before taking financial or legal action.
                        </li>
                    </ul>

                    <!-- Section 6 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">6</span>
                        Limitation of Liability
                    </h2>
                    <p class="legal-text">
                        To the maximum extent permitted by applicable law:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <?= e($site['name']) ?> shall not be held liable for any statutory late fees, interest, or penalties arising from delayed submission of documents or funds by the client, or for delays caused by official government portal downtimes (such as technical glitches on the Income Tax e-filing portal, GST portal, or MCA V3 system).
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Our liability for any professional claim shall be limited strictly to the professional fee received for the specific assignment giving rise to the claim, unless otherwise governed by mandatory statutory auditing standards under the Companies Act, 2013.
                        </li>
                    </ul>

                    <!-- Section 7 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">7</span>
                        Intellectual Property
                    </h2>
                    <p class="legal-text">
                        All logos, trademarks, website layouts, custom graphics, text content, and proprietary computational templates displayed on this website are the intellectual property of <?= e($site['name']) ?> and are protected under Indian copyright and trademark legislation. Unauthorized copying, modification, or distribution is prohibited without prior written permission.
                    </p>

                    <!-- Section 8 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">8</span>
                        Termination of Services
                    </h2>
                    <p class="legal-text">
                        Either party may terminate an ongoing engagement by providing written notice in accordance with the terms of the engagement letter, subject to settlement of all outstanding professional dues. Upon termination, client-owned documents and statutory records will be promptly returned, subject to statutory retention guidelines.
                    </p>

                    <!-- Section 9 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">9</span>
                        Governing Law &amp; Jurisdiction
                    </h2>
                    <p class="legal-text">
                        These Terms and Conditions and any dispute or claim arising out of or in connection with them or our professional engagements shall be governed by and construed in accordance with the <strong>laws of India</strong>. The courts and competent tribunals at <strong>New Delhi, India</strong> shall have exclusive jurisdiction over all matters.
                    </p>

                    <!-- Contact & Grievance Box -->
                    <div class="legal-contact-box">
                        <h3>Contact for Engagement Enquiries</h3>
                        <p>
                            For inquiries concerning our engagement terms, service proposals, or compliance matters, please reach out to our registered office:
                        </p>
                        <div class="legal-contact-details">
                            <div class="legal-contact-item">
                                <i class="fas fa-map-marker-alt"></i>
                                <span><?= e($site['address']) ?></span>
                            </div>
                            <div class="legal-contact-item">
                                <i class="fas fa-phone-alt"></i>
                                <span><a href="tel:<?= e($site['phone_link']) ?>"><?= e($site['phone']) ?></a></span>
                            </div>
                            <?php if (!empty($site['email'])): ?>
                            <div class="legal-contact-item">
                                <i class="fas fa-envelope"></i>
                                <span><a href="mailto:<?= e($site['email']) ?>"><?= e($site['email']) ?></a></span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Sidebar -->
            <div class="col-xl-4 col-lg-5">
                <div class="legal-sidebar">
                    <!-- Legal Navigation Card -->
                    <div class="legal-nav-card" data-aos="fade-up" data-aos-duration="1000">
                        <h4 class="legal-nav-card__title">Legal &amp; Policies</h4>
                        <ul class="legal-nav-list">
                            <li>
                                <a href="privacy-policy.php">
                                    <span>Privacy Policy</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                            <li class="current">
                                <a href="terms-and-conditions.php">
                                    <span>Terms &amp; Conditions</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="contact.php">
                                    <span>Contact &amp; Support</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="sitemap.php" target="_blank">
                                    <span>XML Sitemap</span>
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Direct Support Card -->
                    <div class="service-sidebar-widget service-sidebar-widget--contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                        <div class="service-sidebar-widget__glow"></div>
                        <div class="service-sidebar-widget__badge">
                            <i class="fas fa-balance-scale"></i> Ethical &amp; Transparent
                        </div>
                        <h3 class="service-sidebar-widget__title">Have a Question on Our Terms?</h3>
                        <p class="service-sidebar-widget__text">
                            We believe in complete transparency with our clients. Reach out to our team in Kalkaji, New Delhi for any engagement questions.
                        </p>
                        
                        <div class="service-sidebar-widget__links">
                            <a href="tel:<?= e($site['phone_link']) ?>" class="service-sidebar-widget__call">
                                <span class="service-sidebar-widget__icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="service-sidebar-widget__call-info">
                                    <small>Direct CA Helpline</small>
                                    <strong><?= e($site['phone']) ?></strong>
                                </span>
                            </a>
                            <a href="<?= e($waLink) ?>" target="_blank" rel="noopener" class="service-sidebar-widget__btn-wa">
                                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>

                        <div class="service-sidebar-widget__footer">
                            <i class="far fa-clock"></i> <?= e($site['hours']) ?>
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
