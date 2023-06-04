<?php
get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class('error-404 not-found'); ?>>
	<header class="page-header">
		<h2 class="title-404"><?php _e( 'ERROR 404 - Page not found', 'w95' ); ?></h2>
	</header><!-- .page-header -->

    <div class="clearfix"></div>
    <p><?php _e( 'It looks like nothing was found at this location.', 'w95' ); ?></p>
    <p><?php _e( 'Press any key to continue', 'w95' ); ?> <span id="blinkCursor"></span></p>
</div>

<?php get_footer(); ?>
