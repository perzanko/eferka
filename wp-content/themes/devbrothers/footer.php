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
					<h4 class="form__title" id="contact">Wyślij wiadomość</h4>
						<?php echo do_shortcode('[contact-form-7 id="48" title="Formularz 1"]'); ?>
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
