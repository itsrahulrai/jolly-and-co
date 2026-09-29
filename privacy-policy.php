<?php
require_once __DIR__ . '/config.php';

$current = 'privacy-policy';
$seo = [
    'title'       => 'Privacy Policy | Jolly & Co. Chartered Accountants, New Delhi',
    'description' => 'Read the Privacy Policy of Jolly & Co. Chartered Accountants. Learn how we safeguard client financial records, personal data, and maintain strict confidentiality in accordance with ICAI standards and Indian data protection laws.',
    'keywords'    => 'privacy policy, CA client confidentiality, data protection, Jolly & Co privacy, chartered accountant Delhi privacy, financial data security',
    'path'        => 'privacy-policy.php',
];
$pageHeading = 'Privacy Policy';
$breadcrumbParent = ['title' => 'Home', 'url' => 'index.php'];

$lastUpdated = 'September 2026';
$waLink = whatsapp_link('Hello ' . $site['name'] . ', I have a query regarding your Privacy Policy.');

ob_start();
?>

<section class="legal-page-section">
    <div class="container">
        <div class="row gutter-y-40">
            <!-- Main Content Card -->
            <div class="col-xl-8 col-lg-7">
                <div class="legal-content-card" data-aos="fade-up" data-aos-duration="1000">
                    <div class="legal-meta-badge">
                        <i class="fas fa-shield-alt"></i> Last Updated: <?= e($lastUpdated) ?>
                    </div>

                    <h1 class="legal-title">Privacy Policy &amp; Data Protection</h1>
                    <p class="legal-intro">
                        At <strong><?= e($site['full_name']) ?></strong> ("we", "our", or "us"), we value your trust and are steadfast in protecting your privacy and confidential financial information. This Privacy Policy outlines our practices regarding the collection, handling, processing, and safeguarding of information obtained when you visit our website (<strong><?= e(site_base_url()) ?></strong>) or engage our firm for Chartered Accountancy, taxation, audit, or business advisory services.
                    </p>

                    <div class="legal-highlight-box">
                        <p>
                            <strong>Professional Secrecy &amp; Ethics:</strong> As Chartered Accountants governed by the <em>Chartered Accountants Act, 1949</em> and the regulations of the <strong>Institute of Chartered Accountants of India (ICAI)</strong>, we uphold the highest standard of professional ethics, integrity, and strict client confidentiality.
                        </p>
                    </div>

                    <!-- Section 1 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">1</span>
                        Information We Collect
                    </h2>
                    <p class="legal-text">
                        Depending on the nature of your interaction and the professional services requested, we may collect the following categories of information:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Personal Identification Information:</strong> Full name, email address, mobile phone number, residential or business address, and designation.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Statutory &amp; Identification Records:</strong> Permanent Account Number (PAN), Goods &amp; Services Tax Identification Number (GSTIN), Aadhaar details / Virtual ID (for e-verification purposes), Corporate Identification Number (CIN), Director Identification Number (DIN), and Digital Signature Certificate (DSC) credentials when authorized.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Financial &amp; Business Data:</strong> Bank account statements, financial ledgers, balance sheets, invoices, purchase and sales registers, payroll information, and previous years' tax returns necessary for bookkeeping, audit, or filing.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Website Usage Data:</strong> IP address, browser type, operating system, pages visited, and general browsing statistics gathered through standard server logs and cookies to improve website performance.
                        </li>
                    </ul>

                    <!-- Section 2 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">2</span>
                        How We Use Your Information
                    </h2>
                    <p class="legal-text">
                        We process client information strictly for legitimate professional and statutory purposes, including:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Preparing, calculating, and submitting statutory returns on official government portals (such as the Income Tax e-Filing Portal, GST Portal, MCA/ROC Portal, and TRACES).
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Conducting statutory audits, tax audits, internal audits, and stock audits as mandated under Indian laws.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Maintaining day-to-day accounting, bank reconciliations, ledger books, and monthly MIS reports.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Assisting with company formation, LLP incorporation, MSME/Udyam registrations, and trademark filings.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Communicating important compliance deadlines, statutory updates, tax changes, and responding to your enquiries.
                        </li>
                    </ul>

                    <!-- Section 3 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">3</span>
                        Non-Disclosure &amp; Information Sharing
                    </h2>
                    <p class="legal-text">
                        We <strong>never sell, lease, rent, or trade</strong> your personal or financial data to any third party for marketing or advertising purposes. Your information is shared only under the following specific circumstances:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Statutory Authorities:</strong> With the Income Tax Department, Central Board of Indirect Taxes and Customs (CBIC), Ministry of Corporate Affairs (MCA), Reserve Bank of India (RBI), or judicial bodies when legally mandated or instructed by you for compliance filing.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Authorized Personnel:</strong> Internal team members, article assistants, and technical specialists bound by non-disclosure and professional confidentiality agreements.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Client Authorization:</strong> With banks, financial institutions, or prospective investors only upon your explicit written authorization or request.
                        </li>
                    </ul>

                    <!-- Section 4 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">4</span>
                        Data Security &amp; Storage Measures
                    </h2>
                    <p class="legal-text">
                        We employ multi-layered technical, administrative, and physical security measures to safeguard your electronic documents and physical records:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>SSL/TLS Encryption:</strong> Our website uses active SSL encryption to ensure that any enquiry or message sent through our contact forms is transmitted securely.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Restricted Access:</strong> Client records and accounting files are stored on secure servers with role-based authentication and strong password requirements.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            <strong>Periodic Backups:</strong> Secure encrypted backups are maintained to prevent accidental data loss or disruption.
                        </li>
                    </ul>

                    <!-- Section 5 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">5</span>
                        Record Retention Period
                    </h2>
                    <p class="legal-text">
                        In adherence to statutory requirements under the <em>Income-tax Act, 1961</em>, the <em>Companies Act, 2013</em>, and the <em>Central Goods and Services Tax Act, 2017</em>, books of accounts, return acknowledgments, and audit working papers are retained for the legally prescribed statutory duration (typically 6 to 8 financial years). Upon completion of the statutory holding period, documents may be archived or securely disposed of.
                    </p>

                    <!-- Section 6 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">6</span>
                        Your Privacy Rights
                    </h2>
                    <p class="legal-text">
                        As a client or website visitor, you are entitled to:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Request copies of your filed returns, financial statements, and computation sheets prepared by our firm.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Request correction or updating of any inaccurate contact or business information.
                        </li>
                        <li>
                            <i class="fas fa-check-circle"></i>
                            Opt out of receiving periodic compliance newsletters or informational updates at any time by contacting us.
                        </li>
                    </ul>

                    <!-- Section 7 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">7</span>
                        Cookies &amp; Analytics
                    </h2>
                    <p class="legal-text">
                        Our website uses standard essential cookies to deliver a responsive, smooth user experience (such as remembering form states and optimizing loading speeds). We do not deploy intrusive tracking or sell behavioural profiles to ad networks. You may disable cookies in your web browser settings if you prefer, though some website features may operate with reduced functionality.
                    </p>

                    <!-- Section 8 -->
                    <h2 class="legal-section-heading">
                        <span class="legal-section-heading__num">8</span>
                        Changes to This Policy
                    </h2>
                    <p class="legal-text">
                        We may update this Privacy Policy from time to time to reflect amendments in tax laws, regulatory directives from ICAI, or advancements in technology. The revised policy will be posted on this page with the updated effective date.
                    </p>

                    <!-- Contact & Grievance Box -->
                    <div class="legal-contact-box">
                        <h3>Questions or Grievances?</h3>
                        <p>
                            If you have questions regarding this Privacy Policy or wish to exercise your data rights, please contact our office:
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
                            <li class="current">
                                <a href="privacy-policy.php">
                                    <span>Privacy Policy</span>
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                            </li>
                            <li>
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
                            <i class="fas fa-user-shield"></i> Confidentially Assured
                        </div>
                        <h3 class="service-sidebar-widget__title">Need Professional CA Assistance?</h3>
                        <p class="service-sidebar-widget__text">
                            Schedule a one-on-one consultation with our chartered accountants in Kalkaji, South Delhi for reliable tax &amp; compliance support.
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
