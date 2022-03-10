<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('mobile-nav') ?>

<div class="content bg-white">
  <div class="hero hero-spread hero-50 bg-white clearfix">
    <div class="hero-half pr-1 bottom">
      <h1 class="subheadline"><?= $page->title() ?></h1>
    </div>
    <div class="hero-half bottom pl-1">
      <h3 class="body c-grey ta-r pr-1"><span class="small-remove"><?= $page->description() ?></span></h3>
    </div>
  </div>
  </div>
<div class="bg-lgrey">
<main class="clearfix ptb-2">
    <section class="four-content">
      <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $note): ?>
      <article class="four-content-one four-content-row mb-1">
        <a href="<?= $note->url() ?>">
          <div class="card bg-white lift">
            <div class="card-photo"><?= $note->cover()->toFile() ?></div>
            <div class="card-text pl-1 pr-1 ellipsis"><h3 class="body text ptb-1 ellipsis"><?= $note->title() ?></h3></div>
          </div>
        </a>
      </article>
        <?php endforeach ?>
        <i class="aria-hidden" aria-hidden="true"></i>
        <i class="aria-hidden" aria-hidden="true"></i>
      </section>
</main>
</div>
<?php snippet('footer-content') ?>
<?php snippet('footer') ?>