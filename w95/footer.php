</section> <!-- .grid -->
<?php
if ( ! is_page_template( 'page-splash.php' ) && ! is_404() ) { ?>
    <footer id="site-footer" itemscope itemtype="http://schema.org/WPFooter">
        <span>&copy;<?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?> · Designed by <a href="https://brutalistthemes.com/">Brutalist Themes</a></span>
    </footer>
<?php } ?>
<?php wp_footer(); ?>

</div> <!-- #page -->
<?php
if ( !is_404()  ) { ?>
<div id="w95-clock">
	<?php //echo current_time( 'g:i A' ); ?>
</div>
<?php } ?>

</body>
</html>