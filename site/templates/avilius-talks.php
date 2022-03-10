<?php snippet('header') ?>
<?php snippet('nav') ?>
<main>
<article class="w-100 card-33 flex bg-brown">
  <div class="w-full m-c flex flex-wrap reveal">
    <h2 class="headline pt-2 w-100 m-c s-subheadline s-mb-1">Avilius Talks</h2>
  </div>
</article>
<article class="w-full mt-2 m-c flex flex-sb">
    <section class="w-100">
      <div class="bb-black">
      <?php $events = $page->events()->toStructure()->sortBy('date', 'desc')->filter(function ($child) {
        return $child->date()->toDate() > time();
        });

        foreach ($events as $event): ?>
          <input type="checkbox" id="<?= $event->headline()->slug() ?>" hidden />
          <div class="accordion ac-large s-ac-medium reveal">
          <label for="<?= $event->headline()->slug ?>" class="tab tab-large s-tab-medium bt-black va-c pl-1 pr-1 s-pl-0 s-pr-0">
            <h3 class="body tab-button s-flex s-flex-wrap s-small s-ellipsis"><span class="mono smaller mr-1 s-m-0 s-w-100 s-smallest">
              <?php if($event->tba()->isNotEmpty()): ?>
              <?= $event->tba()->upper() ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <?php else: ?>
                <?= $event->date()->toDate('%d/%m/%y') ?>
              </span>
              <?php endif ?>
              </span>&nbsp;<?= $event->headline() ?>
                <?php if($event->status()->bool()): ?>
            <span class="br-3 mono smaller uc bg-green ml-1 c-black p-10 sold-out s-smallest">udsolgt</span>
            <?php endif ?></h3>
          </label>
          <div class="pl-1 pr-1 pb-2 s-small s-pl-15 s-pr-15 s-pb-1">
            <?= $event->description()->kt()->nl2br() ?>
            <a href="<?= $event->link() ?>" target="_blank" title="<?= $event->headline() ?>">
            <?php if($event->buttontext()->bool()): ?>
              <button class="btn mt-1 bg-lpurple ta-c mono small pl-1 pr-1 c-black">Find billetter</button>
              <?php else : ?>
              <button class="btn mt-1 bg-lgreen ta-c mono small pl-1 pr-1 c-black">🎙&nbsp;Lyt til podcast</button>
            <?php endif ?>
        </a>
      </div>
    </div>
    <?php endforeach ?>
    <?php $events = $page->events()->toStructure()->sortBy('date', 'desc')->filter(function ($child) {
        return $child->date()->toDate() < time();
        });

        foreach ($events as $event): ?>
          <input type="checkbox" id="<?= $event->headline()->slug() ?>" hidden />
          <div class="accordion ac-large s-ac-medium">
          <label for="<?= $event->headline()->slug() ?>" class="tab tab-large s-tab-medium bt-black va-c pl-1 pr-1 s-pl-0 s-pr-0">
            <h3 class="body tab-button o-50 s-flex s-flex-wrap s-small s-ellipsis"><span class="mono smaller mr-1 s-m-0 s-w-100 s-smallest">
              <?php if($event->date()->isEmpty()): ?>
              TBA
              <?php else: ?>
                <?= $event->date()->toDate('%d/%m/%y') ?>
              </span>
              <?php endif ?>
              </span>&nbsp;<?= $event->headline() ?>
                <?php if($event->status()->bool()): ?>
            <span class="br-3 mono smaller uc bg-green ml-1 c-black p-10 sold-out">udsolgt</span>
            <?php endif ?></h3>
          </label>
          <div class="pl-1 pr-1 pb-2 s-small s-pl-15 s-pr-15 s-pb-1">
            <?= $event->description()->kt()->nl2br() ?>
            <a href="<?= $event->link() ?>" target="_blank" title="<?= $event->headline() ?>">
            <?php if($event->buttontext()->bool()): ?>
              <button class="btn mt-1 bg-lpurple ta-c mono small pl-1 pr-1 c-black">Find billetter</button>
              <?php else : ?>
              <button class="btn mt-1 bg-lgreen ta-c mono small pl-1 pr-1 c-black">🎙&nbsp;Lyt til podcast</button>
            <?php endif ?>
        </a>
      </div>
    </div>
    <?php endforeach ?>
</div>
    </section>
</article>

<article class="w-100 card-60 bg-lpurple p-1 mt-2 flex flex-sb m-flex-wrap s-pl-15 s-pr-15">
  <div class="w-66 m-w-100 reveal">
  <h3 class="subheadline c-purple light s-subheading">Vil du med?</h3>
  </div>
  <div class="w-33 flex-end m-w-100">
  <h4 class="body c-purple light ta-r m-ta-l s-small"><br>Vær den første til at blive inviteret til vores hyggelige talks, gruppeforløb og andre spændende ting.<br><br>
  <a href="https://avilius13220.activehosted.com/f/1" target="_blank" class="underline" title="Tilmeld dig vores nyhedsmails">✍️ Skriv mig op</a>!</h4>
  </div>
</article>

<article class="w-full m-c mt-4 mb-4 flex flex-sb va-c m-two-up s-mt-1 s-mb-1">
  <div class="w-33 m-c image-fill reveal">
    <a href="../individuelle-samtaler" title="Individuelle samtaler" class="text-hover">
      <?php foreach (page('team')->children()->listed()->not('team/jonas-schosler')->shuffle()->limit(1) as $member): ?>
          <?php if ($portrait = $member->portrait()->toFile()): ?>
            <img src="<?= $portrait->resize(1200, null, 70)->url() ?>" class="m-c br-10 br-30">
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