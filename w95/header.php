<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	<!--
                                    ,----,.
                   ,---.-,        ,'   ,' |
           .---.  '   ,'  '.    ,'   .'   |
          /. ./| /   /      \ ,----.'    .'
      .--'.  ' ;.   ;  ,/.  : |    |   .'
     /__./ \ : |'   |  | :  ; :    :  |--,
 .--'.  '   \' .'   |  ./   : :    |  ;.' \
/___/ \ |    ' '|   :       , |    |      |
;   \  \;      : \   \      | `----'.'\   ;
 \   ;  `      |  `---`---  ;   __  \  .  |
  .   \    .\  ;     |   |  | /   /\/  /  :
   \   \   ' \ |     '   :  ;/ ,,/  ',-   .
    :   '  |--"      |   |  '\ ''\       ;
     \   \ ;         ;   |.'  \   \    .'
      '---"          '---'     `--`-,-'

	W95 Theme by BrutalistThemes.com
	-->
</head>

<body <?php body_class( 'w95-effect loading' ); ?> itemscope itemtype="http://schema.org/WebPage" <?php if (is_404()) { ?>onkeyup="pressAnyKeyToContinue()" ontouchend="pressAnyKeyToContinue()"<?php } ?>>
<?php wp_body_open(); ?>
<div id="page">
	<?php
	if ( function_exists( 'yoast_breadcrumb' ) && !is_page_template('page-splash.php') && !is_404() && !is_front_page()  ) {
		yoast_breadcrumb( '<div class="breadcrumbs" itemprop="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">', '</div>' );
	} ?>

	<?php
	if ( !is_404()  ) { ?>
	<header id="site-header" itemscope itemtype="http://schema.org/WPHeader">
		<div id="branding-wrapper" class="element__frame">
            <p class="bar__title">
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                &larr;
				<?php
				if ( get_theme_mod( 'brutalistthemes_logo_text_setting' ) ) {
					echo get_theme_mod( 'brutalistthemes_logo_text_setting' );
				} else {
					echo esc_html__( 'Home', 'w95' );
				} ?>
	            </a>
            </p>

			<?php
			the_custom_logo();

			if ( ! has_custom_logo() ) { ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemscope itemtype="http://schema.org/Brand">
					<h1 class="site-title" itemprop="name"><?php bloginfo( 'name' ); ?></h1>
				</a>
			<?php } ?>
		</div>

		<nav itemscope itemtype="http://schema.org/SiteNavigationElement" class="element__frame" id="mobile-window">
			<a id="nav-toggle" class="nav-slide-button" href="#">Start</a>

			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'pull clear',
				'container'      => false,
				'depth'          => 1
			) ); ?>
		</nav>

		<?php
		if ( get_theme_mod( 'brutalistthemes_social_media_twitter_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_facebook_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_instagram_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_pinterest_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_twitch_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_spotify_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_soundcloud_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_youtube_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_vimeo_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_bloglovin_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_linkedin_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_xing_setting' ) ||
		     get_theme_mod( 'brutalistthemes_social_media_snapchat_setting' ) ) {
			require_once( get_template_directory() . '/partials/social.php' );
		} ?>
	</header>
	<?php } ?>
			
	<div class="clear"></div>

	<?php
	if ( is_page_template('page-splash.php' )) { ?>
    <section class="grid-splash">

    <?php } elseif ( is_singular( 'portfolio' )) { ?>
    <section class="grid-portfolio">

    <?php } elseif ( ( is_page() && !is_page_template('index-portfolio.php') && !is_page_template('page-splash.php') ) ) { ?>
    <section class="grid-single">

    <?php } elseif ( is_404() ) { ?>
	<section class="grid-page">

	<?php } elseif ( is_search() ) { ?>
	<section class="grid" itemscope itemtype="http://schema.org/SearchResultsPage">

	<?php } elseif ( function_exists( 'is_woocommerce' ) && is_woocommerce() ) { ?>
	<section class="grid-single">

	<?php } elseif ( is_single() && !is_page() ) { ?>
	<section class="grid-single">

	<?php } else { ?>
	<section class="grid" itemscope itemtype="http://schema.org/Blog">
	<?php } ?>

