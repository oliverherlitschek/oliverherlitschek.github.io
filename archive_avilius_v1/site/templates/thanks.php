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
            <h2 class="subheadline">Tak for din besked!</h2>
            <p class="body">Vi vender tilbage til dig inden for 2-3 hverdage.<br><br>
            Vores samtalerum ligger på <a href="https://goo.gl/maps/x3hbESf3KqudedoN7" class="underline" target="_blank">Esromgade 15</a> i hjertet af Nørrebro — og vi glæder os til at møde&nbsp;dig.<br><br>
            <span class="mono smaller text uc">Vidste du:</span><br>Sessionerne i Avilius scorer i evalueringer 4.9/5 stjerner i otte forskellige terapeutiske&nbsp;parametre.</p>
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