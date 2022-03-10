<?php snippet('header') ?>
<?php snippet('nav') ?>


<main>
<article class="w-100 card-80 flex bg-white s-group-hero">
  <?php if ($portrait = $page->portrait()->toFile()): ?>
    <div class="bg-white w-50 flex va-c bg-cc bg-c portrait" style="background-image:url(<?= $portrait->url() ?>);">
      <div class="flex-end w-100 body mb-15 ta-r mr-15 c-white m-small s-ta-l s-ml-15 reveal-2"><p class="body ta-c mt-10 a-underline"><?= $page->portraitcaption()->kt() ?></p></div>
    </div>
  <?php endif ?>
  <div class="w-50 flex flex-wrap reveal">
    <div class="w-full m-c s-pt-15 s-pl-15 s-pr-15z">
      <h2 class="subheadline light pt-2 s-heading s-p-0"><?= $page->title() ?></h2>
    </div>
    <div class="w-full m-c flex flex-end flex-sb mb-15 s-mb-15 s-pt-15 s-pl-15 s-pr-15 reveal">
      <h3 class="body light m-small"><?= $page->dates() ?></h3>
      <h3 class="body light m-small"><span class="blink c-dgreen">●</span>&nbsp;<?= $page->spots() ?></span></h3>
    </div>
  </div>
</article>

<article class="w-100 flex bg-lpurple">
    <div class="w-full m-c pt-4 pb-4 s-pt-1 s-pb-1">
      <h3 class="ta-c c-purple subheading s-body light reveal">Gruppeterapi målrettet det gode&nbsp;ungdomsliv.</h3>
    </div>
</article>

<article class="w-100 m-c pt-4 pb-1 p-1 flex flex-sb m-pt-2 s-flex-wrap">
    <section class="w-33 sticky s-no-stick s-w-100 pb-1">
        <h3 class="heading va-x s-subheading">Sammen er vi&nbsp;stærkere.</h3>
        <p class="body light s-small">Her ser du alle vores forløb og næste opstartsdato. Vi udvikler løbende nye gruppeforløb baseret på de oplevelser, vi har i terapirummet. Sådan sikrer vi os, at vi altid kommer problematikkerne i møde.<br><br>Mangler du et forløb, der passer til dig?<br><br><a href="mailto:kontakt@avilius.dk?subject=Forslag til et gruppeforløb" title="Foreslå et gruppeforløb">Foreslå et forløb</a></p>
    </section>
    <section class="w-66 s-w-100">
      <div class="bb-black">
      <?php foreach (page('grupper')->children()->listed() as $group): ?>
        <input type="checkbox" id="<?= $group->title()->slug() ?>" hidden />
        <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
        <div class="tab tab-large bt-black va-c pl-1 pr-15 pb-1 pt-1 s-pl-0 s-pr-0 s-pt-15 s-pb-15 reveal">
            <div class="mono smaller mr-1 uc s-smallest s-mr-15"><?= $group->dates() ?></div>
            <h3 class="body tab-button s-small"><?= $group->title()->widont() ?></h3>
            <?php if ($pic = $group->cover()->toFile()): ?>
            <img src="<?= $pic->url() ?>" title="<?= $group->title() ?>" class="tab-button blog-thumb br-3 br-30 ml-1">
            <?php endif ?>
          </div>
      </a>
      <?php endforeach ?>
    </div>
    </section>
</article>

<?php foreach (page('grupper')->children()->listed()->limit(1) as $group): ?>
<article class="w-100 bg-lgrey pt-2 pb-2 s-pb-1">
  <div class="w-full m-c flex flex-sb">
    <div class="w-50 s-w-66">
      <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: <?= $group->dates() ?></p>
    </div>
  </div>
  <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
    <div class="w-full m-c flex mt-10 bg-white video-portrait-container br-10 br-30 s-reverse">
      <div class="w-66 m-1 mt-2 mr-1 s-m-15 s-mt-1 s-w-100 s-pt-15 s-pb-15">
        <h4 class="heading light va-x m-heading s-body"><?= $group->title() ?></h4>
        <p class="body s-small">
          <?= $group->excerpt()->widont() ?><br><br>
        <span class="dash">Læs mere &RightArrow;</span></p>
      </div>
      <?php if ($hero = $group->cover()->toFile()): ?>
      <div class="w-33 bg-cc bg-c mh-100 s-h-50 s-w-100" style="
  background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
      </div>
      <?php endif ?>
    </div>
  </a>
  <div class="sticker mono uc ta-c va-c m-c spin bg-lgreen c-black smallest">Nyt<br>forløb!</div>
</article>
<?php endforeach ?>

