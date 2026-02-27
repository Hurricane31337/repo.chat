<!DOCTYPE html>
<html lang="en">
<head>
    <script>
    (function() {
        var s = localStorage.getItem('theme');
        if (s === 'light' || (!s && window.matchMedia('(prefers-color-scheme: light)').matches)) {
            document.documentElement.classList.add('light');
        }
    })();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
<?php if (!empty($pageKeywords)): ?>
    <meta name="keywords" content="<?php echo $pageKeywords; ?>">
<?php endif; ?>
<?php if (!empty($ogTitle)): ?>
    <meta property="og:title" content="<?php echo $ogTitle; ?>">
    <meta property="og:description" content="<?php echo $ogDescription ?? $pageDescription; ?>">
    <meta property="og:type" content="<?php echo $ogType ?? 'website'; ?>">
    <meta property="og:url" content="<?php echo $ogUrl ?? 'https://repo.chat'; ?>">
<?php endif; ?>
    <meta name="color-scheme" content="light dark">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
