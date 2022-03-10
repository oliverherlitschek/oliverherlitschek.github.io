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
  </div>
  </div>
<div class="bg-lgrey">
<main class="clearfix ptb-2">
  <section class="sidebar">
      <ul> 
        <li>
          
          <ul>
            <lh class="small regular"><a href=""><?= $page->title() ?></a></lh>
            <?php foreach ($page->children()->listed() as $group): ?>
            <li class="pl-1">
              <a href="#<?= $group->title() ?>" class="small c-grey"><?= $group->title() ?></a>
            </li>
            <?php endforeach ?>
          </ul>
        </li>
      </ul>
    </section>
<section class="three-content">
  <?php foreach ($page->children()->listed()->sortby('title') as $group): ?>
    <article class="three-content-three" id="<?= $group->title() ?>">
      <h3 class="subheadline pb-1"><span class="small-block mr-1"><?= $group->title() ?></span><?php foreach ($group->spots() as $spot): ?>
        <?php if ($spot == 0): ?>
          <span class="pill bg-white c-grey pa-25 regular smallest mono uc"><span class="c-lgrey blink">●</span>&nbsp;Venteliste&nbsp;</span>
        <?php elseif ($spot == 1): ?>
          <span class="pill bg-white pa-25 regular smallest mono uc"><span class="c-green blink">●</span>&nbsp;<!-- <?= $group->spots() ?>  -->Få pladser&nbsp;</span>
        <?php else: ?>
            <span class="pill bg-white pa-25 regular smallest mono uc"><span class="c-green blink">●</span>&nbsp;<!-- <?= $group->spots() ?>  -->Begrænsede pladser&nbsp;</span>
        <?php endif ?>
        <?php endforeach ?>
      </h3>
    </article>
    <article class="three-content-two mb-2">
    	<p class="mono smaller mb-1"><?= $group->dates() ?></p>
        <p class="body mb-1"><?= $group->description()->kirbytextinline()->widont() ?></p>
        <section class="two-content-one mr-1"><p class="mb-1"><span class="smaller mono mt-1">Forløbets længde</span><br>
        <span class="mb-1"><?= $group->length() ?></span></p>
    	</section>

    	<!-- <section class="two-content-one">
        <p class="mb-1"><span class="smaller mono mt-1">Næste holdstart</span><br>
        <span class="mb-1"><?= $group->start()->toDate('j/n/Y') ?></span></p>
    	</section> -->
    </article>

    <article class="three-content-one ml-1">
      <img class="sidebar-image" src="<?= $group->therapist()->toPage()->image()->url() ?>" alt="<?= $group->therapist()->toPage()->title() ?>">
      <p class="mono smaller text c-grey mb-1"><span class="c-black"><?= $group->title() ?></span> <?= $group->excerpt() ?> Læs mere om <?= $group->therapist()->toPage()->firstname() ?> <a href="<?= $group->therapist()->toPage()->url() ?>">her</a>&nbsp;&UpperRightArrow;</p>
        <?php foreach ($group->spots() as $spot): ?>
        <?php if ($spot == 0): ?>
         <a href="/form-groups?group=<?= $group->title()->slug() ?>">
          <button class="cta small bg-white c-grey pl-1 pr-1 mtb-1 booking uc">Venteliste</button>
          </a>
        <?php else: ?>
          <a href="/form-groups?group=<?= $group->title()->slug() ?>">
          <button class="cta small bg-green c-black pl-1 pr-1 mtb-1 booking uc">Tilmeld</button>
          </a>
        <?php endif ?>
        <?php endforeach ?>
      </a>
    </article>
    <?php endforeach ?>
    <article class="three-content-three">
    <hr class="bg-grey clearfix">
    </article>
    <article class="three-content-two pb-1 mt-2 blog-content">
    <?= $page->introduction()->blocks() ?>
  </article>
    </section>
</main>
</div>

<script>
  
  var hashParams = window.location.hash.substr(1).split('&'); // substr(1) to remove the `#`
for(var i = 0; i < hashParams.length; i++){
    var p = hashParams[i].split('=');
    document.getElementById(p[0]).value = decodeURIComponent(p[1]);;
}
</script>

<?php snippet('footer-content') ?>
<?php snippet('footer') ?>