<article class="w-100 bg-lgrey pt-2 pb-1 p-1 flex flex-sb s-flex-wrap s-w-100 s-pt-2 s-p-15">
  <div class="w-33 s-w-100 reveal">
  <h3 class="heading s-w-100 va-x m-heading s-subheading">Sammen eller hver for&nbsp;sig?</h3>
  </div>
  <div class="w-66 s-w-full reveal">
  <p class="body light c-purple mb-1 s-small">God tekst om fordelene ved&nbsp;grupper.</p>
  </div>
</article>

<article class="w-100 bg-lgrey pb-2">
  <div class="w-full m-c reveal">
  <div class="tab tab-medium bb-black flex flex-sb va-c">
    <div class="w-50 body s-small">Individuel terapi</div><div class="w-50 body s-small">Gruppeterapi</div>
  </div>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">299,- per gang</div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Fra 200,- per gang</div>
  </div>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Ét perspektiv</div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Mange perspektiver</div>
  </div>
  <div class="tab tab-medium s-tab-small bb-black flex flex-sb va-c m-tab-large">
    <div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Ting 3</div><div class="w-50 mono small s-smaller pl-15 m-mt-1 s-m-0 m-mb-1 s-pl-0">Ting 3</div>
  </div>
</article>

<?php foreach (page('grupper')->children()->listed()->offset(1)->limit(1) as $group): ?>
<article class="w-100 bg-lgrey pt-1 pb-2 s-pb-1">
  <div class="w-full m-c flex flex-sb">
    <div class="w-50 s-w-66">
      <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: <?= $group->dates() ?></p>
    </div>
    <div class="w-50 s-w-33">
      <p class="mono smaller uc ta-r s-smallest"><span class="blink c-dgreen">●</span>&nbsp;<?= $group->spots() ?></p>
    </div>
  </div>
  <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
    <div class="w-full m-c flex mt-10 bg-white video-portrait-container br-10 br-30 s-reverse">
      <div class="w-66 m-1 mt-2 mr-1 s-m-15 s-mt-1 s-w-100 s-pt-15 s-pb-15">
        <h4 class="heading light va-x m-heading s-body"><?= $group->title() ?></h4>
        <p class="body s-small">
          <?= $group->excerpt()->widont() ?><br><br>
        <span class="dash">Læs mere &RightArrow;</span></p>
      </div>
      <?php if ($hero = $group->cover()->toFile()): ?>
      <div class="w-33 bg-cc bg-c mh-100 s-h-50 s-w-100" style="
  background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
      </div>
      <?php endif ?>
    </div>
  </a>
</article>
<?php endforeach ?>

<article class="w-100 m-c bg-white pt-4 pb-4 flex flex-sb m-pt-2 m-pb-2 bg-lgrey">
  <div class="w-100 m-c as-c slideshow-testimonials reveal">
    <?php foreach ($site->testimonials()->toStructure() as $testimonial): ?>
    <div class="m-c as-c ta-c mt-2 mb-2 s-m-0">
      <h3 class="subheading light w-66 m-w-66 m-c s-body">"<?= $testimonial->quote()->widont() ?>"</h3>
      <p class="smaller mono a-underline mt-1 s-smallest">
    &mdash;&nbsp;<?= $testimonial->author()->kirbytextinline() ?></p>
  </div>
  <?php endforeach ?>
</div>
</article>

<?php foreach (page('grupper')->children()->listed()->offset(2)->limit(1) as $group): ?>
<article class="w-100 bg-purple pt-1 pb-2 s-pb-1">
  <div class="w-full m-c flex flex-sb c-white">
    <div class="w-50 s-w-66">
      <p class="mono smaller uc s-smallest">Næste hold<span class="s-remove">start</span>: <?= $group->dates() ?></p>
    </div>
    <div class="w-50 s-w-33">
      <p class="mono smaller uc ta-r s-smallest"><span class="blink c-dgreen">●</span>&nbsp;<?= $group->spots() ?></p>
    </div>
  </div>
  <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
    <div class="w-full m-c flex mt-10 bg-white video-portrait-container br-10 br-30 s-reverse">
      <div class="w-66 m-1 mt-2 mr-1 s-m-15 s-mt-1 s-w-100 s-pt-15 s-pb-15">
        <h4 class="heading light va-x m-heading s-body"><?= $group->title() ?></h4>
        <p class="body s-small">
          <?= $group->excerpt()->widont() ?><br><br>
        <span class="dash">Læs mere &RightArrow;</span></p>
      </div>
      <?php if ($hero = $group->cover()->toFile()): ?>
      <div class="w-33 bg-cc bg-c mh-100 s-h-50 s-w-100" style="
  background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
      </div>
      <?php endif ?>
    </div>
  </a>
</article>
<?php endforeach ?>

