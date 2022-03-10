<?php snippet('header') ?>
<main class="bg-lpurple">
<article class="w-full pt-1 m-c">
  <h1 class="subheading c-purple mb-1 ta-c"><a href="https://www.avilius.dk" title="Avilius">Avilius</a></h1>
      <?php $linkblock = $page->links()->toStructure();

        foreach ($linkblock as $link): ?>
          <button class="tag-pill body m-c s-w-100 p-15 pl-1 pr-1 mb-15 c-purple" style="display: block; border: 2px solid #2E233D;">
          <a href="<?= $link->linkurl() ?>" title="<?= $link->linktext() ?>" target="_blank"><?= $link->linktext() ?>&nbsp;&nbsp;<span class="small regular">&UpperRightArrow;</span></a>
        </button>
        <?php endforeach ?>
        <button class="tag-pill body m-c s-w-100 p-15 pl-1 pr-1 mb-15 c-purple" style="display: block; border: 2px solid #2E233D;">
          <a href="https://www.avilius.dk" title="Avilius" target="_blank">Hvad er Avilius?</a>
        </button>
        <button class="book-button tag-pill body m-c bg-white s-w-100 p-15 pl-1 pr-1 mb-15 c-black" style="display: block;">
          <span class="blink c-dgreen">●</span>&nbsp;Skriv til os</a>
        </button>
        <button class="call-button tag-pill body m-c bg-lgreen s-w-100 p-15 pl-1 pr-1 mb-15 c-black" style="display: block;">
          Snak med os&nbsp;📞</a>
        </button>
        <?php snippet('call') ?>

      <div class="mt-1 pb-1 smallest mono ta-c uc">Avilius &copy; <?php echo date("Y");?></div>
</article>
</main>
<?php snippet('newform') ?>
<?php snippet('footer') ?>