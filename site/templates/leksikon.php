<?php snippet('header') ?>
<?php snippet('nav') ?>
<main>
<article class="w-100 h-33 pt-2 pb-2 p-1 flex flex-wrap bg-brown">
  <div class="w-50 m-w-33 s-w-100 reveal flex-end">
  <h3 class="subheadline light s-subheading">Psykologi fra A til Z</h3>
  </div>
  <div class="w-50 m-w-66 s-w-100 reveal flex-end">
  <p class="body light s-small"> </p>
  </div>
</article>

<?php $letter = page()->entry()->toStructure()->sortBy('headline')->group(function($p){
    $lastnamecap = str::ucfirst($p->headline()->value());
    return str::substr($lastnamecap, 0, 1);
}); ?>

<article class="w-100 m-c pb-1 m-pt-2 pl-1 pr-1">
  <?php
// first we loop through the letter and echo the year
foreach($letter as $name => $itemsPerName): ?>
  <div class="w-100 flex flex-wrap flex-sb pb-2 s-pb-0">
  <section class="w-100 reveal bb-black pb-1 s-pb-15 bg-white dictionary-sticky pt-4 m-pt-2" id="<?= $name ?>">
    <h3 class="heading s-subheading uc"><?= $name ?></h3>
  </section>
  <section class="w-100 flex flex-wrap flex-sb">
    <?php
      // then we loop through all the items for each year
      foreach($itemsPerName as $entry) : ?>
    <input type="checkbox" id="accordion-one" hidden />
  <section class="accordion ac-large reveal w-33 m-w-half s-w-100 bb-black" id="<?= $entry->headline() ?>">
          <a class="text-hover">
    <label for="accordion-one" class="tab tab-large va-c pl-15 pr-15 m-p-0">
      <h3 class="body tab-button"><?= $entry->headline() ?></h3>
      <?php if ($entry->image()->isNotEmpty()): ?>
        <?php if ($cover = $entry->image()->toFile()): ?>
          <img src="<?= $cover->crop(120)->url() ?>" class="reveal-2 tab-button blog-thumb br-3 br-30">
        <?php endif ?>
      <?php endif ?>
    </label>  </a>
    <div class="pl-15 pr-15 pb-1 m-p-0">
      <?= $entry->text()->toBlocks() ?>
    </div>
    </section>
    <?php endforeach ?>
    <i class="w-33" aria-hidden="true"></i>
    <i class="w-33" aria-hidden="true"></i>
  </section>
</div>
  <?php endforeach ?>
</article>


<article class="bg-brown">
<article class="w-full m-c pt-4 pb-4 flex flex-sb va-c m-two-up m-pt-2 m-pb-2">
  <div class="w-33 m-c image-fill reveal">
    <a href="../individuelle-samtaler" title="Individuelle samtaler" class="text-hover">
      <?php foreach (page('team')->children()->listed()->not('team/michelle-dait')->not('team/ragnhild-mohn')->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
            <img src="<?= $portrait->url() ?>" class="m-c br-10 br-30">
          <?php endif ?>
      <?php endforeach ?>
        <h3 class="body ta-c mt-10 s-small"><span class="text-hover">Individuelle samtaler</span></h3>
      </a>
  </div>

  <div class="w-33 m-c image-fill reveal">
    <a href="../grupper" title="Gruppeforløb" class="text-hover">
            <img src="<?= image('grupper/Grupper-Avilius-Hero-Resized.jpg')->url() ?>" class="br-10 br-30">
        <h3 class="body ta-c mt-10 s-small"><span class="text-hover">Gruppeforløb</span></h3>
      </a>
  </div>
</article>
</article>

</main>
<?php snippet('newform') ?>
<?php snippet('footer-content') ?>
<?php snippet('ticker') ?>
<?php snippet('footer') ?>