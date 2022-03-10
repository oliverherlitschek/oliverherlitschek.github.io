<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('mobile-nav') ?>

<div class="content bg-white">
  <div class="hero hero-spread hero-75 bg-white clearfix">
    <div class="hero-half pr-1 bottom">
      <h1 class="subheadline"><?= $page->title() ?></h1>
    </div>
    <div class="hero-half hero-image" style="background-image: url(<?= $page->image()->url() ?>);">
      <div class="hero-caption ta-r mr-1 mb-1">
        <p class="small c-white">
          <?= $page->caption()->widont() ?>
        </p>
      </div>
    </div>
  </div>
  </div>
<div class="bg-lgrey">
<main class="clearfix ptb-2">
  <section class="sidebar">
      <ul> 
        <li>
          
          <ul>
            <lh class="small regular"><a href="">Terapeuter</a></lh>
            <?php foreach ($page->children()->listed()->shuffle() as $therapist): ?>
            <li class="pl-1">
              <a href="#<?= $therapist->title() ?>" class="small c-grey"><?= $therapist->title() ?></a>
            </li>
            <?php endforeach ?>
          </ul>
        </li>
      </ul>
    </section>
    <section class="three-content">
      <article class="three-content-two pb-1">
        <p class="body"><?= $page->introduction()->widont() ?></p>
      </article>
      <article class="three-content-three">
        <section class="four-content">
              <?php foreach ($page->children()->listed()->shuffle() as $therapist): ?>
              <article class="four-content-third mb-1" id="<?= $therapist->title() ?>">
                <a href="<?= $therapist->url() ?>">
          <div class="card bg-white lift">
            <div class="card-photo"><?= $therapist->image()->resize(700) ?></div>
            <div class="card-text"><h3 class="body ta-c ptb-1"><?= $therapist->firstname() ?></h3></div>
          </div>
        </a>
              </article>
                <?php endforeach ?>
        </section>
      </article>
  </section>
</main>
</div>
<?php snippet('footer-content') ?>
<?php snippet('footer') ?>