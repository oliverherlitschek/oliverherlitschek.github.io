<?php snippet('header') ?>
<?php snippet('nav') ?>
<main class="bg-brown">
<article class="pt-4 w-full m-c flex">
  <div class="flex flex-wrap flex-sb ai-s team-wrapper">
    <div class="w-100 heading m-subheading s-small m-c c-purple mb-1 mt-15" style="order: -1;">
        <?= $page->description()->kt()->nl2br()->widont() ?>
    </div>
    <?php foreach ($page->children()->listed()->shuffle() as $member): ?>
      <?php if ($portrait = $member->portrait()->toFile()): ?>
        <div class="bg-cc mb-1 s-mb-15 bg-c br-3 br-30 c-white flex team-member" style="background-image: url(<?= $portrait->url() ?>)">
          <a href="<?= $member->url() ?>" class="w-100 pb-15 flex flex-wrap flex-sb s-pt-15 s-pb-15 s-pl-15" title="<?= $member->title() ?>">
            <div class="flex-end team-member-scroll-fix">
            <h3 class="heading light s-body flex-end ml-1 mb-15 s-m-0"><?= $member->firstname() ?></h3>
            <div class="w-100 s-remove" style="overflow-x:scroll;">
              <div class="flex pl-1 mr-1 s-pl-15 s-mr-15">
              <?php foreach ($member->experience()->split() as $category): ?>
              <div class="smaller mono tag-pill p-5 pl-10 pr-10 bg-white c-purple mb-10 mr-10">
                <?= $category ?>
              </div>
              <?php endforeach ?><div class="w-1 h-1" style="display: block;opacity: 0;">a</div></div>
            </div>
          </div>
          </a>
        </div>
      <?php endif ?>
    <?php endforeach ?>
</article>

<article class="w-100 bg-brown">
  <section class="h-66 s-card-33 w-full w-1400 m-c va-c flex flex-wrap">
  <div class="w-100 m-c pt-4 pb-4 s-p-1 s-pt-2 s-pb-2">
  <p class="body regular ta-c mb-15 s-small">
    Svært at vælge?
  </p>
    <p class="body light ta-c s-small mb-1">
    Det forstår vi godt. Fortæl os, hvordan du har det <span class="s-remove"><br></span>– så finder vi ud af det&nbsp;sammen.</p>
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