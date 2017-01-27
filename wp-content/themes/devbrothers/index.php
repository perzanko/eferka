<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Devbrothers
 */

get_header('front'); ?>

<section class="bg bg-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
