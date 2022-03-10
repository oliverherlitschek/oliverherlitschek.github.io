<footer class="bt-lgrey bg-white">
	<div class="bg-white <?php if ($page->is('home')): ?>footer-wrapper-index<?php else: ?>footer-wrapper<?php endif ?> clearfix">
		<section class="four-content pt-2">
			<article class="four-content-one address mb-2">
				<p class="small regular">Skal vi være internetvenner?</p>
				<p class="small">Nye artikler, podcasts og invitationer til events et par gange om måneden.</p>


				<!-- Begin Mailchimp Signup Form -->
<div id="mc_embed_signup">
<form action="https://avilius.us4.list-manage.com/subscribe/post?u=44db4aed8cc39723694b63422&amp;id=cec187b9d7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <fieldset class="footer-signup">
    <input type="email" value="" name="EMAIL" class="c-grey form-text form-half small bg-white underline" id="mce-EMAIL" placeholder="Email">
    <input type="text" value="" name="FNAME" class="c-grey form-text form-half small bg-white underline" id="mce-FNAME" placeholder="Fornavn">
    <div id="mce-responses" class="clear">
        <div class="response" id="mce-error-response" style="display:none"></div>
        <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_44db4aed8cc39723694b63422_cec187b9d7" tabindex="-1" value=""></div>
    <label for="submit"><button class="small c-grey" style="height: 51px;">Send&nbsp;&RightArrow;</button></label>
    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn">
</fieldset>
</form>
</div>

<!--End mc_embed_signup-->



			</article>

			<article class="four-content-one mb-2">
				<a href="/blog"><p class="small regular">Blog</p></a>
				<?php foreach (page('blog')->children()->listed()->limit(3) as $post): ?>
					<a href="<?= $post->url() ?>">
						<p class="small ellipsis">
							<?= $post->title() ?>
						</p>
					</a>
				<?php endforeach ?><br>
				<a href="/blog"><p class="small c-grey">Avilius Blog →</p></a>
			</article>

			<article class="four-content-one address mb-2">
				<p class="small regular">Avilius IVS</p>
				<a href="https://www.google.com/maps/dir//Esromgade+15,+2200+K%C3%B8benhavn/@55.6980997,12.5383164,17z/data=!4m17!1m7!3m6!1s0x4652524ce95234ab:0x6a5d3c222987269b!2sEsromgade+15,+2200+K%C3%B8benhavn!3b1!8m2!3d55.6980997!4d12.5404997!4m8!1m0!1m5!1m1!1s0x4652524ce95234ab:0x6a5d3c222987269b!2m2!1d12.5404997!2d55.6980997!3e3" target="_blank">
						<p class="small ellipsis">
							Esromgade 15, 1311
						</p>
						<p class="small ellipsis">
							2200 København N
						</p>
						<p class="small ellipsis">
							Danmark
						</p>
					</a><br>
				<a href="https://www.google.com/maps/dir//Esromgade+15,+2200+K%C3%B8benhavn/@55.6980997,12.5383164,17z/data=!4m17!1m7!3m6!1s0x4652524ce95234ab:0x6a5d3c222987269b!2sEsromgade+15,+2200+K%C3%B8benhavn!3b1!8m2!3d55.6980997!4d12.5404997!4m8!1m0!1m5!1m1!1s0x4652524ce95234ab:0x6a5d3c222987269b!2m2!1d12.5404997!2d55.6980997!3e3" target="_blank"><p class="small c-grey">Google Maps →</p></a>
			</article>

			<article class="four-content-one mb-2">
				<p class="small">
					<?php foreach (page('home')->quote()->toStructure()->shuffle()->limit(1) as $quote): ?>
							"<?= $quote->text()->widont() ?>"<br>
							— <?= $quote->author() ?>, <span class="italic"><?= $quote->work()->widont() ?></span>
							<br><br>
							Avilius &copy; <?= date('Y') ?>
					<?php endforeach ?>
				</p>
			</article>
		</section>	
	</div>
	<div class="ticker">
	<a href="/form"><div class="bg-green c-black ta-c pa-1"><p class="body uc">Book en tid</p></div></a>
	</div>
</footer>