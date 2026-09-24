<?php
/**
 * layout.php — Master Layout File
 * Jolly & Co. Chartered Accountants
 *
 * This layout is used across all pages of the website.
 * It renders the separated header (with dynamic SEO data and navigation),
 * optional inner page header, the dynamic page content, and the separated footer.
 *
 * Usage in any page:
 * ----------------------------------------------------
 * <?php
 * require_once __DIR__ . '/config.php';
 *
 * $current = 'home'; // active navigation tab
 * $seo = [
 *     'title'       => 'Your Page Title | Jolly & Co.',
 *     'description' => 'Dynamic SEO meta description for this page...',
 *     'keywords'    => 'keywords, for, this, page',
 *     'path'        => 'page.php',
 * ];
 *
 * ob_start();
 * ?>
 *     <!-- Page specific HTML content goes here -->
 * <?php
 * $content = ob_get_clean();
 * include __DIR__ . '/layout.php';
 * ?>
 */

require_once __DIR__ . '/config.php';

// Include dynamic header (HTML <head>, dynamic SEO, topbar & navigation)
include __DIR__ . '/includes/header.php';

// If an inner page banner/heading is specified, include page header
if (!empty($pageHeading)) {
    include __DIR__ . '/includes/page-header.php';
}

// Render the page's dynamic content
if (isset($content)) {
    echo $content;
}

// Include separate footer (footer widgets, modals & scripts)
include __DIR__ . '/includes/footer.php';
