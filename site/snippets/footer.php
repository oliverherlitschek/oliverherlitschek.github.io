<?= js(['media/js/slick.js', '@auto']) ?>
<?= js(['media/js/scripts.js', '@auto']) ?>
  <?= js(['media/js/jquery.cookiebar.js', '@auto']) ?>
<script type="text/javascript">
	$(document).ready(function() {
	  $.cookieBar({
	  		message: '🍪 Hej! Vi bruger cookies. Ved fortsat brug af websitet accepterer du <a class="underline" href="/blog/privatlivspolitik" target="_blank">privatlivspolitikken</a>. ',
			acceptButton: true, //Set to true to show accept/enable button
			acceptText: 'Ok', //Text on accept/enable button
			effect: 'slide', //Options: slide, fade, hide
			customClass: 'cookie-message bg-white c-black ba-lgrey mono smaller',
			zindex: '999999'
		})
	});
</script>
</body>
</html>
