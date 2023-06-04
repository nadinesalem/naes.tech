<?php
/*
 * Template Name: Portfolio
 */
get_header(); ?>

<?php
$limit = get_option('posts_per_page');
if (is_front_page()) {
	$paged = (get_query_var('page')) ? get_query_var('page') : 1;
} else {
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
}

$portfolio_query = new WP_Query( array(
	'post_type' => 'portfolio',
	'paged'=>$paged,
) );

if ( $portfolio_query->have_posts() ) {
	while ( $portfolio_query->have_posts() ) {
		$portfolio_query->the_post();
		get_template_part( 'partials/content', 'portfolio' );
	} ?>
    <div class="grid__item pagination__item">
		<?php echo brutalistthemes_pagination_portfolio(); ?>
    </div>
<?php } else {
	get_template_part( 'partials/content', 'none' );
}
wp_reset_postdata(); ?>

<?php
get_footer(); ?>