<?php
/**
 * service-compliance-services.php
 * Compliance Services | Jolly & Co. Chartered Accountants
 */
require_once __DIR__ . '/config.php';

$current = 'service-compliance-services';
$seo = [
    'title'       => 'ROC / MCA Compliance, DIR-3 KYC, PF & ESI Services in Delhi | Jolly & Co.',
    'description' => 'Zero-penalty statutory corporate compliance services in Kalkaji, New Delhi. MCA annual filings (AOC-4, MGT-7), DIR-3 KYC, PF & ESI, and secretarial documentation by Jolly & Co. Chartered Accountants.',
    'keywords'    => 'ROC compliance Delhi, MCA annual return Kalkaji, AOC-4 filing, MGT-7, DIR-3 KYC New Delhi, PF ESI compliance, secretarial audit Delhi',
    'path'        => 'service-compliance-services.php',
];
$pageHeading = 'Compliance Services';
$breadcrumbParent = ['title' => 'Services', 'url' => 'services.php'];

$waServiceLink = whatsapp_link('Hello ' . $site['name'] . ', I would like to consult with you regarding Corporate & Statutory Compliance services.');

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
                            <li class="current">
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
                            <i class="fas fa-user-tie"></i> MCA &amp; ROC Specialist
                        </div>
                        <h3 class="service-sidebar-widget__title">Avoid MCA Daily Penalties</h3>
                        <p class="service-sidebar-widget__text">
                            Late ROC filings attract mandatory penalties of ₹100/day. Keep your company in pristine legal standing with our corporate compliance desk.
                        </p>
                        
                        <div class="service-sidebar-widget__links">
                            <a href="tel:<?= e($site['phone_link']) ?>" class="service-sidebar-widget__call">
                                <span class="service-sidebar-widget__icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="service-sidebar-widget__call-info">
                                    <small>Call Compliance Desk</small>
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
                            <span class="service-sidebar-widget__sub">Free MCA Master Data Check</span>
                            <h4 class="service-sidebar-widget__heading">Schedule Compliance Checkup</h4>
                            <p class="service-sidebar-widget__desc">Let our team verify your company’s ROC status, pending forms, and director KYC compliance.</p>
                            <a href="contact.php?service=Compliance+Services" class="findox-btn findox-btn--base w-100 justify-content-center text-center">
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
                        <img src="assets/images/services/service-d-5.jpg" alt="Corporate Compliance Services - Jolly &amp; Co." class="service-details__hero-img" loading="lazy">
                    </div>

                    <!-- Main Service Content -->
                    <div class="service-details__content">
                        <div class="service-details__tag" data-aos="fade-up">
                            <span class="service-details__tag-bar"></span>
                            <span class="service-details__tag-text"><i class="icon-support"></i> Corporate &amp; Statutory Compliance</span>
                        </div>

                        <h2 class="service-details__title" data-aos="fade-up" data-aos-delay="100">
                            Zero-Penalty Statutory Compliance Across Corporate, Labor &amp; Regulatory Regimes
                        </h2>

                        <!-- In-Depth Overview -->
                        <div class="service-details__text-group" data-aos="fade-up" data-aos-delay="150">
                            <p class="service-details__text">
                                Modern Indian business compliance involves multiple regulatory bodies—Ministry of Corporate Affairs (MCA), Registrar of Companies (ROC), Employees’ Provident Fund Organisation (EPFO), ESIC, and state labor authorities. Late filings carry compounding daily penalties of ₹100/day, risk of director disqualification, and loss of corporate good standing.
                            </p>
                            <p class="service-details__text">
                                Jolly &amp; Co. provides a dependable 360-degree compliance umbrella in New Delhi. We track your statutory calendar, prepare board documentation, handle annual ROC filings (AOC-4, MGT-7), maintain statutory registers, and manage labor law contributions so company directors can focus on expanding their core business with zero legal anxiety.
                            </p>
                        </div>

                        <!-- Scope of Work & Deliverables -->
                        <div class="service-details__block service-details__block--scope" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-tasks"></i></span>
                                Comprehensive Scope of Work
                            </h3>
                            <p class="service-details__subtext">Our corporate and statutory secretarial scope includes:</p>
                            <div class="service-details__scope-grid">
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">MCA / ROC Annual Filings: Form AOC-4 (Financials) &amp; Form MGT-7/7A (Annual Returns)</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Director Identification Number (DIN) annual e-KYC: Form DIR-3 KYC and web verification</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Drafting board resolutions, notices, minutes of Board Meetings and AGM records</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Director appointment, resignation, registered office shifting &amp; share transfer filings</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Increase in authorized capital, alteration of MOA/AOA, and change in business objectives</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Employees’ Provident Fund (PF) and Employee State Insurance (ESI) monthly challans &amp; returns</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Professional Tax (PT) registration, periodic payments, and annual return filings</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Mandatory disclosures: Form DPT-3 (Return of Deposits) and MSME Form 1</span>
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
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-ban"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Zero MCA Penalties</h4>
                                            <p class="service-benefit-card__desc">Avoid heavy per-day penalties of ₹100/day per form with disciplined proactive scheduling.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-user-lock"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Director Protection</h4>
                                            <p class="service-benefit-card__desc">Safeguard director DIN validity and eliminate risk of disqualification under the Companies Act.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-book"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Complete Secretarial Records</h4>
                                            <p class="service-benefit-card__desc">Professional drafting of statutory registers, AGM minutes, and board resolutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-shield-check"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Unified Compliance Desk</h4>
                                            <p class="service-benefit-card__desc">Single-window management of MCA, PF, ESI, TDS, and GST compliance.</p>
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
                                        <h4 class="service-process-card__title">Statutory Compliance Audit</h4>
                                        <p class="service-process-card__desc">Reviewing existing corporate status on MCA portal, pending filings, and secretarial registers.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 02</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Annual Calendar &amp; Alert Setup</h4>
                                        <p class="service-process-card__desc">Creating an individualized corporate calendar tracking ROC, DIN KYC, DPT-3, and PF/ESI due dates.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 03</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Documentation &amp; Board Approvals</h4>
                                        <p class="service-process-card__desc">Drafting AGM notices, directors' reports, resolutions, and finalizing balance sheet attachments.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 04</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Filing &amp; Digital Record Keeping</h4>
                                        <p class="service-process-card__desc">Affixing digital signatures (DSC), submitting on MCA/EPFO portals, and preserving SRN receipts.</p>
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
                                            What is the penalty for delayed ROC annual return filing (AOC-4 &amp; MGT-7)?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq0" class="accordion-collapse collapse show" aria-labelledby="headingFaq0" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Under the Companies Act, 2013, the late fee is ₹100 per day per form with no upper ceiling. Delaying both forms can quickly lead to tens of thousands of rupees in penalties and risk of director disqualification.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                            Is DIR-3 KYC mandatory for all directors every year?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. Every individual holding an approved DIN must complete annual KYC before 30th September. Failure to do so deactivates the DIN and attracts a government penalty of ₹5,000 per DIN.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            When is EPF and ESI registration mandatory for an employer?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            EPF registration is mandatory for establishments with 20 or more employees, while ESI is mandatory for businesses with 10 or more employees (subject to salary thresholds). Many businesses also opt for voluntary registration.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            Can you help close or strike off a dormant or inactive company?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. We assist in striking off defunct private limited companies under the Fast Track Exit (FTE) route (Form STK-2), closing liabilities cleanly and affordably.
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
