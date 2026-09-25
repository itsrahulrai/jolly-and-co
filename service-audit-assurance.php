<?php
/**
 * service-audit-assurance.php
 * Audit & Assurance Services | Jolly & Co. Chartered Accountants
 */
require_once __DIR__ . '/config.php';

$current = 'service-audit-assurance';
$seo = [
    'title'       => 'Statutory & Tax Audit, Internal Audit Services in Delhi | Jolly & Co.',
    'description' => 'Independent, thorough and objective statutory audit, tax audit (44AB), internal audit and stock audit services by Jolly & Co. Chartered Accountants in Kalkaji, New Delhi.',
    'keywords'    => 'statutory audit Delhi, tax audit 44AB Kalkaji, internal audit CA firm, stock audit Delhi, UDIN verification, ICAI auditing standards New Delhi',
    'path'        => 'service-audit-assurance.php',
];
$pageHeading = 'Audit & Assurance';
$breadcrumbParent = ['title' => 'Services', 'url' => 'services.php'];

$waServiceLink = whatsapp_link('Hello ' . $site['name'] . ', I would like to consult with you regarding Audit & Assurance services.');

ob_start();
?>

<section class="service-details section-space">
    <div class="container">
        <div class="row gutter-y-50">
            <!-- Left Sticky Sidebar -->
            <div class="col-xl-4 col-lg-5">
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
                            <li>
                                <a href="service-income-tax-gst.php">
                                    <span>Income Tax &amp; GST</span>
                                    <span class="service-details__nav__icon"><i class="fas fa-arrow-right"></i></span>
                                </a>
                            </li>
                            <li class="current">
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
                            <i class="fas fa-user-tie"></i> Audit Partner Assistance
                        </div>
                        <h3 class="service-sidebar-widget__title">Need Audit or Certification?</h3>
                        <p class="service-sidebar-widget__text">
                            Planning your statutory or tax audit? Require ICAI net worth certification or stock audit for bank limits? Connect with our senior auditors.
                        </p>
                        
                        <div class="service-sidebar-widget__links">
                            <a href="tel:<?= e($site['phone_link']) ?>" class="service-sidebar-widget__call">
                                <span class="service-sidebar-widget__icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="service-sidebar-widget__call-info">
                                    <small>Call Our Audit Desk</small>
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
                            <span class="service-sidebar-widget__sub">UDIN Authenticated Reports</span>
                            <h4 class="service-sidebar-widget__heading">Schedule an Audit Scoping Call</h4>
                            <p class="service-sidebar-widget__desc">Share your turnover and audit requirement to receive an audit timeline and document readiness checklist.</p>
                            <a href="contact.php?service=Audit+%26+Assurance" class="findox-btn findox-btn--base w-100 justify-content-center text-center">
                                <span class="findox-btn__text">Contact Us Today</span>
                                <span class="findox-btn__icon-box"><span class="findox-btn__icon"><i class="icon-arrow-right-up"></i><i class="icon-arrow-right-up"></i></span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Main Content Area -->
            <div class="col-xl-8 col-lg-7">
                <div class="service-details__main">
                    <!-- Featured Hero Image -->
                    <div class="service-details__image" data-aos="fade-up" data-aos-duration="1300">
                        <img src="assets/images/services/service-d-3.jpg" alt="Audit and Assurance Services - Jolly &amp; Co." class="service-details__hero-img" loading="lazy">
                    </div>

                    <!-- Main Service Content -->
                    <div class="service-details__content">
                        <div class="service-details__tag" data-aos="fade-up">
                            <span class="service-details__tag-bar"></span>
                            <span class="service-details__tag-text"><i class="icon-bank"></i> Audit &amp; Assurance</span>
                        </div>

                        <h2 class="service-details__title" data-aos="fade-up" data-aos-delay="100">
                            Independent, Rigorous &amp; Value-Adding Assurance to Strengthen Controls &amp; Build Trust
                        </h2>

                        <!-- In-Depth Overview -->
                        <div class="service-details__text-group" data-aos="fade-up" data-aos-delay="150">
                            <p class="service-details__text">
                                In today's regulatory environment, an audit is far more than a statutory obligation—it is an invaluable corporate health check that protects stakeholders, detects fraud or leakage, and reinforces the credibility of your financial reports with lenders, regulators, shareholders, and potential investors.
                            </p>
                            <p class="service-details__text">
                                At Jolly &amp; Co., our audit practice is built on complete independence, deep sectoral expertise, and uncompromising adherence to the Standards on Auditing (SA) prescribed by the Institute of Chartered Accountants of India (ICAI). We deliver statutory, tax, internal, and management audits that give board members and corporate management absolute peace of mind.
                            </p>
                        </div>

                        <!-- Scope of Work & Deliverables -->
                        <div class="service-details__block service-details__block--scope" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-tasks"></i></span>
                                Comprehensive Scope of Work
                            </h3>
                            <p class="service-details__subtext">Our specialized audit and assurance engagements cover:</p>
                            <div class="service-details__scope-grid">
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Statutory audits under the Companies Act, 2013 for private and public companies</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Tax audits under Section 44AB of the Income Tax Act, 1961 (Form 3CA/3CB and Form 3CD)</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Internal audits, internal financial control (IFC) testing &amp; SOP verification</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Physical stock, warehouse inventory &amp; fixed asset verification audits</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Due diligence audits for mergers, acquisitions, venture investments, or joint ventures</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Special-purpose audits, forensic reviews, and bank loan utilization verification</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Management audits &amp; operational efficiency reviews for process optimization</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Chartered Accountant certifications (net worth, turnover, remittances) with UDIN</span>
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
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-balance-scale"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">ICAI Standard Compliance</h4>
                                            <p class="service-benefit-card__desc">Strict adherence to national auditing guidelines, ethical protocols, and UDIN generation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-file-contract"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Actionable Management Letters</h4>
                                            <p class="service-benefit-card__desc">We deliver constructive management letters identifying control gaps, risks, and cost savings.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-landmark"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Enhanced Bank Credibility</h4>
                                            <p class="service-benefit-card__desc">Audited financial statements backed by Jolly &amp; Co. carry high trust with commercial lenders.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-search"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Fraud &amp; Error Prevention</h4>
                                            <p class="service-benefit-card__desc">Robust substantive testing uncovers anomalies, revenue leakage, and control bottlenecks early.</p>
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
                                        <h4 class="service-process-card__title">Audit Planning &amp; Risk Assessment</h4>
                                        <p class="service-process-card__desc">Understanding business cycles, evaluating internal control architecture, and scoping sample thresholds.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 02</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Substantive Testing &amp; Fieldwork</h4>
                                        <p class="service-process-card__desc">Detailed voucher auditing, ledger scrutiny, balance confirmations, and regulatory compliance checks.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 03</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Management Discussion &amp; Findings</h4>
                                        <p class="service-process-card__desc">Reviewing audit observations with the finance team, seeking explanations, and adjusting entries.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 04</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Report Issuance &amp; UDIN Generation</h4>
                                        <p class="service-process-card__desc">Signing statutory audit reports, issuing Form 3CD, and generating verifiable UDIN on the ICAI portal.</p>
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
                                            When is a Tax Audit under Section 44AB mandatory?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq0" class="accordion-collapse collapse show" aria-labelledby="headingFaq0" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            For businesses, a tax audit is mandatory if annual turnover exceeds ₹1 crore (or ₹10 crore if digital transactions exceed 95%). For professionals, it applies when gross receipts exceed ₹50 lakhs (or ₹75 lakhs under Section 44ADA).
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                            How does an Internal Audit benefit private companies that already do a Statutory Audit?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            A statutory audit checks whether past financial statements are true and fair. An internal audit, in contrast, evaluates day-to-day internal controls, vendor leakage, process efficiency, and fraud prevention throughout the year.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            What is UDIN and why is it important for audit reports?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Unique Document Identification Number (UDIN) is a secure 18-digit code generated by the Chartered Accountant on the ICAI portal for every certified document, preventing fake attestations and validating official authenticity.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            What documents should our finance team prepare before an audit starts?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            We provide an Audit Readiness Checklist covering finalized Trial Balance, bank confirmations, depreciation schedules, statutory return copies (GST, TDS, PF/ESI), and debtor/creditor balances.
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
