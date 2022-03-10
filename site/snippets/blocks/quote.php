<div class="w-66 m-c mt-2 mb-2 m-w-100 s-mt-1 s-mb-1">
<blockquote class="subheading s-body">
  <?= $block->text()->widont()->smartypants() ?>
  <?php if ($block->citation()->isNotEmpty()): ?>
  <footer class="mt-1 small mono">&mdash; 
    <?= $block->citation() ?>
  </footer>
  <?php endif ?>
</blockquote>
</div>