<article class="w-100 bg-purple va-c flex-wrap">
  <div class="w-33 mt-4 mb-4 m-w-66 s-w-full m-c s-mt-1 s-mb-2 reveal">
  <h4 class="mono uc smaller c-white regular ta-c mb-15 s-smallest">
    Vidste du...
  </h4>
    <h4 class="body c-white light ta-c s-small">
    At de fleste studier viser, at gruppeterapi har en langt større terapeutisk effekt end individuel&nbsp;terapi?</h4>
  </div>
</article>

<article class="w-100 m-c pt-4 pb-2 p-1 m-pt-2 bg-purple">
    <section class="w-100 pb-1 c-white">
        <h3 class="heading va-x s-subheading">Næste holdstart</h3>
    </section>
    <section class="w-100">
      <div class="bb-white c-white">
      <?php foreach (page('grupper')->children()->listed() as $group): ?>
        <input type="checkbox" id="<?= $group->title()->slug() ?>" hidden />
        <a href="<?= $group->url() ?>" title="<?= $group->title() ?>">
        <div class="tab tab-large bt-white va-c pl-1 pr-15 pb-1 pt-1 s-pl-0 s-pr-0 s-pt-15 s-pb-15 reveal">
            <div class="mono smaller mr-1 uc s-smallest s-mr-15"><?= $group->dates() ?></div>
            <h3 class="body tab-button s-small"><?= $group->title()->widont() ?></h3>
            <?php if ($pic = $group->cover()->toFile()): ?>
            <img src="<?= $pic->url() ?>" title="<?= $group->title() ?>" class="tab-button blog-thumb br-3 br-30 ml-1">
            <?php endif ?>
          </div>
      </a>
      <?php endforeach ?>
    </div>
    </section>
</article>

<article class="bg-brown pt-3 pb-4 s-pt-2 s-pb-2">
  <a href="../individuelle-samtaler" title="Individuelle samtaler" class="text-hover">
<div class="flex flex-sb va-c">  
  <div class="w-50 m-c">
    <h4 class="heading mb-15 s-body">
    Er du mere en&nbsp;soloviolin?
  </h4>
    <h4 class="body light s-small">
    Vi tilbyder også individuelle&nbsp;samtaler.<br><br>
    Læs mere&nbsp;<span class="dash">&RightArrow;</span></h4>
  </div>
  <div class="w-25 m-c image-fill reveal">
      <?php foreach (page('team')->children()->listed()->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-10 br-30">
          <?php endif ?>
      <?php endforeach ?>
  </div>
</div>
</a>
</article>

</main>


<!--

Content for Magazine Stand style articles

 <main>

<article class="w-100 card-33 flex bg-brown">
  <div class="w-full m-c flex flex-wrap reveal">
    <h2 class="headline pt-2 w-100 m-c s-subheadline s-mb-1">Sandbox</h2>
  </div>
</article>

      <?php foreach($splash = page('sandbox')->colours()->toStructure()->shuffle()->limit(1) as $splash): ?>
      <?= $splash->colour() ?>
      <?php endforeach ?>

<article class="w-full mt-2 mb-1 m-c">
  <section class="w-100 flex flex-sb flex-wrap">
      <?php foreach($posts = page('blog')->children()->listed()->flip() as $post): ?>
        <div class="w-33 mb-1 bg-brown card-80 flex flex-sb flex-wrap p-1" style="
            <?php foreach($splash = page('sandbox')->colours()->toStructure()->shuffle()->limit(1) as $splash): ?>
      background-color: #<?= $splash->colour() ?>;
      <?php endforeach ?>
                <?php if ($pic = $post->cover()->toFile()): ?>
        background-image: url(<?= $pic->url() ?>)
            <?php endif ?>;background-size: cover;background-repeat: no-repeat; background-position: center center;">

            <?php if ($post->category() == 'Blog'): ?>
          <div class="w-100 smallest mono ta-r"><?= $post->text()->words() ?> ord
          </div>

          <?php elseif ($post->category() == 'Nyhed'): ?>
            <div class="w-100 smaller mono">
                  <?= $post->introduction()->kt()->nl2br()->widont() ?>
                </div>

          <?php else: ?>
            <div class="w-100 smallest mono ta-r">
                  <?= $post->date()->toDate('%d/%m/%y') ?>
                </div>
            <?php endif ?>
          <div class="w-100 flex-end" style="vertical-align: baseline;">
            
            <div class="c-white exclusion mono smallest uc"><?= $post->author() ?></div>
            <h3 class="c-white exclusion" style="line-height: calc(100% + (<?= $post->title()->length() ?>% / 2));">
              <span style="font-size: calc(.8vw / 0.<?= $post->title()->length() ?>);">
              <?= $post->title() ?>
                </span>
              </h3></div>
            </div>
      <?php endforeach ?>
  </section>
</article>

</main> -->
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>