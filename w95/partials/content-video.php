<div class="no-img grid__item">
    <article id="post-<?php the_ID(); ?>" <?php post_class( 'element__frame' ); ?> itemscope itemtype="http://schema.org/CreativeWork">
        <header class="entry-header">
            <span class="posted-on"><?php echo get_the_date('d M Y'); ?></span>
            <a href="<?php echo get_permalink(); ?>">
                <?php the_title( sprintf( '<h2 class="entry-title" itemprop="headline"><span>', esc_url( get_permalink() ) ), '</span></h2>' ); ?>
            </a>
        </header>

        <div class="entry-content" itemprop="articleBody">
	        <?php
	        $post = get_post(get_the_ID());
	        $content = apply_filters( 'the_content', $post->post_content );
	        $embeds = get_media_embedded_in_content( $content );
	        $fist_embedded = $embeds[0];
	        echo $fist_embedded;
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