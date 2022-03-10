<?php snippet('header') ?>
<div class="bg-lgrey">
<div class="small-nav bg-white pl-1 bb-lgrey">
    <h1 class="body ellipsis"><span class="small-remove"><a href="/"><?= $site->title() ?></a> — </span><?= $page->title() ?></h1>
    <ul>
        <li><a href="/therapists"><button class="cta small uc bg-white c-black pl-1 pr-1 booking bb-lgrey">Luk</button></a></li>
    </ul>
</div>

<main class="clearfix pt-2">

	<section class="therapist-content">
		<span class="small-remove">
		<article class="therapist-image">
			<?= $page->image() ?>
		</article>
	</span>
		<article class="therapist-text body">
			<?= $page->description()->kt()->widont() ?>
			<a href="/form">
			<button class="cta body bg-green c-black pl-1 pr-1 mtb-1 booking">
					Book <?= $page->firstname() ?>
					</button>
					</a>
		</article>
	</section>

<div class="ticker-fixed therapist-picker bg-white">
	<div class="picker-wrapper">
<?php if ($page->hasPrevListed()): ?>
		<div class="small ellipsis prev-list"><a href="<?= $page->prevListed()->url() ?>">←<span class="small-remove"> <span class="regular">Forrige terapeut:</span> <?= $page->prevListed()->firstname() ?></span></a></div>
	<?php else: ?>
		<div class="small ellipsis prev-list"></div>
<?php endif ?>

<?php if ($page->hasNextListed()): ?>
		<div class="small ellipsis next-list"><a href="<?= $page->nextListed()->url() ?>"><span class="small-remove"><span class="regular">Næste terapeut:</span> <?= $page->nextListed()->firstname() ?> </span>→</a></div>
	<?php else: ?>
		<div class="small ellipsis next-list"></div>
	<?php endif ?>
</div>
        </div>
</main>
</div>
<script>
        function goBack() {
  window.history.back();
}
</script>

<?php snippet('footer') ?>