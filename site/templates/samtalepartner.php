<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main class="pt-3 bg-lgrey">

<?php if ($cover = $page->secondportrait()->toFile()): ?>
<article class="w-full m-c flex flex-sb s-flex-wrap mt-1 pb-2 s-pb-1">
  <section class="w-half s-w-100 card-80 m-card-60 s-card-80">
    <div class="w-100 br-3 bg-cc bg-c card-80 m-card-60 s-card-80" style="background-image: url(<?= $cover->url() ?>);"></div>
  </section>
  <section class="w-half s-w-100 card-80 m-card-60 s-h-0 flex flex-wrap flex-sb s-mt-1"><div class="flex-end">
    <h1 class="subheadline-scale s-heading">
      <?= $page->title() ?>
    </h1>
     <p class="smaller uc mono flex-end mt-15">
    <?php if ($page->capacity()->toBool() == true): ?>
      <span class="blink">●</span>&nbsp;Ledige forløb
    <?php else: ?>
      <span class="blink">●</span>&nbsp;Venteliste
    <?php endif ?>
  </p>
  </div>
  </section>
</article>
<?php endif ?>


<article class="w-100 pt-4 s-pt-2 s-pb-0 bt-grey">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 m-w-33 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Mød <?= $page->firstname() ?></h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100">
  <p class="body light s-small"><?= $page->description() ?></p>
</div>
</div>
</article>

<?php if ($page->video()->isNotEmpty()): ?>
<article class="w-100 p-1 pt-4 pb-4 m-pt-2 m-pb-2 s-p-0 bt-grey bb-grey">
  <section class="w-100 w-1400 m-w-full s-w-100 m-c">
    <?php if ($film = $page->video()->toFile()): ?>
    <div class="mute-video underline mb-15 ta-r mr-15 c-white s-remove">&nbsp;<?= $page->firstname() ?></div>
        <video class="video-portrait w-100" id="vid" height="100%" width="100%" autoplay loop>
          <source src="<?= $film->url() ?>" type="video/mp4">
      </video>
    <?php endif ?>
</section>
</article>
<?php endif ?>

<script>
  playbtn.onclick = e => {
  vid.play(); // grants full access to the video
  setTimeout(()=> vid.play().catch(console.error), 5000);
  }
  $("vid").prop('muted', true);

$(".mute-video").click(function () {
    if ($("vid").prop('muted')) {
        $("vid").prop('muted', false);
        $(this).addClass('unmute-video');

    } else {
        $("vid").prop('muted', true);
        $(this).removeClass('unmute-video');
    }
    console.log($("vid").prop('muted'))
});
</script>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-100">
      <h3 class="heading c-purple light va-x m-subheading"><?= $page->firstname() ?> har særlig erfaring med:</h3>
    </div>
  </div>
      <div class="mt-2 pb-2 m-remove">
        <div class="fast-ticker">
          <?php foreach ($page->experience()->split() as $category): ?>
            <div class="small h-60 pt-17 ta-c mono tag-pill bg-white pl-1 pr-1">
              <?= $category ?>
            </div>
            <div class="pl-1"></div>
          <?php endforeach ?>
        </div>
      </div>
      <div class="w-full m-c mt-1 pb-2 l-remove">
          <?php foreach ($page->experience()->split() as $category): ?>
            <div class="d-ib small mono tag-pill p-5 pl-15 pr-15 bg-white c-purple mb-10 mr-10">
                <?= $category ?>
              </div>
          <?php endforeach ?>
        </div>
</article>

