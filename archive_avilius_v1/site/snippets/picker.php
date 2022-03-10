<div class="ticker-fixed therapist-picker bg-white">
  <div class="picker-wrapper">
<?php if ($page->hasPrevListed()): ?>
    <div class="small prev-list ellipsis"><a href="<?= $page->prev()->url() ?>">←<span class="small-remove"> <span class="regular">Forrige artikel:</span> <?= $page->prev()->title() ?></span></a></div>
  <?php else: ?>
    <div class="small prev-list"></div>
<?php endif ?>

<?php if ($page->hasNextListed()): ?>
    
    	<div class="small next-list ellipsis">

    		<a href="<?= $page->next()->url() ?>">
    			<span class="small-remove">
    			<span class="regular">Næste artikel:</span> <?= $page->next()->title() ?> </span>→
    		</a>
    	</div>
  <?php else: ?>
    <div class="small next-list"></div>
  <?php endif ?>
</div>
</div>