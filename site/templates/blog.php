<?php snippet('header') ?>
<?php snippet('nav') ?>
<main class="bg-brown">

<?php foreach($posts = $page->children()->listed()->flip()->limit(1) as $post): ?>
<?php

if ($post->theme() == "baddfc") {
  $secondarycolor = '#eb2921';
} elseif ($post->theme() == "bbd663") {
  $secondarycolor = '#163c2d';
} elseif ($post->theme() == "c377e5") {
  $secondarycolor = '#e2ecfe';
} elseif ($post->theme() == "f0f1b4") {
  $secondarycolor = '#4200b0';
} else {
  $secondarycolor = '#933a26';
}
?>
<article class="w-100 h-66 s-h-50 p-1 s-p-15 s-pt-2 pt-4 pb-2 flex flex-wrap flex-sb s-reverse" style="background-color:#<?= $post->theme() ?>;color: <?= $secondarycolor ?>;">

  <div class="w-half flex-end s-w-100">
    <a href="<?= $post->url() ?>" title="<?= $post->title() ?>">
    <h3 class="mono smaller reveal-2">Nyeste indlæg postet d.&nbsp;<?= $post->date()->toDate('%d/%m/%y') ?></h3>
    <h1 class="subheadline thin m-heading s-body s-light reveal"><?= $post->title() ?></h1>
    <h4 class="body light s-small mt-1">
    Læs artikel&nbsp;<span class="dash">&RightArrow;</span></h4>
    </a>
    <!-- for when we're ready to do content grouping
    <div class="mt-15 reveal-2">
      <?php foreach ($post->tags()->split() as $tag): ?>
        <span class="tag-pill p-5 pl-10 pr-10 mt-15 mr-10 uc mono smallest" style="border: 1px solid <?= $secondarycolor ?>"><?= $tag ?></span>
      <?php endforeach ?>
    </div> -->
  </div>
  <div class="w-half s-w-66 m-c flex-end pl-2 pr-2 pt-4 s-p-1 image-fill">
      <?php if ($cover = $post->cover()->toFile()): ?>
      <a href="<?= $post->url() ?>" title="<?= $post->title() ?>">
        <img src="<?= $cover->url() ?>" class="m-c br-3 br-30 reveal-2">
      </a>
      <?php endif ?>
  </div>
</article>
<?php endforeach ?>

<article class="w-100 pt-2 pl-1 pr-1 pb-1 s-pl-15 s-pr-15">
    <h4 class="subheading">Nyeste indlæg</h4>
</article>

