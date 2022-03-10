<?php snippet('header') ?>
<?php snippet('price-ticker') ?>
<?php snippet('nav') ?>
<main class="bg-lgrey">
<article class="w-100 bg-brown card-80 s-card-60">
  <div class="slideshow-hero">
    <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Stress.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Stresset?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Angst.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Angsttanker?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Tvivl.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">I tvivl?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Tankemylder.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Tankemylder?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Sex.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Følsom?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Ensomhed.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Ensom?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Kaerlighed.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Hjertesorg?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Retningsloeshed.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Retningsløs?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Relationer.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Svære relationer?</h2>
          </div>
        </div>

        <div class="w-100">
          <div class="flex w-100 card-80 s-card-60 bg-cc bg-c flex p-1 s-p-15" style="background-image: url(/media/Avilius-Identitet.jpg);">
            <h2 class="headline-scale c-white flex-end s-heading">Identitetskrise?</h2>
          </div>
        </div>
      </div>
</article>

<article class="w-100 flex bg-white">
    <div class="w-full m-c pt-4 pb-4 s-pt-1 s-pb-1">
      <h3 class="ta-c c-purple subheading s-body light"><?= $page->tagline()->widont() ?></h3>
    </div>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
  <div class="w-33 s-w-100">
  <h3 class="subheadline c-purple light va-x m-heading s-subheading">Sådan kommer du i&nbsp;gang.</h3>
  </div>
  <div class="w-66 mb-4 m-mb-2 s-w-100">
  <p class="body light s-small">I Avilius hjælper vi med alle de ting, som er xyz xyz xyz xyz.</p>
  <div class="bb-black mt-1">
  <?php foreach ($page->howto()->toStructure() as $value): ?>
      <input type="checkbox" id="<?= $value->howtoname()->slug() ?>" hidden />
      <div class="accordion ac-large">
    <label for="<?= $value->howtoname()->slug() ?>" class="tab tab-button tab-large bt-black va-c flex flex-sb pl-15 pr-15">
      <h3 class="c-purple body s-small">
        <?= $value->howtoname() ?>
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#2E233D"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#2E233D"/>
        </g>
      </svg>
    </label>
      <div class="c-purple pl-15 pr-15 pb-1 s-small">
        <?= $value->howtodescription()->toHtml() ?>
      </div>
    </div>
    <?php endforeach ?>
  </div></div>
</div>
</article>

