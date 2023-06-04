<?php
if ( has_post_thumbnail() ) :
	$w95_feat_img = get_the_post_thumbnail_url();

	list( $width, $height ) = getimagesize( $w95_feat_img );
	if ( $width < $height ) { ?>
		<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" id="post-<?php the_ID(); ?>" <?php post_class('grid__item element__frame'); ?>>

			<header class="entry-header">
                <p class="bar__title"><?php brutalistthemes_posted_cat(); ?></p>
				<?php the_title( '<h2 class="entry-title" itemprop="headline">', '</h2>' ); ?>
			</header>

			<div class="entry-content" itemprop="articleBody">
				<div class="entry-thumbnail-single" itemprop="image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>

				<?php the_content(); ?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'w95' ),
					'after'  => '</div>',
				) ); ?>
			</div>

			<?php
			if ( ! get_theme_mod( 'brutalistthemes_share_buttons_setting' ) ) {
				brutalistthemes_share_buttons();
			} ?>

		</article>

	<?php } else { ?>
		<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" id="post-<?php the_ID(); ?>" <?php post_class('grid__item element__frame'); ?>>

			<header class="entry-header">
				<?php brutalistthemes_posted_cat(); ?>
				<?php the_title( '<h2 class="entry-title" itemprop="headline">', '</h2>' ); ?>
			</header>

			<div class="entry-content" itemprop="articleBody">
				<div class="entry-thumbnail-single landscape" itemprop="image">
					<?php the_post_thumbnail( 'large' ); ?>
				</div>

				<?php the_content(); ?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'w95' ),
					'after'  => '</div>',
				) ); ?>
			</div>

			<?php
			if ( ! get_theme_mod( 'brutalistthemes_share_buttons_setting' ) ) {
				brutalistthemes_share_buttons();
			} ?>

		</article>
	<?php }

else : ?>
	<article itemprop="blogPost" itemscope itemtype="http://schema.org/BlogPosting" id="post-<?php the_ID(); ?>" <?php post_class('grid__item element__frame'); ?>>

		<header class="entry-header">
			<?php brutalistthemes_posted_cat(); ?>
			<?php the_title( '<h2 class="entry-title" itemprop="headline">', '</h2>' ); ?>
		</header>

		<div class="entry-content" itemprop="articleBody">
			<?php the_content(); ?>

			<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'w95' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>

		<?php
		if ( ! get_theme_mod( 'brutalistthemes_share_buttons_setting' ) ) {
			brutalistthemes_share_buttons();
		} ?>
	</article>

<?php endif; ?>

