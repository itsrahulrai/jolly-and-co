<?php
/**
 * service-business-advisory.php
 * Business Advisory & Virtual CFO | Jolly & Co. Chartered Accountants
 */
require_once __DIR__ . '/config.php';

$current = 'service-business-advisory';
$seo = [
    'title'       => 'Business Advisory & Virtual CFO Services in Delhi | Jolly & Co.',
    'description' => 'Forward-looking financial leadership, cash flow management, CMA data for bank loans, business valuation and Virtual CFO services by Jolly & Co. Chartered Accountants in Kalkaji, New Delhi.',
    'keywords'    => 'business advisory Delhi, Virtual CFO Kalkaji, CMA data bank loan, cash flow planning New Delhi, business valuation CA, financial consulting Delhi',
    'path'        => 'service-business-advisory.php',
];
$pageHeading = 'Business Advisory';
$breadcrumbParent = ['title' => 'Services', 'url' => 'service-accounting-bookkeeping.php'];

$waServiceLink = whatsapp_link('Hello ' . $site['name'] . ', I would like to consult with you regarding Business Advisory and Virtual CFO services.');

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
                            <li class="current">
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
                            <i class="fas fa-user-tie"></i> Strategic CFO Guidance
                        </div>
                        <h3 class="service-sidebar-widget__title">Scale Your Business Faster</h3>
                        <p class="service-sidebar-widget__text">
                            Need bank loan CMA data? Seeking to improve gross margins and cash flow? Schedule an executive consultation with our advisors.
                        </p>
                        
                        <div class="service-sidebar-widget__links">
                            <a href="tel:<?= e($site['phone_link']) ?>" class="service-sidebar-widget__call">
                                <span class="service-sidebar-widget__icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="service-sidebar-widget__call-info">
                                    <small>Call Our Advisory Desk</small>
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
                            <span class="service-sidebar-widget__sub">Bankable CMA &amp; Project Reports</span>
                            <h4 class="service-sidebar-widget__heading">Request Financial Advisory Call</h4>
                            <p class="service-sidebar-widget__desc">Let us help you structure working capital limits (CC/OD), term loans, or virtual CFO support.</p>
                            <a href="contact.php?service=Business+Advisory" class="findox-btn findox-btn--base w-100 justify-content-center text-center">
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
                        <img src="assets/images/services/service-d-4.jpg" alt="Business Advisory Services - Jolly &amp; Co." class="service-details__hero-img" loading="lazy">
                    </div>

                    <!-- Main Service Content -->
                    <div class="service-details__content">
                        <div class="service-details__tag" data-aos="fade-up">
                            <span class="service-details__tag-bar"></span>
                            <span class="service-details__tag-text"><i class="icon-approach"></i> Financial Leadership</span>
                        </div>

                        <h2 class="service-details__title" data-aos="fade-up" data-aos-delay="100">
                            Strategic Financial Direction, Virtual CFO Services &amp; Sustainable Profitability Engineering
                        </h2>

                        <!-- In-Depth Overview -->
                        <div class="service-details__text-group" data-aos="fade-up" data-aos-delay="150">
                            <p class="service-details__text">
                                High-growth businesses need more than traditional historical accounting; they need forward-looking financial leadership. Navigating working capital shortages, capital allocation, pricing structures, and banking relationships can mean the difference between stagnation and scalable profitability.
                            </p>
                            <p class="service-details__text">
                                Jolly &amp; Co. serves as an expert financial advisor and Virtual CFO (Chief Financial Officer) to ambitious business founders, family enterprises, and SMEs across Delhi-NCR. We translate complex numbers into actionable business strategies, ensuring you have the financial foresight to scale safely and sustainably.
                            </p>
                        </div>

                        <!-- Scope of Work & Deliverables -->
                        <div class="service-details__block service-details__block--scope" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-tasks"></i></span>
                                Comprehensive Scope of Work
                            </h3>
                            <p class="service-details__subtext">Our business advisory and Virtual CFO services encompass:</p>
                            <div class="service-details__scope-grid">
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Virtual CFO services: ongoing executive financial leadership without C-suite overhead</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Cash flow forecasting, working capital optimization &amp; liquidity management</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Preparation of CMA data, Detailed Project Reports (DPR), and bank loan proposals</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Corporate restructuring: optimal holding structures, subsidiaries &amp; tax efficiencies</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Annual budgeting, financial variance analysis, and operational cost-reduction</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Unit economics modeling: product margin analysis and break-even thresholds</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Business valuation reports (DCF, Net Asset Value) for investments or equity splits</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Financial due diligence for mergers, acquisitions, and strategic partnerships</span>
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
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-user-shield"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Executive CFO Leadership</h4>
                                            <p class="service-benefit-card__desc">High-level strategic financial leadership tailored to your stage of business growth.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-hand-holding-usd"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Bank Funding Success</h4>
                                            <p class="service-benefit-card__desc">Professionally structured CMA data and project reports ready for swift bank approvals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-sync-alt"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Working Capital Efficiency</h4>
                                            <p class="service-benefit-card__desc">Shorten your cash-conversion cycle and unlock tied-up working capital from debtors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-chart-pie"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Profit Margin Expansion</h4>
                                            <p class="service-benefit-card__desc">Pinpoint unprofitable lines, optimize overheads, and improve gross and net profit margins.</p>
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
                                        <h4 class="service-process-card__title">Diagnostic Financial Audit</h4>
                                        <p class="service-process-card__desc">We conduct a deep-dive evaluation of your past numbers, cost structures, and cash flow bottlenecks.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 02</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Strategy Formulation &amp; Modeling</h4>
                                        <p class="service-process-card__desc">Developing financial forecasts, establishing budgeting benchmarks, and defining key financial KPIs.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 03</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Execution &amp; Bank Alignment</h4>
                                        <p class="service-process-card__desc">Implementing financial controls, working with lenders for credit limits, and refining pricing.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 04</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Monthly Board Review</h4>
                                        <p class="service-process-card__desc">Reviewing variance against budgets, recalibrating strategies, and maintaining continuous advisory support.</p>
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
                                            What is a Virtual CFO service and how does it work?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq0" class="accordion-collapse collapse show" aria-labelledby="headingFaq0" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            A Virtual CFO gives you the strategic expertise, leadership, and oversight of a senior CA-level CFO on a flexible retainer basis. You receive high-level financial direction, banking guidance, and board reporting at a fraction of full-time executive cost.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                            Can you help our company secure bank loans, Cash Credit (CC), or Overdraft (OD) limits?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. We prepare bank-compliant CMA (Credit Monitoring Arrangement) data, projected balance sheets, debt service coverage ratios (DSCR), and attend banker meetings to facilitate credit sanctioning.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            When is the right time to hire business advisory services?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            When your business is experiencing rapid revenue growth, struggling with cash flow despite healthy sales, planning major capital investments, seeking bank loans, or preparing for investor due diligence.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            Do you assist with business valuation for equity funding or partner exit?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. We conduct business valuations using Discounted Cash Flow (DCF), Comparable Company Multiples, and Book Value methods, supported by signed CA certificates.
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
