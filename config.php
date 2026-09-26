<?php
/**
 * config.php — single source of truth for the whole website.
 * Change contact details, WhatsApp number, socials or services HERE
 * and every page (header, footer, contact page, SEO schema) updates automatically.
 */

$site = [
    'name'       => 'Jolly & Co.',
    'full_name'  => 'Jolly & Co. Chartered Accountants',
    'tagline'    => 'Accounting, Taxation, Audit & Compliance in New Delhi',

    // ---- Contact details (used everywhere) ----
    'phone'      => '+91 9999830077',
    'phone_link' => '+919999830077',
    'whatsapp'   => '919999830077',                 // country code + number, no "+" or spaces
    'email'      => 'info@jollyandco.in',           // TODO: replace with your real email
    'address'    => 'A-8/61, Kalkaji Extension, Block A 8, Kalkaji Extension, Kalkaji, New Delhi, Delhi 110019',
    'address_short' => 'Kalkaji Extension, New Delhi 110019',
    'map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.455324602257!2d77.2614645!3d28.526030799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce15dc0000079%3A0xefa40c982228c00c!2sJolly%20%26%20Co.%20Chartered%20Accountants!5e0!3m2!1sen!2sin!4v1790410154688!5m2!1sen!2sin',
    'hours'      => 'Mon - Sat: 10:00 AM - 7:00 PM',  // TODO: confirm office hours
    'locality'   => 'Kalkaji',
    'region'     => 'Delhi',
    'postal'     => '110019',
    'country'    => 'IN',

    // ---- Socials (leave '' to hide an icon) ----
    'social' => [
        'facebook'  => 'https://facebook.com/',
        'twitter'   => 'https://x.com/',
        'linkedin'  => 'https://linkedin.com/',
        'instagram' => 'https://instagram.com/',
        'youtube'   => 'https://youtube.com/',
    ],

    // ---- Site URL used for canonical / Open Graph. Leave '' to auto-detect. ----
    'base_url'   => '',

    // ---- Default SEO (each page can override) ----
    'default_title'       => 'Jolly & Co. Chartered Accountants | Accounting, Tax & Audit in New Delhi',
    'default_description' => 'Jolly & Co. is a chartered accountancy firm in Kalkaji, New Delhi offering accounting, income tax & GST, audit, business advisory, compliance and startup registration services.',
    'default_keywords'    => 'chartered accountant Delhi, CA firm Kalkaji, GST filing, income tax return, audit services, startup registration, bookkeeping, business advisory',
    'og_image'            => 'assets/images/jolly.png',

];

/** Services — used on the home page, services page, header menu and footer. */
$services = [
    [
        'slug'  => 'accounting-bookkeeping',
        'title' => 'Accounting & Bookkeeping',
        'url'   => 'service-accounting-bookkeeping.php',
        'icon'  => 'icon-stats-2',
        'image' => 'assets/images/services/service-1-1.jpg',
        'short' => 'Accurate day-to-day books, bank reconciliation and monthly MIS so you always know where your business stands.',
        'points'=> ['Ledger & voucher maintenance', 'Bank & GST reconciliation', 'Monthly MIS & financial statements'],
    ],
    [
        'slug'  => 'income-tax-gst',
        'title' => 'Income Tax & GST',
        'url'   => 'service-income-tax-gst.php',
        'icon'  => 'icon-agreement',
        'image' => 'assets/images/services/service-1-2.jpg',
        'short' => 'Timely return filing, notice replies and tax planning for individuals, firms and companies.',
        'points'=> ['ITR filing for individuals & businesses', 'GST registration & return filing', 'Notice handling & tax planning'],
    ],
    [
        'slug'  => 'audit-assurance',
        'title' => 'Audit & Assurance',
        'url'   => 'service-audit-assurance.php',
        'icon'  => 'icon-bank',
        'image' => 'assets/images/services/service-1-3.jpg',
        'short' => 'Statutory, tax and internal audits that strengthen controls and give stakeholders confidence.',
        'points'=> ['Statutory & tax audit', 'Internal audit & stock audit', 'Certification work'],
    ],
    [
        'slug'  => 'business-advisory',
        'title' => 'Business Advisory',
        'url'   => 'service-business-advisory.php',
        'icon'  => 'icon-approach',
        'image' => 'assets/images/services/service-1-4.jpg',
        'short' => 'Practical guidance on structuring, cash flow, budgeting and growth decisions.',
        'points'=> ['Business structuring', 'Budgeting & cash-flow planning', 'Project reports & loan documentation'],
    ],
    [
        'slug'  => 'compliance-services',
        'title' => 'Compliance Services',
        'url'   => 'service-compliance-services.php',
        'icon'  => 'icon-support',
        'image' => 'assets/images/services/service-1-5.jpg',
        'short' => 'Stay on the right side of the law with ROC, TDS, PF/ESI and other statutory filings handled on time.',
        'points'=> ['ROC / MCA annual filings', 'TDS returns', 'PF, ESI & professional tax'],
    ],
    [
        'slug'  => 'startup-registration',
        'title' => 'Startup & Company Registration',
        'url'   => 'service-startup-registration.php',
        'icon'  => 'icon-financial-consultant',
        'image' => 'assets/images/services/service-1-6.jpg',
        'short' => 'Company, LLP and proprietorship set-up with PAN, GST, MSME/Udyam and Startup India support.',
        'points'=> ['Private Limited / LLP / OPC', 'GST, MSME & Startup India', 'Trademark & other registrations'],
    ],
];

/* ---------------- helpers ---------------- */

function e($v) { return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }

function site_base_url() {
    global $site;
    if (!empty($site['base_url'])) return rtrim($site['base_url'], '/');
    $https  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || (($_SERVER['SERVER_PORT'] ?? '') == 443);
    $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $dir    = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
    $dir    = ($dir === '.' || $dir === '/' || $dir === '\\') ? '' : rtrim($dir, '/');
    return ($https ? 'https' : 'http') . '://' . $host . $dir;
}

function whatsapp_link($text = '') {
    global $site;
    return 'https://wa.me/' . $site['whatsapp'] . ($text !== '' ? '?text=' . rawurlencode($text) : '');
}

function map_embed_url() {
    global $site;

    return $site['map_embed'];
}

function map_link() {
    global $site;
    return 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode($site['address']);
}
