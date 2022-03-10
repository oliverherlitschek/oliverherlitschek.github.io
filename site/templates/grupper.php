<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main class="bg-lgrey">
  <?php if ($cover = $page->cover()->toFile()): ?>
<article class="w-100 card-80 s-card-60 flex flex-sb p-1 bg-cc bg-c s-p-15" style="background-image:url(<?= $cover->url() ?>);">
  <h1 class="subheadline c-white flex-end s-heading">
    <?= $page->title() ?>
  </h1>
</article>
<?php endif ?>

<article class="w-100 flex bg-white">
    <div class="w-full m-c pt-4 pb-4 s-pt-1 s-pb-1">
      <h3 class="ta-c c-purple subheading s-body light"><?= $page->tagline()->widont() ?></h3>
    </div>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
<section class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-purple light va-x m-subheading"><?= $page->comparisonheadline()->widont() ?></h3>
    </div>
    <div class="w-half mb-2 s-w-100">
      <p class="body light s-small"><?= $page->comparisontext()->widont() ?></p>
    </div>
  </section>
</article>

<article class="w-100 pb-2">
  <section class="w-full w-1400 m-c">
  <div class="tab tab-medium bb-black flex flex-sb va-c">
    <div class="w-50 body s-small"><a href="../individuelle-samtaler" target="_blank" title="Individuel terapi" class="underline">Individuel</a> terapi er...</div><div class="w-50 body s-small">Gruppeterapi er...</div>
  </div>
  <?php foreach ($page->comparisons()->toStructure() as $comparison): ?>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0"><?= $comparison->individual() ?></div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0"><?= $comparison->group() ?></div>
  </div>
  <?php endforeach ?>
</section>
</article>

<?php foreach (page('grupper')->children()->listed()->limit(1) as $group): ?>
<article class="w-100 h-80 bg-blue">
  <a href="<?= $group->url() ?>" title="<?= $group->title() ?>" class="text-hover">
    <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-purple flex flex-wrap flex-sb">
      <div class="w-half m-w-third s-w-100 image-fill">
          <?php if ($portrait = $group->cover()->toFile()): ?>
            <img src="<?= $portrait->resize(1000, null, 90)->url() ?>" class="m-c br-3 br-30">
          <?php endif ?>
  </div>
      <div class="w-third flex-end m-w-half s-w-100 s-mt-1">
      <p class="mono smaller uc pb-15 s-smallest"><?php if ($group->dates()->isEmpty()): ?>
        Næste hold<span class="s-remove">start</span>: Venteliste
      <?php else: ?>
        Næste hold<span class="s-remove">start</span>: <?php foreach ($group->dates()->toStructure()->limit(1) as $startdate): ?>
            <?= $startdate->introdate() ?>
        <?php endforeach ?>
      <?php endif ?></p>
  <h5 class="subheadline va-x m-heading s-subheading"><?= $group->title() ?></h5>
      <p class="body mb-1 s-small">
      <?= $group->intro()->widont() ?></p>
      <p class="dash mb-1 s-small">Læs mere&nbsp;&nbsp;&RightArrow;</p>
    </section>
  </a>
</article>
<?php endforeach ?>

<article class="w-100 m-c pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 s-p-0 bb-grey bg-lgrey">
  <section class="w-100 w-1400 m-c va-c slideshow-testimonials c-purple">
    <?php foreach ($page->children()->listed()->pluck('testimonials') as $testimonial): ?>
      <?php foreach ($testimonial->toStructure() as $testi): ?>
        <div class="m-c w-100 flex va-c">
          <div class="w-50 m-w-66 m-c mt-4 mb-4">
          <p class="uc mono smaller s-smallest mb-15">Tidligere deltager i <a href="<?= $testi->parent()->url(); ?>" target="_blank" title="<?= $testi->parent()->title(); ?>"><?= $testi->parent()->title(); ?></a>:</p>
            <p class="body m-c s-small"><?= $testi->quote()->widont(); ?></p>
        </div>
        </div>
        <?php endforeach ?>
    <?php endforeach ?>
  </section>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <section class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-purple light va-x m-subheading">Vores grupper</h3>
    </div>
    <div class="w-half mb-2 s-w-100">
      <p class="body light s-small">Vi udvikler gruppeforløb baseret på de temaer, vi oplever som gennemgående i individuel terapi. På den måde sikrer vi, at vi laver relevant og effektiv gruppeterapi.</p>
    </div>
  </section>
