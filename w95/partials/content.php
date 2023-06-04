<?php
if ( has_post_thumbnail() ) { ?>
	<div class="grid__item">
		<article id="post-<?php the_ID(); ?>" <?php post_class('element__frame'); ?> itemprop="blogPost" itemscope itemtype="http://schema.org/blogPosting">
			<header class="entry-header">
				<span class="posted-on"><?php echo get_the_date('d M Y'); ?></span>
				<a href="<?php echo get_permalink(); ?>">
					<?php the_title( sprintf( '<h3 class="entry-title" itemprop="headline"><span>', esc_url( get_permalink() ) ), '</span></h3>' ); ?>
				</a>
			</header>

			<a href="<?php the_permalink(); ?>" class="entry-thumbnail">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
			</a>

			<div class="clear"></div>

			<footer class="entry-meta homepage">
				<meta itemprop="mainEntityOfPage" content="<?php the_title(); ?>">

				<span itemprop="author publisher" itemscope itemtype="http://schema.org/Organization">
					<meta itemprop="name" content="<?php echo get_the_author_meta( $field = 'display_name' ); ?>">

					<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
						<meta itemprop="url" content="<?php $bt_custom_logo_url = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $bt_custom_logo_url , 'full' );
						echo $image[0]; ?>"/>
					</span>


					<meta itemprop="url" content="<?php echo esc_url( home_url() ); ?>"/>
	            </span>

				<?php brutalistthemes_posted_on(); ?>
			</footer>
		</article>
	</div>

<?php } else { ?>
	<div class="no-img grid__item">
		<article id="post-<?php the_ID(); ?>" <?php post_class('element__frame'); ?> itemprop="blogPost" itemscope itemtype="http://schema.org/blogPosting">
			<header class="entry-header">
				<span class="posted-on"><?php echo get_the_date('d M Y'); ?></span>
				<a href="<?php echo get_permalink(); ?>">
					<?php the_title( sprintf( '<h3 class="entry-title" itemprop="headline"><span>', esc_url( get_permalink() ) ), '</span></h3>' ); ?>
				</a>
			</header>

			<div class="entry-content" itemprop="articleBody">
				<?php the_excerpt(); ?>

				<?php wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'w95' ),
						'after'  => '</div>',
					)
				);
				?>
			</div>

			<footer class="entry-meta homepage">
				<meta itemprop="mainEntityOfPage" content="<?php the_title(); ?>">

			<span itemprop="author publisher" itemscope itemtype="http://schema.org/Person">
				<meta itemprop="name" content="<?php echo get_the_author_meta( $field = 'display_name' ); ?>">

				<meta itemprop="url" content="<?php echo esc_url( home_url() ); ?>"/>
            </span>

				<?php brutalistthemes_posted_on(); ?>
			</footer>
		</article>
	</div>
<?php } ?>