<?php
if ( has_post_thumbnail() ) { ?>
    <div class="grid__item">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'element__frame' ); ?> itemscope itemtype="http://schema.org/CreativeWork">
            <header class="entry-header">
                <p class="bar__title"><?php brutalistthemes_portfolio_categories(); ?></p>
                <a href="<?php echo get_permalink(); ?>">
					<?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><span>', esc_url( get_permalink() ) ), '</span></h2>' ); ?>
                </a>
            </header>

            <a href="<?php the_permalink(); ?>" class="entry-thumbnail">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>"/>
            </a>

            <div class="clear"></div>

            <footer class="entry-meta schemaorg">
                <meta itemprop="mainEntityOfPage" content="<?php the_title(); ?>">

                <span itemprop="author publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="<?php echo get_the_author_meta( $field = 'display_name' ); ?>">

				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="<?php brutalistthemes_meta_logo(); ?>"/>
				</span>
			</span>

                <meta itemprop="url" content="<?php get_site_url(); ?>"/>

                <span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<?php echo get_the_post_thumbnail( null, 'single', array(
					'alt'      => the_title_attribute( array( 'echo' => false ) ),
					'itemprop' => 'image'
				) ); ?>
				<meta itemprop="url" content="<?php echo get_the_post_thumbnail_url(); ?>">
			</span>

				<?php brutalistthemes_posted_on(); ?>
            </footer>
        </article>
    </div>

<?php } else { ?>
    <div class="no-img grid__item">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'element__frame' ); ?> itemscope itemtype="http://schema.org/CreativeWork">
            <header class="entry-header">
                <p class="bar__title"><?php brutalistthemes_portfolio_categories(); ?></p>
                <a href="<?php echo get_permalink(); ?>">
					<?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><span>', esc_url( get_permalink() ) ), '</span></h2>' ); ?>
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

            <footer class="entry-meta schemaorg">
                <meta itemprop="mainEntityOfPage" content="<?php the_title(); ?>">

                <span itemprop="author publisher" itemscope itemtype="http://schema.org/Organization">
				<meta itemprop="name" content="<?php echo get_the_author_meta( $field = 'display_name' ); ?>">

				<span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
					<meta itemprop="url" content="<?php brutalistthemes_meta_logo(); ?>"/>
				</span>
			</span>

                <meta itemprop="url" content="<?php get_site_url(); ?>"/>

                <span itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
				<?php echo get_the_post_thumbnail( null, 'single', array(
					'alt'      => the_title_attribute( array( 'echo' => false ) ),
					'itemprop' => 'image'
				) ); ?>
				<meta itemprop="url" content="<?php echo get_the_post_thumbnail_url(); ?>">
			</span>

				<?php brutalistthemes_posted_on(); ?>
            </footer>
        </article>
    </div>
<?php } ?>