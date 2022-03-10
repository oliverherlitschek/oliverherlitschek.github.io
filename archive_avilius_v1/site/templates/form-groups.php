<?php snippet('header') ?>
<div class="bg-lgrey">

    <div class="small-nav bg-white pl-1 bb-lgrey">
    <h1 class="body ellipsis"><a href="/"><?= $site->title() ?></a></h1>
    <ul class="bb-lgrey">
        <li><button class="cta small uc bg-white c-black pl-1 pr-1 booking" onclick="goBack()">Luk</button></li>
    </ul>
</div>
<main class="clearfix">

<?php if($success): ?>
        <div class="alert success">
            <section class="form-content">
            <article class="form-content-inner">
                <h2 class="subheadline">Tak for din tilmelding!</h2>
                <p class="body">
    Vi vender tilbage inden for 2-3 hverdage.<br><br>
    <span class="mono smaller text uc">Vidste du:</span><br>At deltage i gruppeforløb skaber det man i psykologien kalder katarsis — frigivelsen af opsparet psykisk energi. Det sker, når vi oplever at andre kan acceptere og rumme os, selvom vi tilkendegiver vores tanker og&nbsp;følelser.
</p>
                    </article>
        </section>
        </div>
        <div class="ticker-fixed">
                    <label for="submit" class="bg-green c-black ta-c"><p class="subheadline">Tak for din besked :)</p></label>
            <input type="submit" class="hide-input" id="submit" name="submit" value="Send besked">
        </div>
        </div>
        </div>
        <?php else: ?>
        <?php if (isset($alert['error'])): ?>
            <div><?= $alert['error'] ?></div>
        <?php endif ?>
        <form method="post">
            <section class="form-content">
            <article class="form-content-inner">
                <h2 class="subheadline">Book din plads i et gruppeforløb</h2>
                <p class="body">Alle gruppesessioner finder sted i vores hjemlige lokale på <a href="https://goo.gl/maps/x3hbESf3KqudedoN7" class="underline" target="_blank">Esromgade 15</a> i hjertet af Nørrebro.<br><br>
                <span class="mono smaller text uc">Gruppeforløb</span><br>
            Hvis der er ledige pladser på holdet, vil du blive kontaktet med det samme. Tilmelder du dig et fyldt hold, vil du blive kontaktet i tilfælde af afbud eller ny holdstart. Vi glæder os til at se&nbsp;dig.</p> 
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="website" id="website" name="website">
            </div>
            <!-- <div class="honeypot">
                <label for="group">
                    Gruppe <abbr title="required">*</abbr>
                </label>
                <input type="text" id="group" name="group" value="<?= $data['group'] ?? '' ?>" required>
                <?= isset($alert['group']) ? '<span class="alert error">' . html($alert['group']) . '</span>' : '' ?>
            </div> -->
            <fieldset id="personal">
    <?php $value = $data['group']?? '' ?>
        <select name="group" id="group" class="form-text c-black form-select small form-half m-form" size="" required disabled>
            <option value="" disabled >Vælg gruppe</option>
                    <option value="karlighed" <?php e($value=='karlighed', ' selected' )?>>Kærlighed</option>
                    <option value="prastationspres" <?php e($value=='prastationspres', ' selected')?>>Præstationspres</option>
                    <option value="kulturclash" <?php e($value=='kulturclash', ' selected')?>>Kulturclash</option>
    </select>
                <input type="text" class="form-text small bg-white form-half" id="name" name="name" placeholder="Fulde navn" value="<?= $data['name'] ?? '' ?>" required> 

                <input type="number" class="form-text small bg-white form-half m-form form-m-top" id="age" name="age" placeholder="Alder" value="<?= $data['age'] ?? '' ?>" min="15" max="30" required>

                <input type="email" class="form-text small bg-white form-half form-m-top" id="email" name="email" placeholder="Email" value="<?= $data['email'] ?? '' ?>" required>
            </fieldset>
            <fieldset class="clearfix" id="optin">
                <label for="accept_terms" class="container"><p class="body">Ja, jeg accepterer <a href="/blog/handelsbetingelser" target="_blank" class="underline">handelsbetingelserne</a>.</p>
                    <input type="checkbox" class="hide-input" id="accept_terms" name="accept_terms" value="Ja" required />
                    <span class="checkmark bg-white"></span>
                </label>

                <label for="accept_marketing" class="container"><p class="body">Ja tak, jeg ønsker at modtage inspiration, salg og tilbud på mail og sociale&nbsp;medier.</p>
                    <input type="checkbox" class="hide-input" id="accept_marketing" name="accept_marketing" value="Ja" />
                    <span class="checkmark bg-white"></span>
                </label>
            </fieldset>
                <div class="ticker-fixed c-black bg-green disabled">
                    <label for="submit" class="ta-c"><p class="subheadline">Send</p></label>
            <input type="submit" class="hide-input" id="submit" name="submit" value="Send besked">
        </div>
                    </article>
        </section>
        </form>
        <?php endif ?>
    </main>
</div>
<script>
        function goBack() {
  window.history.back();
}
</script>
<script>
$(document).ready(function() {
  // Construct URL object using current browser URL
  var url = new URL(document.location);

  // Get query parameters object
  var params = url.searchParams;

  // Get value of delivery results
  var group = params.get("group");

  // Set it as the dropdown value
  $("#group").val(group);
});
</script>
<?php snippet('footer') ?>