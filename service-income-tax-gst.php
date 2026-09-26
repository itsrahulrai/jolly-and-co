<?php
/**
 * service-income-tax-gst.php
 * Income Tax & GST Services | Jolly & Co. Chartered Accountants
 */
require_once __DIR__ . '/config.php';

$current = 'service-income-tax-gst';
$seo = [
    'title'       => 'Income Tax & GST Return Filing, Notice Handling & Planning in Delhi | Jolly & Co.',
    'description' => 'Expert Income Tax return (ITR) filing, GST registration, monthly GSTR-1/3B filing, scrutiny notice replies and strategic tax planning by Jolly & Co. Chartered Accountants in Kalkaji, New Delhi.',
    'keywords'    => 'Income Tax filing Delhi, GST return filing Kalkaji, tax consultant New Delhi, ITR filing CA, GST notice reply, tax audit 44AB, advance tax Delhi',
    'path'        => 'service-income-tax-gst.php',
];
$pageHeading = 'Income Tax & GST';
$breadcrumbParent = ['title' => 'Services', 'url' => 'service-accounting-bookkeeping.php'];

$waServiceLink = whatsapp_link('Hello ' . $site['name'] . ', I would like to consult with you regarding Income Tax & GST services.');

ob_start();
?>

<section class="service-details section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <!-- Left Sticky Sidebar (on mobile displayed last) -->
            <div class="col-xl-4 col-lg-5 order-2 order-lg-1">
                <div class="service-details__sidebar">
                    <!-- All Services Navigation -->
                    <div class="service-details__pages" data-aos="fade-up" data-aos-duration="1200">
                        <h3 class="service-details__pages__title">Our CA Services</h3>
                        <ul class="service-details__nav list-unstyled">
                            <li>
                                <a href="service-accounting-bookkeeping.php">
                                    <span>Accounting &amp; Bookkeeping</span>
                                    <span class="service-details__nav__icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="current">
                                <a href="service-income-tax-gst.php">
                                    <span>Income Tax &amp; GST</span>
                                    <span class="service-details__nav__icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="service-audit-assurance.php">
                                    <span>Audit &amp; Assurance</span>
                                    <span class="service-details__nav__icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="service-business-advisory.php">
                                    <span>Business Advisory</span>
                                    <span class="service-details__nav__icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="service-compliance-services.php">
                                    <span>Compliance Services</span>
                                    <span class="service-details__nav__icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="service-startup-registration.php">
                                    <span>Startup &amp; Company Registration</span>
                                    <span class="service-details__nav__icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Direct CA Consultation Box Widget -->
                    <div class="service-sidebar-widget service-sidebar-widget--contact" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="100">
                        <div class="service-sidebar-widget__glow"></div>
                        <div class="service-sidebar-widget__badge">
                            <i class="fas fa-user-tie"></i> Tax &amp; GST Expert Assistance
                        </div>
                        <h3 class="service-sidebar-widget__title">Have Tax or Notice Questions?</h3>
                        <p class="service-sidebar-widget__text">
                            Received an Income Tax or GST demand notice? Need to file returns before the deadline? Consult directly with our tax CAs.
                        </p>
                        
                        <div class="service-sidebar-widget__links">
                            <a href="tel:<?= e($site['phone_link']) ?>" class="service-sidebar-widget__call">
                                <span class="service-sidebar-widget__icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="service-sidebar-widget__call-info">
                                    <small>Call Our Tax Desk</small>
                                    <strong><?= e($site['phone']) ?></strong>
                                </span>
                            </a>
                            <a href="<?= e($waServiceLink) ?>" target="_blank" rel="noopener" class="service-sidebar-widget__btn-wa">
                                <i class="fab fa-whatsapp"></i> Chat on WhatsApp
                            </a>
                        </div>

                        <div class="service-sidebar-widget__footer">
                            <i class="far fa-clock"></i> <?= e($site['hours']) ?>
                        </div>
                    </div>

                    <!-- Fast Callback Request Box -->
                    <div class="service-sidebar-widget service-sidebar-widget--callback" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="service-sidebar-widget__inner">
                            <span class="service-sidebar-widget__sub">Maximize Deductions Legally</span>
                            <h4 class="service-sidebar-widget__heading">Request Tax Assessment Review</h4>
                            <p class="service-sidebar-widget__desc">Compare Old vs. New Tax Regime and verify all eligible deductions before filing your returns.</p>
                            <a href="contact.php?service=Income+Tax+%26+GST" class="findox-btn findox-btn--base w-100 justify-content-center text-center">
                                <span class="findox-btn__text">Contact Us Today</span>
                                <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Main Content Area (on mobile displayed first) -->
            <div class="col-xl-8 col-lg-7 order-1 order-lg-2">
                <div class="service-details__main">
                    <!-- Featured Hero Image -->
                    <div class="service-details__image" data-aos="fade-up" data-aos-duration="1300">
                        <img src="assets/images/services/service-d-2.jpg" alt="Income Tax and GST Services - Jolly &amp; Co." class="service-details__hero-img" loading="lazy">
                    </div>

                    <!-- Main Service Content -->
                    <div class="service-details__content">
                        <div class="service-details__tag" data-aos="fade-up">
                            <span class="service-details__tag-bar"></span>
                            <span class="service-details__tag-text"><i class="icon-agreement"></i> Direct &amp; Indirect Taxation</span>
                        </div>

                        <h2 class="service-details__title" data-aos="fade-up" data-aos-delay="100">
                            Strategic Direct &amp; Indirect Tax Compliance, Advance Planning &amp; Timely Notice Replies
                        </h2>

                        <!-- In-Depth Overview -->
                        <div class="service-details__text-group" data-aos="fade-up" data-aos-delay="150">
                            <p class="service-details__text">
                                India’s direct and indirect tax systems undergo frequent legislative amendments, notifications, and judicial precedents. Without structured tax planning and rigorous adherence to statutory deadlines, individuals and businesses risk severe penalties, compounding interest, loss of input tax credit (ITC), and unwarranted tax notices.
                            </p>
                            <p class="service-details__text">
                                Jolly &amp; Co. provides full-spectrum Income Tax and Goods &amp; Services Tax (GST) solutions in Kalkaji, New Delhi. From filing accurate annual returns and quarterly GST compliance to representing clients in departmental scrutiny, reassessments (Section 148), and appellate proceedings, our chartered accountants ensure you remain fully compliant while legally optimizing your overall tax liability.
                            </p>
                        </div>

                        <!-- Scope of Work & Deliverables -->
                        <div class="service-details__block service-details__block--scope" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-tasks"></i></span>
                                Comprehensive Scope of Work
                            </h3>
                            <p class="service-details__subtext">Our end-to-end direct and indirect taxation deliverables include:</p>
                            <div class="service-details__scope-grid">
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Income Tax Returns (ITR-1 to ITR-7) for salaried, HNIs, firms &amp; corporates</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Comparative simulation between Old and New Tax Regimes to maximize savings</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Advance tax computation, quarterly installment planning &amp; interest minimization</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Capital gains tax computation on real estate, listed shares, mutual funds &amp; crypto</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">GST registration, monthly GSTR-1 &amp; GSTR-3B filings, and GSTR-9/9C reconciliation</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Complete Input Tax Credit (ITC) reconciliation with GSTR-2B to prevent loss</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">TDS/TCS returns (Form 24Q, 26Q, 27Q), 26AS/AIS reconciliation, and Form 15CA/15CB</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Drafting replies to scrutiny notices, 148 reassessment, and GST demand notices</span>
                                </div>
                            </div>
                        </div>

                        <!-- 4 Key Advantages / Why Choose Jolly & Co. -->
                        <div class="service-details__block service-details__block--benefits" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-shield-alt"></i></span>
                                Why Choose Jolly &amp; Co.
                            </h3>
                            <div class="row gutter-y-20">
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-coins"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Maximum Legal Deductions</h4>
                                            <p class="service-benefit-card__desc">We leverage all lawful exemptions, capital gains roll-overs, and deductions to reduce overall tax burden.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-shield-alt"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Zero Penalty Track Record</h4>
                                            <p class="service-benefit-card__desc">Systematic deadline tracking eliminates late filing fees, portal lockouts, and compounding interest.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-search-dollar"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">AIS &amp; Form 26AS Precision</h4>
                                            <p class="service-benefit-card__desc">Pre-validation of every transaction against Income Tax portals prevents mismatch notices.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-gavel"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Experienced CA Representation</h4>
                                            <p class="service-benefit-card__desc">Professional assistance in handling departmental assessments, appeals, and notice resolutions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4-Step Working Methodology / Process -->
                        <div class="service-details__block service-details__block--process" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-layer-group"></i></span>
                                Our 4-Step Working Process
                            </h3>
                            <div class="service-process-timeline">
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 01</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Information Gathering &amp; Portals Sync</h4>
                                        <p class="service-process-card__desc">Downloading and cross-verifying AIS, TIS, Form 26AS, bank statements, and tax credit summaries.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 02</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Tax Optimization &amp; Computation</h4>
                                        <p class="service-process-card__desc">Running comparative regime simulations, validating eligible deductions, and computing net liability.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 03</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Draft Verification &amp; Client Approval</h4>
                                        <p class="service-process-card__desc">Sharing a comprehensive tax computation sheet and draft returns with the client for review and sign-off.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 04</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Portal Filing &amp; ITR-V Verification</h4>
                                        <p class="service-process-card__desc">Filing on official Income Tax/GST portals, securing e-acknowledgments, and tracking refund processing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Service-Specific FAQs -->
                        <div class="service-details__block service-details__block--faqs" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-question-circle"></i></span>
                                Frequently Asked Questions
                            </h3>
                            <div class="accordion service-accordion" id="serviceFaqAccordion">
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq0">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq0" aria-expanded="true" aria-controls="collapseFaq0">
                                            Which tax regime should I choose: Old or New?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq0" class="accordion-collapse collapse show" aria-labelledby="headingFaq0" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            The New Tax Regime offers lower slab rates with no deductions, while the Old Regime allows deductions like 80C, 80D, HRA, and home loan interest. We compute your exact tax liability under both regimes and guide you to the one that maximizes your net savings.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                            What should I do if I receive an Income Tax or GST demand notice?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Do not panic or ignore it. Provide us with a copy of the notice. We analyze the legal grounds, examine supporting documents, compute rectified liabilities if required, and draft a formal statutory response before the due date.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            How can I ensure my business claims 100% of its eligible GST Input Tax Credit?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            We perform monthly matching between your purchase bills and the GSTR-2B generated on the GST portal. We identify missing vendor invoices so you can follow up with non-compliant suppliers before ITC is blocked.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            Do you assist NRIs with Indian tax returns and Form 15CA/CB?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. We assist Non-Resident Indians with capital gains on property sales, DTAA benefits, lower deduction certificates, and Chartered Accountant certification (Form 15CB) for overseas fund repatriation.
                                        </div>
                                    </div>
                                </div>
                            </div>
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
