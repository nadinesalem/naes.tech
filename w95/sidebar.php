<?php
if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
} ?>

<aside class="widget-area" itemscope itemtype="http://schema.org/WPSideBar">
	<?php
	if ( get_theme_mod( 'brutalistthemes_about_title_setting' ) || get_theme_mod( 'brutalistthemes_about_button_setting' ) || get_theme_mod( 'brutalistthemes_about_text_setting' ) || get_theme_mod( 'brutalistthemes_about_link_setting' ) || get_theme_mod( 'brutalistthemes_about_image_setting' ) ) { ?>

		<div class="widget element__frame" id="widget-about">
			<img src="<?php echo esc_url( get_theme_mod( 'brutalistthemes_about_image_setting' ) ); ?>">

			<div>
				<h3 class="widget-title bar__title"><?php echo esc_html( get_theme_mod( 'brutalistthemes_about_title_setting' ) ); ?></h3>
				<p>
					<?php echo esc_html( get_theme_mod( 'brutalistthemes_about_text_setting' ) ); ?>
				</p>
				<a class="more" href="<?php echo esc_url_raw( get_theme_mod( 'brutalistthemes_about_link_setting' ) ); ?>"><?php echo esc_html( get_theme_mod( 'brutalistthemes_about_button_setting' ) ); ?></a>
			</div>

		</div>
	<?php } ?>

	<?php dynamic_sidebar( 'sidebar' ); ?>
	<div class="clear"></div>
</aside>