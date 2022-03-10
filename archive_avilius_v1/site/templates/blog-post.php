<?php snippet('header') ?>
<div class="bg-white">
<?php snippet('nav') ?>
<?php snippet('mobile-nav') ?>

<div class="content bg-lgrey">
	<div class="hero hero-spread hero-75 bg-lgrey clearfix">
		<div class="hero-half pr-1 bottom">
			<h1 class="subheadline"><?= $page->title()->widont() ?></h1>
		</div>
		<div class="hero-half blog-hero pb-1 pt-1">
				<?= $page->cover()->toFile() ?>
		</div>
	</div>
</div>

<main class="clearfix ptb-2">

  <section class="blog-sidebar mb-1">
			<div class="credits">
				<p class="small regular">
					<?= $page->author() ?>
				</p>
				<p class="small c-grey mono">
					<?= $page->date()->toDate('d/m/y') ?>
				</p>
			</div>
		</section>
		<section class="three-content">
			<article class="three-content-two blog-content">
				<?= $page->text()->blocks() ?>
			</article>
			<article class="three-content-two">
				<div class="references mt-1 mb-2">
				<p class="small regular">
					<?php if ($page->references()->isNotEmpty()): ?>
					Referencer
					<?php endif ?>
				</p>
				<ul>
					<?php foreach ($page->references()->toStructure() as $reference): ?>
					<a href="<?= $reference->url() ?>">
						<li class="smaller c-grey mono">
							<?= $reference->name() ?>
						</li>
					</a>
					<?php endforeach ?>
				</ul>
			</div>
			</article>
	</section>

<?php if ($page->isListed()): ?>
	<?php snippet('picker') ?>
<?php endif ?>
</main>
</div>
<script>
        function goBack() {
  window.history.back();
}
</script>
<?php snippet('footer-content') ?>
<?php if ($page->isListed()): ?>
	<div class="pb-2"></div>
<?php endif ?>
<?php snippet('footer') ?>