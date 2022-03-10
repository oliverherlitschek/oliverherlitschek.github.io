<?php snippet('header') ?>
<div class="bg-lgrey">

    <div class="small-nav bg-white pl-1 bb-lgrey">
    <h1 class="body ellipsis"><a href="/"><?= $site->title() ?></a></h1>
    <ul class="bb-lgrey">
        <li><button class="cta small uc bg-white c-black pl-1 pr-1 booking" onclick="goBack()">Luk</button></li>
    </ul>
    </div>
<main class="clearfix">
<div class="alert success">
    <section class="form-content">
        <article class="form-content-inner">
            <?= $page->description()->nl2br()->kirbytext() ?>
            <br><br>
            <span class="mono smaller text uc">Vidste du:</span><br><?= $page->fact()->kirbytext()->widont() ?></p>
        </article>
    </section>
</div>
<div class="ticker-fixed">
    <label for="submit" class="bg-green c-black ta-c"><p class="subheadline">Tak for din besked :)</p></label>
    <input type="submit" class="hide-input" id="submit" name="submit" value="Send besked">
</div>
</div>

</main>
</div>
<script>
        function goBack() {
  window.history.go(-2);
}
</script>

<?php snippet('footer') ?>