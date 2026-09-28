<?php
/**
 * sitemap.php — Dynamic Raw XML Sitemap
 * Jolly & Co. Chartered Accountants
 * Standard XML format for Search Engines (Google, Bing)
 */

require_once __DIR__ . '/config.php';

// Send XML headers and prevent browser caching old stylesheets
header('Content-Type: application/xml; charset=UTF-8');
header('Cache-Control: no-cache, no-store, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');
header('X-Robots-Tag: noindex, follow', true);

$baseUrl = rtrim(site_base_url(), '/');

/**
 * Returns YYYY-MM-DD date of file modification
 */
function get_file_lastmod($filename) {
    $filePath = __DIR__ . '/' . ltrim($filename, '/');
    if (file_exists($filePath)) {
        return date('Y-m-d', filemtime($filePath));
    }
    return date('Y-m-d');
}

// 1. Primary Pages
$pages = [
    [
        'loc'        => $baseUrl . '/',
        'file'       => 'index.php',
        'changefreq' => 'weekly',
        'priority'   => '1.0',
    ],
    [
        'loc'        => $baseUrl . '/about.php',
        'file'       => 'about.php',
        'changefreq' => 'monthly',
        'priority'   => '0.8',
    ],
];

// 2. Services from config.php
if (!empty($services) && is_array($services)) {
    foreach ($services as $service) {
        if (!empty($service['url'])) {
            $pages[] = [
                'loc'        => $baseUrl . '/' . ltrim($service['url'], '/'),
                'file'       => $service['url'],
                'changefreq' => 'monthly',
                'priority'   => '0.8',
            ];
        }
    }
}

// 3. Blog & Contact Pages
$pages[] = [
    'loc'        => $baseUrl . '/blogs.php',
    'file'       => 'blogs.php',
    'changefreq' => 'weekly',
    'priority'   => '0.8',
];

$pages[] = [
    'loc'        => $baseUrl . '/contact.php',
    'file'       => 'contact.php',
    'changefreq' => 'monthly',
    'priority'   => '0.7',
];

// 4. Legal Pages if existing
$legalPages = [
    'privacy-policy.php',
    'terms-and-conditions.php',
];

foreach ($legalPages as $legalFile) {
    if (file_exists(__DIR__ . '/' . $legalFile)) {
        $pages[] = [
            'loc'        => $baseUrl . '/' . $legalFile,
            'file'       => $legalFile,
            'changefreq' => 'yearly',
            'priority'   => '0.5',
        ];
    }
}

// Output Standard Clean XML
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $item): ?>
    <url>
        <loc><?= htmlspecialchars($item['loc'], ENT_XML1, 'UTF-8') ?></loc>
        <lastmod><?= get_file_lastmod($item['file']) ?></lastmod>
        <changefreq><?= htmlspecialchars($item['changefreq'], ENT_XML1, 'UTF-8') ?></changefreq>
        <priority><?= htmlspecialchars($item['priority'], ENT_XML1, 'UTF-8') ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
