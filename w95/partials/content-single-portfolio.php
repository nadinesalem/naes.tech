<article itemscope itemtype="http://schema.org/CreativeWork" id="post-<?php the_ID(); ?>" <?php post_class('element__frame'); ?>>
    <header class="entry-header">
        <p class="bar__title"><?php brutalistthemes_portfolio_categories(); ?></p>
        <?php the_title( '<h2 class="entry-title" itemprop="headline">', '</h2>' ); ?>
    </header>

	<?php
	if ( ! get_theme_mod( 'brutalistthemes_share_buttons_setting' ) ) {
		brutalistthemes_share_buttons();
	} ?>

    <div class="entry-content" itemprop="articleBody">
        <?php the_content(); ?>

        <?php
        wp_link_pages( array(
            'before' => '<div class="page-links">' . __( 'Pages:', 'w95' ),
            'after'  => '</div>',
        ) );

        if ( get_theme_mod( 'brutalistthemes_signature_image_setting' ) ) {
            brutalistthemes_signature();
        } ?>
    </div>

    <?php
    if ( ! get_theme_mod( 'brutalistthemes_share_buttons_setting' ) ) {
        brutalistthemes_share_buttons();
    } ?>

    <footer class="entry-meta schemaorg">
        <meta itemprop="mainEntityOfPage" content="<?php the_title(); ?>">

        <span itemprop="author publisher" itemscope itemtype="http://schema.org/Organization">
            <meta itemprop="name" content="<?php echo get_the_author_meta( $field = 'display_name' ); ?>">

            <span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
                <meta itemprop="url" content="<?php brutalistthemes_meta_logo(); ?>" />
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