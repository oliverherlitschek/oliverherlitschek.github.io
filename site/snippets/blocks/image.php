<?php

/** @var \Kirby\Cms\Block $block */
$alt     = $block->alt();
$caption = $block->caption();
$crop    = $block->crop()->isTrue();
$link    = $block->link();
$ratio   = $block->ratio()->or('auto');
$src     = null;

if ($block->location() == 'web') {
    $src = $block->src();
} elseif ($image = $block->image()->toFile()) {
    $alt = $alt ?? $image->alt();
    $src = $image->url();
}

?>

<?php if ($src): ?>
	<?php if($page->isChildOf('blog')): ?>
  <div class="w-66 m-c mt-2 mb-3 m-w-100 s-mt-1 s-mb-1">
  <?php else: ?>
  <div class="w-100 m-c mt-1 mb-1">
<?php endif ?>
<figure<?= attr(['data-ratio' => $ratio, 'data-crop' => $crop], ' ') ?>>
  <?php if ($link->isNotEmpty()): ?>
  <a href="<?= $link->toUrl() ?>">
    <img src="<?= $src ?>" alt="<?= $alt ?>" class="br-3">
  </a>
  <?php else: ?>
  <img src="<?= $src ?>" alt="<?= $alt ?>" class="br-3">
  <?php endif ?>

  <?php if ($caption->isNotEmpty()): ?>
  <figcaption class="smaller mono lh-15 mt-10 c-grey ta-c s-ta-l">
    <?= $caption ?>
  </figcaption>
  <?php endif ?>
</figure>
</div>
<?php endif ?>
