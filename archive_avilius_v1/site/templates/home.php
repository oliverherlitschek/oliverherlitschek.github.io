<?php snippet('header') ?>
<?php snippet('nav') ?>
<?php snippet('mobile-nav') ?>
<div class="content bg-white">
  <div class="index-element bg-lgrey">
    <div class="index-text pt-1">
      <h1 class="subheadline pl-1 pr-1 pb-1 pt-2"><?= $page->introduction()->widont() ?></h1>
    </div>
    <div class="index-image" style="background-image: url(/media/ragnhild-cecilie.jpg)">
      <div class="hero-caption ta-r mr-1 mb-1">
        <p class="small c-black">
          <?= $page->caption()->widont() ?>
        </p>
      </div>
    </div>
  </div>
  </div>
  <div class="bg-white clearfix">
    <section class="usp four-content ptb-2 pl-1 pr-1">
      <article class="four-content-one ptb-1">
        <span class="mono uc smaller"><span class="c-green">●</span> Høj kvalitet</span><br>
        <p class="light text small ta-l">Vi benytter os af moderne terapiformer, der er videnskabeligt&nbsp;underbyggede.</p>
      </article>

      <article class="four-content-one ptb-1">
        <span class="mono uc smaller"><span class="c-green">●</span> Sund relation</span><br>
        <p class="light text small ta-l">Vores terapeuter er unge – og oplever mange af de samme udfordringer som alle&nbsp;andre.</p>
      </article>

      <article class="four-content-one ptb-1">
        <span class="mono uc smaller"><span class="c-green">●</span> Fair pris</span><br>
        <p class="light text small ta-l">Hos Avilius koster en samtale 299,-. Første time er gratis og&nbsp;uforpligtende.</p>
      </article>

    </section>
  </div>
  <div class="content bg-lgrey clearfix">
      <article class="wide-image">
        <img src="/media/gruppe.jpg">
      </article>
      <article class="wide-image-caption ptb-1 pl-1 pr-1">
        <p class="light text small">
        Vi er en gruppe psykologistuderende, som arbejder for, at ungdomslivet skal være sundere og sjovere, fordi det er muligt at tage tingene i opløbet. Det at være ung er ikke altid nemt, derfor skal det være muligt at få støtte i rette tide, uden at det vælter&nbsp;budgettet.<br><br>
        <a href="/therapists"><p class="small">Mød din nye terapeut →</p></a>
      </p>
      </article>
  </div>

  <div class="content bg-white clearfix">
    <section class="testimonials">
      <div>
        <p class="light subheadline ta-c">"Avilius fokuserer på en målgruppe, der virkelig har brug for det — keep up the&nbsp;good&nbsp;work!"<br>
         <span class="mono uc smaller">Imran Rashid, læge og forfatter</span></p>
      </div>

      <div>
        <p class="light subheadline ta-c">"Det giver så meget god energi at tale med dig 🌸 Det var rigtig givtigt og skønt! Vi ses d.&nbsp;7!"<br>
         <span class="mono uc smaller">Tidligere klient om <a href="/therapists">Esther</a></span></p>
      </div>

      <div>
        <p class="light subheadline ta-c">"...simpelthen en fantastisk oplevelse. Det var virkelig befriende! Tusinde&nbsp;tak!"<br>
         <span class="mono uc smaller">Tidligere klient om <a href="/therapists">Michelle</a></span></p>
      </div>
      

      <div>
        <p class="light subheadline ta-c">"Det føltes faktisk lidt som at snakke med en rigtig god veninde, som bare havde mange flere kloge ting at&nbsp;sige."<br>
         <span class="mono uc smaller">Tidligere klient om <a href="/therapists">Ragnhild</a></span></p>
      </div>
      
    </section>
  </div>

  <div class="content bg-lgrey clearfix">
      <article class="half pl-1 pr-1 pt-1 pb-2 hero-75">
        <?php foreach (page('blog')->children()->listed()->sortBy('date', 'desc')->limit(1) as $post): ?>
        <a class="light mono text smaller uc ta-c pb-1" href="/blog">Blog</a>
        <?= $post->image()->crop(400) ?>
        <p class="light text small ta-c pt-1">
        "<?= $post->text()->blocks()->excerpt(125) ?>"</a><br><br>
        <a  class="light text small ta-c pt-1" href="<?= $post->url() ?>"><?= $post->title()->widont() ?> →</a>
      </p>
      <?php endforeach ?>
      </article>
      <article class="half pl-1 pr-1 pt-1 pb-2 hero-75 small-remove">
        <p class="light mono text smaller uc ta-c pb-1">Nyt</p>
        <?= $page->image()->crop(400) ?>
        <p class="light text small ta-c pt-1">
        "<?= $page->text()->excerpt(125) ?>"<br><br>
        <a href="<?= $page->link() ?>" target="_blank">Læs mere →</a>
      </p>
      </article>
  </div>
<?php snippet('footer-content') ?>
<?php snippet('footer') ?>
