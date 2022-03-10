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
                <h2 class="subheadline">Tak for din besked!</h2>
                <p class="body">
    Vi vender tilbage til dig inden for 1-2 hverdage.<br><br>
Vores samtalerum ligger på <a href="https://goo.gl/maps/x3hbESf3KqudedoN7" class="underline" target="_blank">Esromgade 15</a> i hjertet af Nørrebro — og vi glæder os til at møde&nbsp;dig.<br><br>
<span class="mono smaller text uc">Vidste du:</span><br>Sessionerne i Avilius scorer i evalueringer 4.9/5 stjerner i otte forskellige terapeutiske&nbsp;parametre.
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
                <h2 class="subheadline">Book en individuel samtale</h2>
                <p class="body">Når vi modtager din henvendelse vil du blive kontaktet af den person du har valgt, som vil foreslå et tidspunkt I kan mødes. Sessionerne finder sted i vores hjemlige lokale på <a href="https://goo.gl/maps/x3hbESf3KqudedoN7" class="underline" target="_blank">Esromgade 15</a> i hjertet af Nørrebro.<br><br>
                <span class="mono smaller text uc">Vidste du:</span><br>
            Generelt for samtaleterapi gælder det, at 70% oplever et vist udbytte og 50% oplever betydelig bedring — der er altså gode chancer for, at du gør noget godt for dig selv. Som altid er første samtale gratis og ganske&nbsp;uforpligtende.</p>
            <div class="honeypot">
                <label for="website">Website <abbr title="required">*</abbr></label>
                <input type="website" id="website" name="website">
            </div>
            <fieldset id="personal">
                <input type="text" class="form-text small bg-white form-two-third m-form" id="name" name="name" placeholder="Navn" value="<?= $data['name'] ?? '' ?>" required> 

                <input type="number" class="form-text small bg-white form-third" id="age" name="age" placeholder="Alder" value="<?= $data['age'] ?? '' ?>" min="15" max="30" required>

                <input type="tel" class="form-text small bg-white form-third m-form form-m-top" id="phonenumber" name="phonenumber" placeholder="Telefonnummer" value="<?= $data['phonenumber'] ?? '' ?>">

                <input type="email" class="form-text small bg-white form-third m-form form-m-top" id="email" name="email" placeholder="Email" value="<?= $data['email'] ?? '' ?>" required>
                
                <input type="number" class="form-text small bg-white form-third form-m-top" id="postalcode" name="postalcode" placeholder="Postnummer" value="<?= $data['postalcode'] ?? '' ?>" required>
            </fieldset>
                <p class="body form-p">Er der nogen, du helst vil tale med? Du kan vælge lige så mange du&nbsp;vil.</p>
                <fieldset id="therapists">
            <?php foreach (page('therapists')->children()->listed()->shuffle() as $therapist): ?>
            <input type="checkbox" class="hide-input" name="therapist[]" value="<?= $therapist->title() ?>" id="<?= $therapist->title()->slug() ?>" />
                <label class="therapist-card bg-white c-black" for="<?= $therapist->title()->slug() ?>">
                    <div><?= $therapist->image() ?><div class="therapist-name"><p class="small ta-c"><?= $therapist->firstname() ?></p></div></div></label>
            <?php endforeach ?>
            <input type="checkbox" class="hide-input" name="therapist[]" value="Ingen præference" id="no-preference" />
                <label class="therapist-card no-pref bg-white c-black" for="no-preference">
                    <div class="therapist-name"><p class="small ta-c">Jeg har ingen præference</p></div></label>
        </fieldset>
            <p class="body form-p">Hvad skal vi tale&nbsp;om?</p>
            <textarea id="message"  class="form-text small bg-white form-full" name="message" placeholder="Ordet er frit – og ingen udfordring for lille :)" required><?= $data['message']?? '' ?></textarea>

<!--                 <p class="body form-p">Hvordan kan vi kontakte dig?</p>

                <fieldset class="clearfix" id="contact">
                    
                <input type="checkbox" class="hide-input" class="" id="contact_sms" name="contact_sms" value="Ja" />
                <label class="form-half m-form contact bg-white c-black" for="contact_sms"><p class="small ta-c">SMS</p></label>

                
                <input type="checkbox" class="hide-input" id="contact_email" name="contact_email" value="Ja" />
                <label class="form-half contact bg-white c-black" for="contact_email"><p class="small ta-c">Email</p></label>
                
                </fieldset> -->

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

<?php snippet('footer') ?>