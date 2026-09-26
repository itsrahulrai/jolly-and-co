<?php
/**
 * service-startup-registration.php
 * Startup & Company Registration | Jolly & Co. Chartered Accountants
 */
require_once __DIR__ . '/config.php';

$current = 'service-startup-registration';
$seo = [
    'title'       => 'Private Limited Company, LLP Registration & Startup India in Delhi | Jolly & Co.',
    'description' => 'Fast, affordable company incorporation in Delhi-NCR. Private Limited, LLP, OPC, Section 8 registration, Startup India DPIIT recognition, GST & MSME setup by Jolly & Co. Chartered Accountants.',
    'keywords'    => 'company registration Delhi, Private Limited incorporation Kalkaji, LLP registration New Delhi, startup India registration, SPICe+ MCA, OPC registration, MSME Udyam Delhi',
    'path'        => 'service-startup-registration.php',
];
$pageHeading = 'Startup & Company Registration';
$breadcrumbParent = ['title' => 'Services', 'url' => 'service-accounting-bookkeeping.php'];

$waServiceLink = whatsapp_link('Hello ' . $site['name'] . ', I would like to consult with you regarding Startup & Company Registration services.');

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
                            <li class="current">
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
                            <i class="fas fa-rocket"></i> Startup Incorporation Desk
                        </div>
                        <h3 class="service-sidebar-widget__title">Incorporate in 5-7 Days</h3>
                        <p class="service-sidebar-widget__text">
                            Starting a new venture? Get expert advice on choosing between Pvt Ltd, LLP, or OPC with transparent, all-inclusive government fee packages.
                        </p>
                        
                        <div class="service-sidebar-widget__links">
                            <a href="tel:<?= e($site['phone_link']) ?>" class="service-sidebar-widget__call">
                                <span class="service-sidebar-widget__icon"><i class="fas fa-phone-alt"></i></span>
                                <span class="service-sidebar-widget__call-info">
                                    <small>Call Our Startup Desk</small>
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
                            <span class="service-sidebar-widget__sub">Free Name Check &amp; Advice</span>
                            <h4 class="service-sidebar-widget__heading">Check Name Availability</h4>
                            <p class="service-sidebar-widget__desc">Send us your proposed company names to verify MCA and Trademark availability within 2 business hours.</p>
                            <a href="contact.php?service=Startup+%26+Company+Registration" class="findox-btn findox-btn--base w-100 justify-content-center text-center">
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
                        <img src="assets/images/services/service-d-6.jpg" alt="Startup and Company Registration Services - Jolly &amp; Co." class="service-details__hero-img" loading="lazy">
                    </div>

                    <!-- Main Service Content -->
                    <div class="service-details__content">
                        <div class="service-details__tag" data-aos="fade-up">
                            <span class="service-details__tag-bar"></span>
                            <span class="service-details__tag-text"><i class="icon-financial-consultant"></i> Incorporation &amp; Structuring</span>
                        </div>

                        <h2 class="service-details__title" data-aos="fade-up" data-aos-delay="100">
                            Fast, Seamless Company Incorporation, Legal Structuring &amp; Complete Startup India Setup
                        </h2>

                        <!-- In-Depth Overview -->
                        <div class="service-details__text-group" data-aos="fade-up" data-aos-delay="150">
                            <p class="service-details__text">
                                Turning an innovative business concept into a legally compliant, bankable enterprise begins with choosing the right organizational structure. Choosing incorrectly between a Private Limited Company, Limited Liability Partnership (LLP), One Person Company (OPC), or Sole Proprietorship can impact investor fundraising, tax liability, and compliance overhead for years to come.
                            </p>
                            <p class="service-details__text">
                                Jolly &amp; Co. provides end-to-end company formation and startup advisory services in Kalkaji, New Delhi. From name reservation, drafting custom MOA/AOA, and obtaining Digital Signatures to securing DPIIT Startup India recognition and opening corporate bank accounts, we get your business operational in record time with zero hassle.
                            </p>
                        </div>

                        <!-- Scope of Work & Deliverables -->
                        <div class="service-details__block service-details__block--scope" data-aos="fade-up" data-aos-duration="1200">
                            <h3 class="service-details__subheading">
                                <span class="service-details__subheading-icon"><i class="fas fa-tasks"></i></span>
                                Comprehensive Scope of Work
                            </h3>
                            <p class="service-details__subtext">Our complete startup incorporation and launch suite includes:</p>
                            <div class="service-details__scope-grid">
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Private Limited Company (Pvt Ltd) incorporation through SPICe+ MCA portal</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Limited Liability Partnership (LLP) registration and custom LLP Agreement drafting</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">One Person Company (OPC), Section 8 NGO, and Partnership Firm registration</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Class 3 Digital Signature Certificates (DSC) and Director Identification Number (DIN)</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Name approval search, trademark conflict check &amp; reservation on MCA RUN</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Drafting custom Memorandum of Association (MOA) &amp; Articles of Association (AOA)</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">DPIIT Startup India recognition, 80-IAC tax holiday guidance &amp; angel tax advice</span>
                                </div>
                                <div class="service-details__scope-item">
                                    <span class="service-details__scope-check"><i class="fas fa-check"></i></span>
                                    <span class="service-details__scope-text">Post-incorporation kit: PAN, TAN, GST, MSME/Udyam, Bank account &amp; Form INC-20A</span>
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
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-bolt"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Fast 5-7 Day Turnaround</h4>
                                            <p class="service-benefit-card__desc">Get your Certificate of Incorporation within 5-7 business days of document submission.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-tag"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Transparent CA Pricing</h4>
                                            <p class="service-benefit-card__desc">Clear, upfront quotation covering government stamp duties, MCA fees, and CA professional charges.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-chess-knight"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Strategic Structuring</h4>
                                            <p class="service-benefit-card__desc">Expert guidance on founder equity division, authorized share capital, and investor-readiness.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-benefit-card">
                                        <div class="service-benefit-card__icon-box"><i class="fas fa-hands-helping"></i></div>
                                        <div class="service-benefit-card__content">
                                            <h4 class="service-benefit-card__title">Complete Post-Setup Kit</h4>
                                            <p class="service-benefit-card__desc">Mandatory INC-20A filing, statutory auditor appointment (ADT-1), and banking assistance.</p>
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
                                        <h4 class="service-process-card__title">Structure Advice &amp; Name Search</h4>
                                        <p class="service-process-card__desc">Selecting entity type, verifying trademark availability, and reserving unique name on MCA.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 02</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Digital Signatures &amp; KYC Verification</h4>
                                        <p class="service-process-card__desc">Procuring Class 3 DSCs for directors and gathering identity/address documents of promoters.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 03</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">MCA SPICe+ Application Filing</h4>
                                        <p class="service-process-card__desc">Drafting MOA/AOA, preparing declarations (INC-9, AGILE-PRO-S), and filing on MCA portal.</p>
                                    </div>
                                </div>
                                <div class="service-process-card">
                                    <div class="service-process-card__badge">STEP 04</div>
                                    <div class="service-process-card__content">
                                        <h4 class="service-process-card__title">Incorporation &amp; Post-Setup Kit</h4>
                                        <p class="service-process-card__desc">Securing Certificate of Incorporation (COI), PAN, TAN, bank opening resolution, and INC-20A filing.</p>
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
                                            How many days does it take to incorporate a Private Limited Company?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq0" class="accordion-collapse collapse show" aria-labelledby="headingFaq0" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            On average, incorporation takes 5 to 7 business days once identity proofs (PAN, Aadhaar/Passport, bank statement) and DSC documentation are submitted to our team.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq1">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq1" aria-expanded="false" aria-controls="collapseFaq1">
                                            What is the key difference between an LLP and a Private Limited Company?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq1" class="accordion-collapse collapse" aria-labelledby="headingFaq1" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            A Private Limited Company is the standard choice if you plan to raise equity capital from angel investors or VCs and issue ESOPs. An LLP has lower compliance costs and no dividend distribution restrictions, making it ideal for services, consulting, and bootstrapped ventures.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq2" aria-expanded="false" aria-controls="collapseFaq2">
                                            What documents are required to start a company in Delhi?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq2" class="accordion-collapse collapse" aria-labelledby="headingFaq2" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            For directors/shareholders: PAN card, Aadhaar card/Passport, recent bank statement or utility bill, and passport photograph. For the registered office: electricity bill/rent agreement and No-Objection Certificate (NOC) from property owner.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h4 class="accordion-header" id="headingFaq3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaq3" aria-expanded="false" aria-controls="collapseFaq3">
                                            What is Form INC-20A (Commencement of Business) and is it mandatory?
                                        </button>
                                    </h4>
                                    <div id="collapseFaq3" class="accordion-collapse collapse" aria-labelledby="headingFaq3" data-bs-parent="#serviceFaqAccordion">
                                        <div class="accordion-body">
                                            Yes. Every company incorporated in India must file Form INC-20A within 180 days of incorporation, certifying that shareholders have deposited their initial capital into the company bank account. Non-filing attracts heavy fines.
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