<article class="w-full m-c">
    <section class="w-100 flex flex-wrap flex-sb">
        <?php foreach ($page->children()->listed()->flip()->offset(1)->limit(8) as $post): ?>

          <?php if($post->card()->bool()): ?>

        <?php

        if ($post->theme() == "baddfc") {
          $secondarycolor = '#eb2921';
        } elseif ($post->theme() == "bbd663") {
          $secondarycolor = '#163c2d';
        } elseif ($post->theme() == "c377e5") {
          $secondarycolor = '#e2ecfe';
        } elseif ($post->theme() == "f0f1b4") {
          $secondarycolor = '#4200b0';
        } else {
          $secondarycolor = '#933a26';
        }
        ?>
        <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
        <div class="w-100 br-3 card-80 s-card-60 ta-c flex flex-wrap flex-sb va-c pt-15 pb-15 pl-1 pr-1 mb-1 br-30 reveal" style="background-color:#<?= $post->theme() ?>;color:<?= $secondarycolor ?>;">
          <h3 class="flex-start smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>

          <h3 class="body"><?= $post->title() ?></h3>
          <h3 class="flex-end smallest mono">af&nbsp;<?= $post->author() ?></h3>
        </div>
        </a>
        <?php else : ?>
          <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
            <?php if ($hero = $post->cover()->toFile()): ?>
        <div class="w-100 br-3 card-80 flex flex-wrap flex-sb va-c mb-1 s-mb-15 br-30 reveal-2 bg-cc bg-c video-portrait-container" style="background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
          <?php endif ?>
          <div class="bg-white flex-end w-100 p-1">
          <h3 class="flex smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>
          <h3 class="small"><?= $post->title() ?></h3>
        </div>
        </div>
        </a>
          <?php endif ?>

      <?php endforeach ?>
      

      <div class="w-33 s-w-100 br-3 card-80 ta-c pt-15 pb-15 pl-1 pr-1 mb-1 s-mb-15 reveal-2 bg-purple c-white flex flex-wrap va-c" style="align-content: center;">
        <div class="">
          <h4 class="body regular ta-c mb-15 s-small">
          Leder du efter svar?
        </h4>
          <h4 class="body light ta-c s-small">
          Vi sidder klar med råd og vejledning til, hvordan du kan få det&nbsp;bedre.</h4>
          <button class="btn ta-c m-c mono small mt-1 pl-1 pr-1 c-purple bg-lpurple book-button">✉️&nbsp;Skriv til os</button>
          </div>
          <h3 class="smallest mono mt-15"><a class="underline call-button">Jeg vil gerne ringes op</a></h3>
        </div>

        <?php snippet('call') ?>

      <?php foreach ($page->children()->listed()->flip()->offset(10) as $post): ?>

          <?php if($post->card()->bool()): ?>

        <?php

        if ($post->theme() == "baddfc") {
          $secondarycolor = '#eb2921';
        } elseif ($post->theme() == "bbd663") {
          $secondarycolor = '#163c2d';
        } elseif ($post->theme() == "c377e5") {
          $secondarycolor = '#e2ecfe';
        } elseif ($post->theme() == "f0f1b4") {
          $secondarycolor = '#4200b0';
        } else {
          $secondarycolor = '#933a26';
        }
        ?>
        <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
        <div class="w-100 br-3 card-80 s-card-60 ta-c flex flex-wrap flex-sb va-c pt-15 pb-15 pl-1 pr-1 mb-1 br-30 reveal" style="background-color:#<?= $post->theme() ?>;color:<?= $secondarycolor ?>;">
          <h3 class="flex-start smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>

          <h3 class="body"><?= $post->title() ?></h3>
          <h3 class="flex-end smallest mono">af&nbsp;<?= $post->author() ?></h3>
        </div>
        </a>
        <?php else : ?>
          <a href="<?= $post->url() ?>" title="<?= $post->title() ?>" class="w-33 s-w-100">
            <?php if ($hero = $post->cover()->toFile()): ?>
        <div class="w-100 br-3 card-80 flex flex-wrap flex-sb va-c mb-1 br-30 reveal-2 bg-cc bg-c video-portrait-container" style="background-image:url(<?= $hero->resize(1000, null, 70)->url() ?>);">
          <?php endif ?>
          <div class="bg-white flex-end w-100 p-1">
          <h3 class="flex smallest mono"><?= $post->date()->toDate('%d/%m/%y') ?></h3>
          <h3 class="small"><?= $post->title() ?></h3>
        </div>
        </div>
        </a>
          <?php endif ?>

      <?php endforeach ?>

  </section>
</article>

<hr class="bg-black o-50 w-full mt-3 m-c s-mt-1">

<article class="bg-brown pb-4 w-full m-c mt-4 flex flex-sb va-c m-two-up s-two-up s-mt-2 s-pb-2">
  <div class="w-33 m-c image-fill reveal">
    <a href="../individuelle-samtaler" title="Individuelle samtaler" class="text-hover">
      <?php foreach (page('team')->children()->listed()->not('team/jonas-schosler')->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-10 br-30">
          <?php endif ?>
      <?php endforeach ?>
      
        <h3 class="body ta-c mt-10 s-small"><span class="text-hover">Individuelle samtaler</span></h3>
      
      </a>
  </div>

  <div class="w-33 m-c image-fill reveal">
    <a href="../grupper" title="Gruppeforløb" class="text-hover">
            <img src="../media/groups-test-pic.jpg" class="m-c br-10 br-30">
      
        <h3 class="body ta-c mt-10 s-small"><span class="text-hover">Gruppeforløb</span></h3>
      
      </a>
  </div>
</article>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>