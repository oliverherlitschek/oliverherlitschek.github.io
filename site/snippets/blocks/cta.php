<div class="w-66 m-c m-w-100 mt-2 mb-2">
<hr class="bg-lgrey">
<div class="m-2 m-m-1">

<?php if ($block->category() == 'book'): ?>
	<div class="mb-1 ta-c body s-small"><?= $block->description()->kt()->nl2br()->widont() ?></div>
        <button class="btn ta-c m-c mono small pl-1 pr-1 c-purple bg-lpurple book-button">✉️&nbsp;Skriv til os</button>

<?php elseif ($block->category() == 'call'): ?>
	<div class="mb-1 ta-c body s-small"><?= $block->description()->kt()->nl2br()->widont() ?></div>
        	<button class="call-button btn m-c mt-1 bg-lgreen ta-c mono small pl-1 pr-1 c-black mb-2">📞&nbsp;Se ledige tider</button>
  			<?php snippet('call') ?>
<?php elseif ($block->category() == 'cta'): ?>
        	<?php if ($image = $block->image()->toFile()): ?>
        		<img src="<?= $image->url() ?>" class="m-c br-3 mb-2">
      		<?php endif ?>

	<div class="mb-1 ta-c body s-small"><?= $block->description()->kt()->nl2br()->widont() ?></div>
	<button class="btn ta-c m-c mono small pl-1 pr-1 c-<?= $block->linktextcolor() ?> bg-<?= $block->linkcolor() ?>"><a href="<?= $block->link() ?>" target="_blank"><?= $block->linktext() ?></a></button>
<?php endif ?>

</div>
<hr class="bg-lgrey mt-2">
</div>