</article>

<article class="w-100 pb-2 pt-2 c-purple bb-grey">
  <section class="track flex">
    <?php foreach (page('grupper')->children()->listed()->shuffle() as $gruppe): ?>
      <?php if ($cover = $gruppe->cover()->toFile()): ?>
        <div class="w-third m-w-half bg-cc bg-c c-white flex br-3 br-30 ml-1 s-ml-15" style="background-image: url(<?= $cover->url() ?>)">
          <a href="<?= $gruppe->url() ?>" class="w-100 p-1 flex flex-wrap flex-sb s-pt-15 s-pb-15 s-pl-15 s-pr-15" title="<?= $gruppe->title() ?>">
            <h3 class="s-small"><span class="text-hover"><?= $gruppe->title() ?></span></h3>
            <div class="w-100 flex-end">
              <h3 class="c-white mono uc smaller ta-r s-smallest">
                <?= $gruppe->price() ?>,-
              </h3>
            </div>
          </a>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </section>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <section class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="subheadline c-purple light va-x m-heading s-subheading"><?= $page->sessionheadline() ?></h3>
      <p class="body light s-small"><?= $page->sessiontext()->widont() ?></p>
    </div>
    <div class="w-66 mb-4 m-mb-2 s-w-100">

    <div class="mt-1 bb-grey">
      <?php foreach (page('grupper')->children()->listed() as $group): ?>
        <input type="checkbox" id="<?= $group->title()->slug() ?>" hidden />
        <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
        <div class="tab-button tab-large bt-grey flex flex-sb pl-15 pr-15 s-p-0">
            <h3 class="c-purple tab-button body s-small as-c"><span class="dash"><?= $group->title() ?>&nbsp;&nbsp;&RightArrow;</span></h3>
            <p class="c-purple mono smaller uc as-c">
              <?php if ($group->dates()->isEmpty()): ?>
              Venteliste
              <?php else: ?>
              <?php foreach ($group->dates()->toStructure()->limit(1) as $startdate): ?>
          <?= $startdate->introdate() ?>
        <?php endforeach ?>
        <?php endif ?>
            </p>
          </div>
      </a>
      <?php endforeach ?>
    </div>

  </div>
</section>
</article>

<article class="w-100 h-80 bg-purple bg-cc bg-c s-card-60" style="background-image: url(/media/Avilius-Parterapi-Test-pic.jpg);">
  <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pt-1 s-pb-2 c-white flex flex-wrap flex-sb">
    <div class="w-33 m-w-half flex-end s-w-100">
      <a href="../individuelle-samtaler" title="Individuel terapi">
      <p class="mono smaller uc pb-15 s-smallest">Individuel terapi</p>
      <h5 class="subheadline va-x m-heading s-subheading">Er du mere til soloviolin?</h5>
      <p class="body mb-1 s-small">
      Vi tror på, at vores fælles fremtid har en fælles løsning – men har også individuel terapi til dig, der vil ordne tingene selv.</p>
      <p class="dash s-small">Individuel terapi&nbsp;&nbsp;&RightArrow;</p>
    </a>
  </section>
</article>

<article class="w-100 bg-brown">
  <section class="h-66 s-card-33 w-full w-1400 m-c va-c flex flex-wrap">
  <div class="w-100 m-c pt-4 pb-4 s-p-1 s-pt-2 s-pb-2">
  <p class="body regular ta-c mb-15 s-small">
    Er Avilius det rigtige for dig?
  </p>
    <p class="body light ta-c s-small mb-1">
    Skriv til os og fortæl, hvordan det går <span class="s-remove"><br></span>– så finder vi ud af det&nbsp;sammen.</p>
    <div class="w-100 m-c ta-c">
    <button class="book-button c-purple h-60 br-10 br-30 m-c m-10 bg-lpurple ta-c mono small s-smaller pl-1 pr-1">Skriv til os</button> <button class="call-button c-purple h-60 br-10 br-30 m-c m-10 s-m-0 bg-white ta-c mono small s-smaller pl-1 pr-1">Book et opkald ☎️</button>
  </div>
  </div>
</section>
  <?php snippet('call') ?>
</article>


</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>