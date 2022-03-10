<?php if($page->isChildOf('blog')): ?>
  <div class="w-50 m-c m-w-100 mb-1 lh-15 light blog-content s-small">
  <?php else: ?>
  <div class="w-100 mb-1 s-small">
<?php endif ?>
<?= $block->text()->nl2br() ?>
</div>