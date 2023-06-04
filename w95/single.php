<?php
get_header(); ?>

<div class="grid__item">
	<?php
	if ( have_posts() ) :

		while ( have_posts() ) : the_post();
			get_template_part( 'partials/content', 'single' );
		endwhile;

		echo brutalistthemes_pagination(); // the_posts_navigation();

		brutalistthemes_related_posts();

		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	else :
		get_template_part( 'partials/content', 'none' );
	endif; ?>
</div>

<div class="grid__item">
	<?php
	get_sidebar(); ?>
</div>

<?php
get_footer(); ?>
