<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main class="pt-3 bg-lgrey">

<?php if ($cover = $page->portrait()->toFile()): ?>
<article class="w-full m-c flex flex-sb s-flex-wrap mt-1 pb-2 s-pb-1">
  <section class="w-half s-w-100 card-80 m-card-60 s-card-80">
    <div class="w-100 br-3 bg-cc bg-c card-80 m-card-60 s-card-80" style="background-image: url(<?= $cover->url() ?>);"></div>
  </section>
  <section class="w-half s-w-100 card-80 m-card-60 s-h-0 flex flex-wrap flex-sb s-mt-1"><div class="flex-end">
    <p class="smaller uc mono flex-end">
      <span class="blink c-dgreen">●</span>&nbsp;<?= $page->spots() ?>
    </p>
    <h1 class="subheadline-scale s-heading">
      <?= $page->title() ?>
    </h1>
    <p class="smaller uc mono flex-end mt-15">
      Næste hold<span class="s-remove">start</span>: 

        <?php foreach ($page->dates()->toStructure()->limit(1) as $startdate): ?>
          <?= $startdate->introdate() ?><span class="s-remove"> kl. <?= $startdate->introtime() ?></span>
        <?php endforeach ?>
    </p>
  </div>
  </section>
</article>
<?php endif ?>


<article class="w-100 pt-4 s-pt-2 s-pb-2 bt-grey">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap s-reverse">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-purple light va-x m-subheading">Til dig, der&hellip;</h3>
    </div>
    <div class="w-half mb-2 s-w-100">
      <p class="body light s-small"><?= $page->description() ?></p>
    </div>
  </div>
<article class="w-100 s-pb-2">
      <div class="pb-2 m-remove">
        <div class="fast-ticker">
          <?php foreach ($page->foryou()->toStructure()->shuffle() as $category): ?>
            <div class="small h-60 pt-17 ta-c mono tag-pill bg-white pl-1 pr-1">
              &hellip;<?= $category->if() ?>
            </div>
            <div class="pl-1"></div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="w-full m-c mt-1 pb-2 l-remove">
           <?php foreach ($page->foryou()->toStructure()->shuffle() as $category): ?>
            <div class="d-ib smaller mono tag-pill p-5 pl-15 pr-15 bg-white c-purple mb-10 mr-10">
                &hellip;<?= $category->if() ?>
              </div>
          <?php endforeach ?>
        </div>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Program</h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100">
  <p class="body light s-small"><?= $page->programdescription()->nl2br()->widont() ?></p>
  <div class="bb-grey mt-2">
  <?php foreach ($page->program()->toStructure() as $session): ?>
      <input type="checkbox" id="<?= $session->headline()->slug() ?>" hidden />
      <div class="accordion ac-large">
    <label for="<?= $session->headline()->slug() ?>" class="tab tab-button tab-large bt-grey va-c flex flex-sb pl-15 pr-15">
      <h3 class="c-purple body s-small">
        <?= $session->headline() ?>
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#2E233D"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#2E233D"/>
        </g>
      </svg>
    </label>
      <div class="c-purple pl-15 pr-15 pb-1 s-small">
        <?= $session->description()->toHtml() ?>
      </div>
    </div>
    <?php endforeach ?>
  </div></div>
</div>

