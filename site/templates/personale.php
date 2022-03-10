<?php snippet('header') ?>
<?php snippet('nav') ?>
<main>
<article class="w-100 flex s-staff">
  <div class="w-50 mt-4 mb-4 pl-4 pr-4 m-pl-1 m-pr-1 s-mt-1 s-mb-3 s-small">
    		<?= $page->description()->nl2br()->kirbytext() ?>
  </div>
  <?php if ($portrait = $page->image()): ?>
  	<div class="w-50 h-100 fixed bg-cc bg-c" style="background-image: url(<?= $portrait->url() ?>);">
  	</div>
  <?php endif ?>
</article>
</main>
<?php snippet('newform') ?>
<?php snippet('email-footer') ?>
<?php snippet('footer') ?>