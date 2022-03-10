<!-- STATIC -->
<meta property="og:type" content="website">
<meta property="og:site_name" content="Avilius">
<meta property="og:url" content="<?php echo ($page->url()) ?>">
<meta property="og:locale" content="da_DK">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

<!-- DYNAMIC OPENGRAPH -->
<meta property="og:title" content="<?php echo ($page->seotitle()) ?>">
<meta property="og:description" content="<?php echo($page->seodescription()) ?>">
<?php if ($page->seoimage()->isNotEmpty()): ?>
<meta property="og:image" content="<?php echo ($page->seoimage()->toFile()->crop(1280, 720)->url()) ?>">
<?php endif ?>


<!-- DYNAMIC META -->
<meta property="description" name="description" content="<?php echo ($page->seodescription()) ?>" />
<meta property="title" name="title" content="<?php echo ($page->seotitle()) ?>">
<meta property="keywords" name="keywords" content="<?php echo ($page->seokeywords()) ?>">