<article class="w-100 h-80 bg-blue">
    <section class="w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-purple flex flex-wrap flex-sb s-reverse">
      <div class="w-33 s-w-100 image-fill as-c">
          <?php if ($portrait = $page->therapistcover()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-3">
          <?php endif ?>
      </div>
      <div class="w-half flex-end m-w-66 s-w-100 s-mt-1 s-mb-2 as-c">
      <p class="mono smaller uc pb-15 s-smallest">Gruppeleder(e)</p>
  <h5 class="subheadline va-x m-heading s-subheading"><?= $page->therapist() ?></h5>
      <p class="body s-small">
      <?= $page->therapistintro()->kirbytextinline()->nl2br()->widont() ?></p>
    </div>
    </section>
</article>

<?php if ($page->testimonials()->isNotEmpty()): ?>
<article class="w-100 m-c pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 s-p-0 bg-lgrey">
  <section class="w-100 w-1400 m-c va-c slideshow-testimonials c-purple">
    <?php foreach ($page->testimonials()->toStructure() as $testimonial): ?>
        <div class="m-c w-100 flex va-c">
          <div class="w-50 m-w-66 m-c mt-4 mb-4">
          <p class="uc mono smaller s-smallest mb-15">Tidligere deltager i <?= $page->title() ?>:</p>
            <p class="body m-c s-small">"<?= $testimonial->quote()->widont() ?>"</p>
        </div>
        </div>
    <?php endforeach ?>
  </section>
</article>
<?php endif ?>

<article class="w-100 pt-4 s-pt-2 s-pb-2 bt-grey bb-grey">
  <section class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="subheadline c-purple light va-x m-heading s-subheading">Det med småt.</h3>
    </div>
    <div class="w-66 mb-4 m-mb-2 s-w-100">
    <div class="bb-grey">
      <?php foreach ($page->info()->toStructure() as $info): ?>
        <input type="checkbox" id="<?= $info->infoheadline()->slug() ?>" hidden />
        <div class="accordion ac-large">
      <label for="<?= $info->infoheadline()->slug() ?>" class="<?php if ($info->infotext()->isNotEmpty()): ?>tab-button<?php endif ?> tab-large bt-grey flex flex-sb pl-15 pr-15 s-p-0">
        <h3 class="c-purple body s-smaller s-mono s-uc as-c">
          <?= $info->infoheadline() ?><?php if ($info->infotext()->isNotEmpty()): ?><span class="question bg-white smallest c-purple ml-15 p-5 pl-10 pr-10 tag-pill">?</span><?php endif ?>
        </h3>
        <h3 class="c-purple body s-small as-c">
          <?= $info->infoanswer() ?>
        </h3>
      </label>
      <?php if ($info->infotext()->isNotEmpty()): ?>
      <div class="c-purple pl-15 pr-15 s-p-0 pb-1 s-pb-1 s-small">
          <?= $info->infotext()->kirbytext() ?>
        </div>
        <?php endif ?>
      </div>
      <?php endforeach ?>
    </div>
  </div>
  </section>
</article>

<article class="w-100 pt-4 s-pt-2 bg-purple c-white">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-50 s-w-100">
  <h3 class="subheadline light va-x m-heading s-subheading">Trygge rammer.</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body light s-small">Grupperne foregår i vores hyggelige lejlighed på Vesterbro. Vi arbejder ikke så godt i et helt sterilt og klinisk miljø, så vi har forsøgt at gøre det lidt hjemligt.</p>
  </div>
</div>
</article>

<article class="w-100 pb-2 pt-2 m-pb-2 s-pt-1 bg-purple">
  <section class="track flex pl-1 s-pl-15">
    <?php foreach (page('hvorfor')->space()->toFiles() as $photo): ?>
    <div class="mr-1 s-mr-15 h-full">
      <img src="<?= $photo->url() ?>" class="br-3 h-full">
    </div>
  <?php endforeach ?>
</section>
</article>

<article class="w-100 pt-3 pb-4 s-pt-2 s-pb-2 bb-grey">
  <section class="w-full w-1400 m-c flex s-flex-wrap flex-sb s-reverse">  
    <div class="w-33 m-w-66 s-w-100 as-c pt-4 pb-4 s-p-1 s-pt-2 s-pb-2 s-ta-c">
      <p class="body regular mb-15 s-small">
        Er <?= $page->title() ?> det rigtige forløb for dig?</p>
      <p class="body s-small mb-1">Kontakt os her – så vender vi tilbage hurtigst&nbsp;muligt.</p>
      <div class="">
        <button class="book-button c-purple h-60 br-10 br-30 m-c mr-15 bg-lpurple mono small s-smaller pl-1 pr-1 mb-15">Skriv til os</button>
        <button class="call-button c-purple h-60 br-10 br-30 m-c s-m-0 bg-white mono small s-smaller pl-1 pr-1">Book et opkald ☎️</button>
  </div>
  </div>
  <div class="w-33 as-c s-w-100 mb-2 image-fill">
          <?php if ($portrait = $page->thirdportrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-3">
          <?php endif ?>
      </div>
</section>
  <?php snippet('call') ?>
</article>


</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>