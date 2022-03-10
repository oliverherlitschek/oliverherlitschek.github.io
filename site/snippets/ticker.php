<article class="ticker-wrap bg-blue body c-purple">
<div class="ticker pt-10">
    <?php foreach ($site->quotes()->toStructure()->shuffle() as $quote): ?>
  <div class="ml-3 mt-1">
  <?= $quote->text()->smartypants() ?>
  </div>
<?php endforeach ?>
</div>
</article>