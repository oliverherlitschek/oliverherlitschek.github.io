<?php snippet('header') ?>
<?php snippet('cta') ?>
<?php snippet('nav') ?>
<main class="bg-lgrey">
  <?php if ($cover = $page->cover()->toFile()): ?>
<article class="w-100 card-80 s-card-60 flex flex-sb p-1 bg-cc bg-c s-p-15" style="background-image:url(<?= $cover->url() ?>);">
  <h1 class="subheadline-scale c-white flex-end s-heading">
    <?= $page->headline() ?>
  </h1>
</article>
<?php endif ?>

<article class="w-100 flex bg-white">
    <div class="w-full m-c pt-4 pb-4 s-pt-1 s-pb-1">
      <h3 class="ta-c c-purple subheading s-body light"><?= $page->tagline()->widont() ?></h3>
    </div>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap s-reverse">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-purple light va-x m-subheading">Der er mange gode grunde til at gå i&nbsp;parterapi.</h3>
    </div>
    <div class="w-half mb-2 s-w-100">
      <p class="body light s-small">Parterapi er en kæmpe kliché – man forestiller sig det fortabte forhold bestående af to mennesker, der ikke har noget fælles "vi". Man forestiller sig, at kun ulykkelige mennesker kan gå i parterapi. Man forestiller sig, at det ikke fungerer.</p>
    </div>
  </div>
      <div class="mt-3 pb-2">
        <div class="fast-ticker">
          <?php foreach ($page->foryou()->split() as $if): ?>
            <div class="small h-60 pt-17 ta-c mono tag-pill bg-white pl-1 pr-1">
              <?= $if ?>
            </div>
            <div class="pl-1"></div>
          <?php endforeach ?>
        </div>
      </div>
</article>

<?php if ($page->testimonials()->isNotEmpty()): ?>
<article class="w-100 m-c pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 s-p-0 bg-lgrey bt-grey">
  <section class="w-100 w-1400 m-c va-c slideshow-testimonials c-purple">
    <?php foreach ($page->testimonials()->toStructure() as $testimonial): ?>
        <div class="m-c w-100 flex va-c">
          <div class="w-50 m-w-66 m-c mt-4 mb-4">
          <p class="uc mono smaller s-smallest mb-15">Tidligere par hos Avilius:</p>
            <p class="body m-c s-small">"<?= $testimonial->quote()->widont() ?>"</p>
        </div>
        </div>
    <?php endforeach ?>
  </section>
</article>
<?php endif ?>

<article class="w-100 h-80 bg-purple">
    <section class="w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-white flex flex-wrap flex-sb s-reverse">
      <div class="w-33 s-w-100 image-fill as-c">
          <?php if ($cover = $page->cover()->toFile()): ?>
            <img src="<?= $cover->url() ?>" class="m-c br-3">
          <?php endif ?>
      </div>
      <div class="w-half flex-end m-w-66 s-w-100 s-mt-1 s-mb-2 as-c">
      <p class="mono smaller uc pb-15 s-smallest">Metode</p>
  <h5 class="subheadline va-x m-heading s-subheading"><?= $page->methodheadline() ?></h5>
      <p class="body s-small">
      <?= $page->methoddescription()->kirbytextinline()->nl2br()->widont() ?></p>
    </div>
    </section>
</article>

<article class="w-100 pt-4 s-pt-2 c-purple">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-50 s-w-100">
  <h3 class="subheadline light va-x m-heading s-subheading">Trygge rammer.</h3>
  </div>
  <div class="w-50 s-w-100">
  <p class="body light s-small">Grupperne foregår i vores hyggelige lejlighed på Vesterbro. Vi arbejder ikke så godt i et helt sterilt og klinisk miljø, så vi har forsøgt at gøre det lidt hjemligt.</p>
  </div>
</div>
</article>

<article class="w-100 pb-2 pt-2 m-pb-2 s-pt-1">
  <section class="track flex pl-1 s-pl-15">
    <?php foreach (page('hvorfor')->space()->toFiles() as $photo): ?>
    <div class="mr-1 s-mr-15 h-full">
      <img src="<?= $photo->url() ?>" class="br-3 h-full">
    </div>
  <?php endforeach ?>
</section>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2 bt-grey">
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

<article class="w-100 h-80 bg-purple bg-cc bg-c s-card-60" style="background-image: url(/media/Avilius-Parterapi-Test-pic.jpg);">
  <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pt-1 s-pb-2 c-white flex flex-wrap flex-sb">
    <div class="w-33 m-w-half flex-end s-w-100">
      <a href="../individuelle-samtaler" title="Individuel terapi">
      <p class="mono smaller uc pb-15 s-smallest">Individuel terapi</p>
      <h5 class="subheadline va-x m-heading s-subheading">Er din partner modvillig?</h5>
      <p class="body mb-1 s-small">
      Dit behov er ikke nødvendigvis også din partners behov. Vi laver individuel terapi om stort og småt – også de allernæreste&nbsp;relationer.</p>
      <p class="dash s-small">Individuel terapi&nbsp;&nbsp;&RightArrow;</p>
    </a>
  </section>
</article>

<article class="w-100">
  <section class="h-66 s-card-33 w-full w-1400 m-c va-c flex flex-wrap">
  <div class="w-100 m-c pt-4 pb-4 s-p-1 s-pt-2 s-pb-2">
  <p class="body regular ta-c mb-15 s-small">
    Det er så yndigt at følges ad.
  </p>
    <p class="body light ta-c s-small mb-1">
    Er I klar til at udforske parforholdet sammen?</p>
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