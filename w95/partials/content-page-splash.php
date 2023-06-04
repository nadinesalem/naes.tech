<section class="element__frame">
<?php
if ( has_post_thumbnail() ) { ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-content" itemprop="articleBody">
                <?php the_post_thumbnail( 'large' ); ?>

				<?php the_content(); ?>
			</div>
		</div>

<?php } else { ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</div>

<?php } ?>
</section>
