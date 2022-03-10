<!doctype html>
<html lang="da">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="viewport" content="initial-scale=1" />
  <meta name="format-detection" content="telephone=no">

<!-- META/OPEN GRAPH -->
<?= snippet('metadata') ?>

<!-- FAVICONS ETC -->
<link rel="apple-touch-icon" sizes="120x120" href="/media/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/media/favicons/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/media/favicons/favicon-16x16.png">
<link rel="manifest" href="/media/favicons/site.webmanifest">
<link rel="mask-icon" href="/media/favicons/safari-pinned-tab.svg" color="#e1fd49">
<link rel="shortcut icon" href="/media/favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-config" content="/media/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">

<!-- SITE TITLE -->
<?php if($page->isHomePage()): ?>
  <title><?= $site->title() ?></title>
  <?php else: ?>
  <title><?= $site->title() ?> — <?= $page->title() ?></title>
<?php endif ?>

<!-- GOOGLE -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M8MTPFF');</script>

<!-- End Google Tag Manager -->
  <?= css(['media/css/normalize.css', '@auto']) ?>
  <?= css(['media/css/styles.css', '@auto']) ?>
  <?= css(['media/css/slick.css', '@auto']) ?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M8MTPFF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->