<article class="w-100 h-80 bg-blue">
    <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-purple flex flex-wrap flex-sb s-reverse">
      <div class="w-third flex-end m-w-half s-w-100 s-mt-1">
      <p class="mono smaller uc pb-15 s-smallest">Pris:</p>
  <h5 class="subheadline va-x m-heading s-subheading">399 kroner.</h5>
      <p class="body s-small">
      Over halvdelen af prisen går direkte til <?= $page->firstname() ?>. Resten går til tiltag, der forebygger mistrivsel blandt andre unge.</p>
    </div>
      <div class="w-half m-w-third s-w-100 image-fill">
          <?php if ($portrait = $page->thirdportrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-3">
          <?php endif ?>
      </div>
    </section>
</article>

<?php if ($page->testimonials()->isNotEmpty()): ?>
<article class="w-100 m-c pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 s-p-0 bb-grey">
  <section class="w-100 w-1400 m-c va-c slideshow-testimonials c-purple">
    <?php foreach ($page->testimonials()->toStructure() as $testimonial): ?>
        <div class="m-c w-100 flex va-c">
          <div class="w-50 m-w-66 m-c mt-4 mb-4">
          <p class="uc mono smaller s-smallest mb-15"><?= $testimonial->author()->widont(); ?> hos <?= $page->firstname(); ?>:</p>
            <p class="body m-c s-small"><?= $testimonial->quote()->widont(); ?></p>
          </div>
        </div>
    <?php endforeach ?>
  </section>
</article>
<?php endif ?>

<article class="w-100 pt-4 s-pt-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-50 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Trygge rammer.</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body light s-small">Sessioner med <?= $page->firstname() ?> foregår i vores hyggelige lejlighed på Vesterbro. Vi arbejder ikke så godt i et helt sterilt og klinisk miljø, så vi har forsøgt at gøre det lidt hjemligt.</p>
  </div>
</div>
</article>

<article class="w-100 pb-2 pt-2 m-pb-2 s-pt-1 bb-grey">
  <section class="track flex pl-1 s-pl-15">
    <?php foreach (page('hvorfor')->space()->toFiles() as $photo): ?>
    <div class="mr-1 s-mr-15 h-full">
      <img src="<?= $photo->url() ?>" class="br-3 h-full">
    </div>
  <?php endforeach ?>
</section>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2 bb-grey">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="subheadline c-purple light va-x m-heading s-subheading">Praktisk</h3>
    </div>
    <div class="w-66 mb-4 m-mb-2 s-w-100">


    <div class="mt-1">
        <input type="checkbox" id="price" hidden />
        <div class="accordion ac-medium">
      <label for="price" class="tab-button tab-medium bt-grey flex flex-sb pl-15 pr-15 s-p-0">
        <h3 class="c-purple body s-smaller s-mono s-uc as-c">
          Pris<span class="question bg-white smallest c-purple ml-15 p-5 pl-10 pr-10 tag-pill">?</span>
        </h3>
        <h3 class="c-purple body s-small as-c">
          <?= $page->price() ?>
        </h3>
      </label>
        <div class="c-purple pl-15 pr-15 s-p-0 pb-1 s-pb-1 s-small">
          <?= $page->pricedetails()->kirbytext() ?>
        </div>
      </div>
    </div>

    <div>
        <input type="checkbox" id="price" hidden />
        <div class="accordion ac-medium">
      <label for="price" class="tab-medium bt-grey flex flex-sb pl-15 pr-15 s-p-0">
        <h3 class="c-purple body s-smaller s-mono s-uc as-c">
          Længde
        </h3>
        <h3 class="c-purple body s-small as-c">
          <?= $page->length() ?>
        </h3>
      </label>
      </div>
    </div>

    <div>
        <input type="checkbox" id="price" hidden />
        <div class="accordion ac-medium">
      <label for="price" class="tab-button tab-medium bt-grey flex flex-sb pl-15 pr-15 s-p-0">
        <h3 class="c-purple body s-smaller s-mono s-uc as-c">
          Forløb<span class="question bg-white smallest c-purple ml-15 p-5 pl-10 pr-10 tag-pill">?</span>
        </h3>
        <h3 class="c-purple body s-small as-c">
          <?= $page->course() ?>
        </h3>
      </label>
        <div class="c-purple pl-15 pr-15 s-p-0 pb-1 s-pb-1 s-small">
          <?= $page->pricedetails()->kirbytext() ?>
        </div>
      </div>
    </div>

    <div class="bb-grey">
        <input type="checkbox" id="price" hidden />
        <div class="accordion ac-medium">
      <label for="price" class="tab-medium bt-grey flex flex-sb pl-15 pr-15 s-p-0">
        <h3 class="c-purple body s-smaller s-mono s-uc as-c">
          Adresse
        </h3>
        <h3 class="c-purple body s-small as-c">
          <a href="https://goo.gl/maps/x3hbESf3KqudedoN7" title="Avilius på Google Maps" target="_blank">Vesterbrogade 35<span class="s-remove">, København</span></a>&nbsp;&nbsp;&RightArrow;
        </h3>
        </label>
      </div>
    </div>

  </div>
</div>
</article>

<article class="w-100 pt-3 pb-4 s-pt-2 s-pb-2 bb-grey">
  <section class="w-full w-1400 m-c flex s-flex-wrap flex-sb s-reverse">  
    <div class="w-33 m-w-66 s-w-100 as-c pt-4 pb-4 s-p-1 s-pt-2 s-pb-2 s-ta-c">
      <p class="body regular mb-15 s-small">
        Klar på en uforpligtende snak med&nbsp;<?= $page->firstname() ?>?</p>
      <p class="body s-small mb-1">Kontakt os her! Så vender vi tilbage hurtigst&nbsp;muligt.</p>
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

<article class="w-100 pt-4 pb-4 s-pt-2 s-pb-2">
  <section class="w-full w-1400 m-c flex flex-sb flex-wrap">
    <?php if ($page->hasPrevListed()): ?>
    <div class="as-c">
    <a href="<?= $page->prevListed()->url() ?>" title="<?= $page->prevListed()->title() ?>"><p class="smaller s-smallest uc mono">Forrige terapeut:</p>
      <p class="heading s-body"><span class="dash">&LeftArrow;&nbsp;&nbsp;<?= $page->prevListed()->firstname() ?></span></p>
    </a>
  </div>
  <?php else: ?>
  <div class="as-c">
    <?php if ($last = page('team')->children()->listed()->last()): ?>
    <a href="<?= $last->url() ?>" title="<?= $last->title() ?>"><p class="smaller s-smallest uc mono">Forrige terapeut:</p>
      <p class="heading s-body"><span class="dash">&LeftArrow;&nbsp;&nbsp;<?= $last->firstname() ?></span></p>
    </a>
  </div>
  <?php endif ?>
  <?php endif ?>
  <?php if ($page->hasNextListed()): ?>
    <div class="as-c ta-r">
    <a href="<?= $page->nextListed()->url() ?>" title="<?= $page->nextListed()->title() ?>"><p class="smaller s-smallest uc mono">Næste terapeut:</p>
      <p class="heading s-body"><span class="dash"><?= $page->nextListed()->firstname() ?>&nbsp;&nbsp;&RightArrow;</span></p>
    </a>
  </div>
  <?php else: ?>
  <div class="as-c ta-r">
    <?php if ($first = page('team')->children()->listed()->first()): ?>
    <a href="<?= $first->url() ?>" title="<?= $first->title() ?>"><p class="smaller s-smallest uc mono">Forrige terapeut:</p>
      <p class="heading s-body"><span class="dash">&LeftArrow;&nbsp;&nbsp;<?= $first->firstname() ?></span></p>
    </a>
  </div>
  <?php endif ?>
  <?php endif ?>
  
</section>
</article>

</main>

<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>

<script>
  $("video").prop('muted', true);

$(".mute-video").click(function () {
    if ($("video").prop('muted')) {
        $("video").prop('muted', false);
        $(this).addClass('unmute-video');

    } else {
        $("video").prop('muted', true);
        $(this).removeClass('unmute-video');
    }
    console.log($("video").prop('muted'))
});
</script>