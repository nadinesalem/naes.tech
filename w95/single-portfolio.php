<?php
get_header(); ?>

<div class="grid__item">
    <?php
    if (have_posts()) :

        while (have_posts()) : the_post();
            get_template_part('partials/content', 'single-portfolio');
        endwhile;

        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    else :
        get_template_part('partials/content', 'none');
    endif; ?>
</div>

<?php
get_footer(); ?>
