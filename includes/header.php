<?php
if (!isset($page_title)) {
    $page_title = 'Antfarm Tech Solutions | Premium Digital Solutions in Harare, Zimbabwe';
}

if (!isset($meta_description)) {
    $meta_description = 'Antfarm Tech Solutions builds premium websites, professional business emails, hosting, and software solutions for growing businesses in Harare, Zimbabwe.';
}

if (!isset($page_slug)) {
    $page_slug = 'home';
}

if (!isset($canonical_path)) {
    $canonical_path = '/' . ltrim(basename($_SERVER['PHP_SELF']), '/');
}

$site_url = 'https://antfarm.co.zw';
$canonical_url = rtrim($site_url, '/') . $canonical_path;
$og_image = rtrim($site_url, '/') . '/assets/images/og-cover.jpg';

$local_business_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'ProfessionalService',
    'name' => 'Antfarm Tech Solutions',
    'url' => $site_url,
    'description' => $meta_description,
    'telephone' => '+263713409369',
    'email' => 'hello@antfarm.co.zw',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '31 Tweed Road, Eastlea',
        'addressLocality' => 'Harare',
        'addressCountry' => 'ZW'
    ],
    'areaServed' => [
        ['@type' => 'City', 'name' => 'Harare'],
        ['@type' => 'Country', 'name' => 'Zimbabwe']
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="Antfarm Tech Solutions">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0b1020">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">

    <meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:locale" content="en_ZW">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($meta_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image, ENT_QUOTES, 'UTF-8'); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/favicon.png">

    <script type="application/ld+json"><?php echo json_encode($local_business_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
</head>
<body data-page="<?php echo htmlspecialchars($page_slug, ENT_QUOTES, 'UTF-8'); ?>">
<a class="skip-link" href="#main-content">Skip to main content</a>
