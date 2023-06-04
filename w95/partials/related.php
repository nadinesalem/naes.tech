<?php if ( ! empty( $related_posts ) && !get_theme_mod( 'brutalistthemes_related_setting' ) ) { ?>
	<div class="widget element__frame brutalist_themes__related_posts">

		<?php
		if ( get_theme_mod( 'brutalistthemes_related_title_setting' ) ) { ?>
			<h4 class="widget-title bar__title"><?php echo get_theme_mod( 'brutalistthemes_related_title_setting' ); ?></h4>

		<?php } else { ?>
			<h4 class="widget-title bar__title"><?php _e( 'You might also like', 'w95' ); ?></h4>
			<?php
		}
		?>

		<ul>
			<?php
			foreach ( $related_posts as $post ) {
				setup_postdata( $post );
				?>
				<li itemscope itemtype="http://schema.org/blogPost">
					<a class="title" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php if ( has_post_thumbnail() ) { ?>
							<?php echo get_the_post_thumbnail( null, 'thumbnail', array(
								'alt'      => the_title_attribute( array( 'echo' => false ) ),
								'itemprop' => 'image',
								'itemtype' => 'http://schema.org/thumbnailUrl',
							) ); ?>
						<?php } ?>
						<h5 itemscope itemtype="http://schema.org/headline"><?php the_title(); ?></h5>
					</a>
				</li>
			<?php } ?>
		</ul>
		<div class="clear"></div>
	</div>
	<?php
}
