<?php
/*
Template Name: Strona główna
*/
?>

<?php get_header(); ?>

<section class="bg bg-white">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php the_title( '<h2 class="heading">', '</h2>' ); ?>
			</div>
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
