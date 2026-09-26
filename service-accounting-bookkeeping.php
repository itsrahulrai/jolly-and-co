<?php
/**
 * service-accounting-bookkeeping.php
 * Accounting & Bookkeeping Services | Jolly & Co. Chartered Accountants
 */
require_once __DIR__ . '/config.php';

$current = 'service-accounting-bookkeeping';
$seo = [
    'title'       => 'Accounting & Bookkeeping Services in Kalkaji, New Delhi | Jolly & Co.',
    'description' => 'Comprehensive accounting and bookkeeping services for businesses, SMEs, and startups in Delhi-NCR. Ledger maintenance, bank reconciliation, and monthly MIS by Jolly & Co. Chartered Accountants.',
    'keywords'    => 'accounting services Delhi, bookkeeping Kalkaji, outsourced accounting New Delhi, Tally accounting, bank reconciliation, monthly MIS, CA firm Delhi',
    'path'        => 'service-accounting-bookkeeping.php',
];
$pageHeading = 'Accounting & Bookkeeping';
$breadcrumbParent = ['title' => 'Services', 'url' => 'service-accounting-bookkeeping.php'];

$waServiceLink = whatsapp_link('Hello ' . $site['name'] . ', I would like to consult with you regarding Accounting & Bookkeeping services.');

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
                            <li class="current">
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
                            <i class="fas fa-user-tie"></i> CA Expert Assistance
                        </div>
                        <h3 class="service-sidebar-widget__title">Need Advice on Accounting?</h3>
                        <p class="service-sidebar-widget__text">
                            Speak directly with our chartered accountants in Kalkaji, New Delhi. Get fast, reliable, and error-free books of accounts.
                        </p>
                        
                        <div class="service-sidebar-widget__links">
                            <a href="tel:<?= e($site['phone_link']) ?>" class="service-sidebar-widget__call">
                                <span class="service-sidebar-widget__icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="service-sidebar-widget__call-info">
                                    <small>Call Us Directly</small>
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
                            <span class="service-sidebar-widget__sub">Clear Backlogs &amp; Set Up Books</span>
                            <h4 class="service-sidebar-widget__heading">Schedule a Free Accounts Consultation</h4>
                            <p class="service-sidebar-widget__desc">Share your transaction volume and software preference; we will provide a transparent monthly fee estimate.</p>
                            <a href="contact.php?service=Accounting+%26+Bookkeeping" class="findox-btn findox-btn--base w-100 justify-content-center text-center">
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
                        <img src="assets/images/services/service-d-1.jpg" alt="Accounting and Bookkeeping Services - Jolly &amp; Co." class="service-details__hero-img" loading="lazy">
                    </div>

                    <!-- Main Service Content -->
                    <div class="service-details__content">
                        <div class="service-details__tag" data-aos="fade-up">
                            <span class="service-details__tag-bar"></span>
                            <span class="service-details__tag-text"><i class="icon-stats-2"></i> Accounting &amp; Bookkeeping</span>
                        </div>

                        <h2 class="service-details__title" data-aos="fade-up" data-aos-delay="100">
                            Accurate Day-to-Day Books, Bank Reconciliation &amp; Real-Time Financial Clarity
                        </h2>

                        <!-- In-Depth Overview -->
                        <div class="service-details__text-group" data-aos="fade-up" data-aos-delay="150">
                            <p class="service-details__text">
                                Maintaining clean, accurate, and up-to-date books of accounts is the bedrock of every successful enterprise. At Jolly &amp; Co. Chartered Accountants, our team delivers complete bookkeeping and financial accounting solutions tailored to your operational model—whether you are an emerging startup, SME, proprietorship, or established corporate.
                            </p>
                            <p class="service-details__text">
                                We manage everything from daily voucher entry and vendor bill verification to complex multi-bank reconciliations, depreciation schedules, and payroll records. Using industry-standard cloud accounting platforms like Tally Prime, Zoho Books, QuickBooks, and Busy, we ensure your financial data is always audit-ready, compliant with Indian Accounting Standards (Ind AS), and structured to provide meaningful business insights.
                            </p>
                        </div>

                        <!-- Scope of Work & Deliverables -->
                        <div class="service-details__block service-details__block--scope" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-tasks"></i></span>
                                Comprehensive Scope of Work
                            </h3>
                            <p class="service-details__subtext">When you partner with Jolly &amp; Co., we take end-to-end accountability for every aspect of your accounts:</p>
                            <div class="service-details__scope-grid">
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Daily and weekly general ledger and voucher processing</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Bank account, corporate credit card &amp; payment gateway reconciliations</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Accounts Payable (AP) and Accounts Receivable (AR) age-wise tracking</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Monthly Trial Balance finalization, Profit &amp; Loss, and Balance Sheet prep</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Fixed Asset Register (FAR) compilation and depreciation accounting</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Payroll accounting, salary disbursement reconciliation &amp; reimbursements</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Inventory &amp; stock register reconciliation aligned with GST records</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Customized Management Information System (MIS) reports for directors</span>
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
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-award"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Qualified CA Oversight</h4>
                                            <p class="service-benefit-card__desc">Every ledger and reconciliation is audited and supervised by experienced Chartered Accountants.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-shield-check"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Audit-Ready Records</h4>
                                            <p class="service-benefit-card__desc">Eliminate year-end chaos with immaculate, pre-audited digital documentation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-wallet"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Cost-Effective Outsourcing</h4>
                                            <p class="service-benefit-card__desc">Save up to 60% compared to hiring, training, and retaining an in-house accounting department.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-chart-line"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Real-Time Insights</h4>
                                            <p class="service-benefit-card__desc">Gain instant visibility into your cash flow, profit margins, and operating expenses.</p>
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
                                        <h4 class="service-process-card__title">Setup &amp; Chart of Accounts</h4>
                                        <p class="service-process-card__desc">We review your business flow, map custom ledger heads, and connect banking &amp; accounting software.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 02</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Document &amp; Voucher Processing</h4>
                                        <p class="service-process-card__desc">Regular collection and digitisation of sales invoices, purchase bills, bank statements, and expense receipts.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 03</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Reconciliation &amp; Verification</h4>
                                        <p class="service-process-card__desc">Rigorous reconciliation of bank balances, debtor/creditor ledgers, and GST purchase register (GSTR-2B).</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 04</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Monthly MIS &amp; Advisory</h4>
                                        <p class="service-process-card__desc">Presentation of month-end financial statements, tax liability summaries, and growth advisory pointers.</p>
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
                                            Which accounting software do you support?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq0" class="accordion-collapse collapse show" aria-labelledby="headingFaq0" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            We are proficient in Tally Prime, Zoho Books, QuickBooks, Busy, SAP, and advanced Excel reporting. We can work directly on your existing software or help you migrate to a secure cloud platform.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                            Can you clear pending accounting backlogs from previous months or years?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. We specialize in backlog accounting cleanup, bank statement reconstitution, and rectifying ledger discrepancies to bring your books up to date quickly.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            How do we share our financial documents with your team?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            You can share digital invoices, bank statements, and receipts via secure cloud folders (Google Drive, OneDrive), WhatsApp business channels, or email. For Delhi-NCR clients, physical document pick-up is also supported.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            How does outsourced accounting benefit small and medium businesses?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            It eliminates the overhead of full-time employee salaries, statutory benefits, and accounting software licenses, while giving you access to senior CA expertise and zero compliance lapses.
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
