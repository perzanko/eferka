<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Devbrothers
 */

?>



<footer class="bg bg-red">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="form">
					<h4 class="form__title">Wyślij wiadomość</h4>
					<form class="form__form" action="index.html" method="post">
						<label for=""></label><input id="name" type="text" name="name" placeholder="Imię i nazwisko">
						<label for=""></label><input id="name" type="email" name="email" placeholder="E-mail">
						<label for=""></label><input id="name" type="text" name="topic" placeholder="Temat">
						<label for=""></label><textarea id="name" name="textarea" rows="5" cols="80" placeholder="Treść"></textarea>
						<input class="button" type="submit" name="submit" value="Wyślij">
					</form>
				</div>
			</div>
		</div>
	</div>
</footer>
<script
	  src="https://code.jquery.com/jquery-3.1.1.min.js"
	  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
	  crossorigin="anonymous">
</script>
<script type="text/javascript" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/js/custom.js"></script>
<script type="text/javascript" src="<?php echo get_site_URL(); ?>/wp-content/themes/devbrothers/js/masonry.pkgd.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