<article class="w-100 h-80 bg-blue">
  <a href="../team" title="Team" class="text-hover">
    <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-purple flex flex-wrap flex-sb">
      <div class="w-half m-w-third s-w-100 image-fill">
      <?php foreach (page('team')->children()->listed()->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-3 br-30">
          <?php endif ?>
      <?php endforeach ?>
  </div>
      <div class="w-third flex-end m-w-half s-w-100 s-mt-1">
      <p class="mono smaller uc pb-15 s-smallest">Team</p>
  <h5 class="subheadline va-x m-heading s-subheading">21 af de bedste.</h5>
      <p class="body mb-1 s-small">
      Vi er en gruppe psykologistuderende på én mission – at få mistrivslen blandt vores generation på ret kurs.</p>
      <p class="dash mb-1 s-small">Mød holdet&nbsp;&nbsp;&RightArrow;</p>
    </section>
  </a>
</article>

<article class="w-100 m-c pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 s-p-0 bb-grey bg-lgrey">
  <section class="w-100 w-1400 m-c va-c slideshow-testimonials c-purple">
    <?php foreach(page('team')->children()->listed()->limit(8)->shuffle() as $therapist): ?>
      <?php if ($therapist->testimonials()->isNotEmpty()): ?>
        <div class="m-c w-100 flex va-c">
          <div class="w-50 m-w-66 m-c mt-4 mb-4">
          <p class="uc mono smaller s-smallest mb-15">Tidligere klient hos <a href="<?= $therapist->url(); ?>" target="_blank" title="<?= $therapist->title(); ?>"><?= $therapist->firstname(); ?></a>:</p>
          <?php foreach($therapist->testimonials()->toStructure()->shuffle()->limit(1) as $text): ?>
            <p class="body m-c s-small"><?= $text->quote()->widont(); ?></p>
          <?php endforeach ?>
        </div>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </section>
</article>

<article class="w-100 pt-4 s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap">
    <div class="w-33 m-w-33 s-w-100">
      <h3 class="heading c-purple light va-x m-subheading">Der er mange gode grunde til at gå i&nbsp;terapi.</h3>
    </div>
    <div class="w-half mb-2 s-w-100">
      <p class="body light s-small">Vi er et produkt af et system, der ikke er synderligt fokuserede på vores trivsel. Så må man tage sagen i egen hånd. Her er nogle ting, man kan tale om med en terapeut.</p>
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

<article class="w-100 h-80 bg-purple">
  <a href="" title="Book et besøg" class="book-button text-hover">
    <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pb-1 s-pt-1 c-white flex flex-wrap flex-sb">
      <div class="w-half s-w-100 flex-end image-fill">
            <img src="../media/Avilius-Space-2.jpg" class="m-c br-3 br-30">
  </div>
      <div class="w-third flex-end m-w-half s-w-100 s-mt-1">
  <h5 class="subheadline va-x m-heading s-subheading">Trygge rammer.</h5>
      <p class="body mb-1 s-small">
      Vores samtalehus ligger på Vesterbro og danner ramme om xyz.</p>
      <p class="dash mb-1 s-small">Book et besøg&nbsp;&nbsp;&RightArrow;</p>
    </section>
  </a>
</article>

<article class="w-100 pt-4 bg-lgrey s-pt-2 s-pb-2">
  <div class="w-full w-1400 m-c flex flex-sb s-flex-wrap s-reverse">
    <div class="w-33 m-w-half s-w-100 mb-2">
      <p class="mono smaller uc pb-15 s-smallest">Transparente priser</p>
      <h5 class="subheadline c-purple va-x m-heading s-subheading">SU-venlig terapi.</h5>
      <p class="body mb-1 s-small">
      Det er vigtigt at vide, hvor SU'en havner. </p>

    <div class="bb-black mt-1">
      <input type="checkbox" id="wages" hidden />
      <div class="accordion ac-large">
    <label for="wages" class="tab tab-button tab-large bt-black va-c flex flex-sb pl-10 pr-10">
      <h3 class="c-purple body s-small">
        <span style="color:#C1DCF9;">&#11044;</span>&nbsp;
        Løn til din terapeut
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#2E233D"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#2E233D"/>
        </g>
      </svg>
    </label>
      <div class="c-purple pl-15 pr-15 pb-1 s-small">
        <p>Tekst</p>
      </div>
    </div>
  </div>
  <div class="">
      <input type="checkbox" id="administration" hidden />
      <div class="accordion ac-large">
    <label for="administration" class="tab tab-button tab-large va-c flex flex-sb pl-10 pr-10">
      <h3 class="c-purple body s-small">
        <span style="color:#D0DDA2;">&#11044;</span>&nbsp;
        Administration
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#2E233D"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#2E233D"/>
        </g>
      </svg>
    </label>
      <div class="c-purple pl-15 pr-15 pb-1 s-small">
        <p>Tekst</p>
      </div>
    </div>
  </div>
  <div class="">
      <input type="checkbox" id="supervision" hidden />
      <div class="accordion ac-large">
    <label for="supervision" class="tab tab-button tab-large bt-black va-c flex flex-sb pl-10 pr-10">
      <h3 class="c-purple body s-small">
        <span style="color:#FFFFDD;">&#11044;</span>&nbsp;
        Supervision
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#2E233D"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#2E233D"/>
        </g>
      </svg>
    </label>
      <div class="c-purple pl-15 pr-15 pb-1 s-small">
        <p>Tekst</p>
      </div>
    </div>
  </div>
  <div class="bb-black">
      <input type="checkbox" id="revenue" hidden />
      <div class="accordion ac-large">
    <label for="revenue" class="tab tab-button tab-large bt-black va-c flex flex-sb pl-10 pr-10">
      <h3 class="c-purple body s-small">
        <span style="color:white;">&#11044;</span>&nbsp;
        Overskud
      </h3>
      <svg  class="tab-x" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
        <g>
          <rect class="bar1" x="9" y="0" width="2" height="20" fill="#2E233D"/>
          <rect class="bar2" x="0" y="9" width="20" height="2" fill="#2E233D"/>
        </g>
      </svg>
    </label>
      <div class="c-purple pl-15 pr-15 pb-1 s-small">
        <p>Tekst</p>
      </div>
    </div>
  </div>
  </div>

    <div class="mb-4 m-mb-2 s-w-100">
      <div id="breakdown" class="flex flex-wrap m-c">
        <section id="wages" class="br-3 flex va-c">
          <p class="ta-c small"><span class="mono smallest">210 kr.</span><br>Løn til din terapeut</p>
        </section>
        <section id="markup" class="br-3 flex va-c">
          <p class="ta-c small"><span class="mono smallest">Overskud</span></p>
        </section>
        <section id="supervision" class="br-3 flex va-c">
          <p class="ta-c small"><span class="mono smallest">80 kr.</span><br>Supervision</p>
        </section>
        <section id="administration" class="br-3 flex va-c">
          <p class="ta-c small"><span class="mono smallest">100 kr.</span><br>Administration</p>
        </section>
    </div>
  </div>
</div>
</article>

<article class="w-100 h-80 bg-purple bg-cc bg-c s-card-60" style="background-image: url(/media/Avilius-Parterapi-Test-pic.jpg);">
  <section class=" w-full w-1400 h-80 m-c pt-4 pb-3 s-pt-1 s-pb-2 c-white flex flex-wrap flex-sb">
    <div class="w-33 m-w-half flex-end s-w-100">
      <a href="/grupper" title="Gruppeforløb">
      <p class="mono smaller uc pb-15 s-smallest">Gruppeterapi</p>
      <h5 class="subheadline va-x m-heading s-subheading">Er du mere til holdsport?</h5>
      <p class="body mb-1 s-small">
      Vi mener, at gruppeterapi er fremtiden for vores generation, så vi har udviklet nogle forløb specifikt til os selv.</p>
      <p class="dash s-small">Gruppeforløb&nbsp;&nbsp;&RightArrow;</p>
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