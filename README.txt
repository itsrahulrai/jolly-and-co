JOLLY & CO. WEBSITE (PHP)
==========================

Pages:      index.php, about.php, services.php, contact.php
Layout:     layout.php (master layout used across all pages)
Shared:     includes/header.php  (head, dynamic SEO tags, navigation)
            includes/footer.php  (footer, mobile menu, WhatsApp button, scripts)
            includes/slider.php  (hero slider)
            includes/page-header.php, includes/cta.php, includes/social.php
Settings:   config.php   <-- ALL contact info, WhatsApp number, socials, services list, default SEO
Extras:     assets/css/custom.css, assets/js/custom.js

HOW THE LAYOUT WORKS:
====================
Every page (including index.php, about.php, services.php, contact.php) sets its page data
and then renders via the master `layout.php` file:

```php
<?php
require_once __DIR__ . '/config.php';

$current = 'home'; // active nav link: 'home' | 'about' | 'services' | 'contact'
$seo = [
    'title'       => 'Your Page Title | Jolly & Co.',
    'description' => 'Dynamic page description for search engines...',
    'keywords'    => 'keyword1, keyword2, keyword3...',
    'path'        => 'page.php',
];
$pageHeading = 'Page Title'; // (optional for inner page banner)

ob_start();
?>
    <!-- Page specific HTML content goes here -->
<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';
?>
```

DYNAMIC SEO (per page):
=======================
Each page can configure its own SEO via either:
1. `$seo` array:
   - 'title'       : Page title (<title>, og:title, twitter:title)
   - 'description' : Meta description (meta description, og:description, twitter:description)
   - 'keywords'    : Meta keywords
   - 'image'       : Social sharing image (og:image, twitter:image)
   - 'path'        : Canonical path (e.g. 'about.php', 'services.php')
   - 'noindex'     : Set true to add noindex, nofollow

2. Or standalone variables:
   `$page_title`, `$meta_description`, `$meta_keywords`, `$canonical_url`, `$og_image`.

Defaults are automatically pulled from `config.php`, and a complete Schema.org `AccountingService`
JSON-LD block is dynamically generated on every page.

BEFORE GOING LIVE (edit config.php):
====================================
  1. 'email'    -> currently a placeholder (info@jollyandco.in). Put your real email.
  2. 'hours'    -> confirm office hours.
  3. 'social'   -> replace generic social links with your real profiles ('' hides one).
  4. 'base_url' -> optional, e.g. 'https://www.yourdomain.com' (auto-detected if left empty).

WHATSAPP CONTACT FORM:
======================
  contact.php -> assets/js/custom.js opens https://wa.me/<number> with the filled details.
  The number comes from config.php ('whatsapp', country code + number, no + or spaces).

RUNNING LOCALLY:
================
  Needs PHP 7.4+ (uses short echo tags).
  Run: php -S localhost:8000
