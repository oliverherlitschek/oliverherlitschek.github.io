<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
</script>
<?= js(['media/js/slick.js', '@auto']) ?>
<?= js(['media/js/scripts.js', '@auto']) ?>
<script type="text/javascript">
	$(document).ready(function() {
	  $.cookieBar({
	  		message: 'Hej! Vi bruger cookies på avilius.dk. Ved fortsat brug af websitet accepterer du vores <a class="underline" href="/blog/privatlivspolitik" target="_blank">privatlivspolitik</a>. ',
			acceptButton: true, //Set to true to show accept/enable button
			acceptText: 'Ok', //Text on accept/enable button
			effect: 'fade', //Options: slide, fade, hide
			customClass: 'cookie-message bg-lgrey c-black pa-25 ba-black small',
			zindex: '999999'
		})
	});
</script>
  <?= js(['media/js/jquery.cookiebar.js', '@auto']) ?>
</body>
</html>
