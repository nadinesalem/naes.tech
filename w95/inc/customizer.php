<?php
function w95_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';

	// Theme Texts

	$wp_customize->add_section(
		'w95_texts_section',
		array(
			'title'    => __( 'Theme Texts', 'w95' ),
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_logo_text_setting',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_logo_text_control',
			array(
				'label'         => __( 'Logo/Site name Title', 'w95' ),
				'description'   => __( 'Default is Home', 'w95' ),
				'section'       => 'w95_texts_section',
				'settings'      => 'brutalistthemes_logo_text_setting',
				'type'          => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_text_setting',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_text_control',
			array(
				'label'         => __( 'Social Icons Title', 'w95' ),
				'description'   => __( 'Default is Social', 'w95' ),
				'section'       => 'w95_texts_section',
				'settings'      => 'brutalistthemes_social_text_setting',
				'type'          => 'text',
			)
		)
	);

	// Social Media Icons

	$wp_customize->add_section(
		'brutalistthemes_social_media_section',
		array(
			'title'    => __( 'Social Media Icons', 'w95' ),
			'priority' => 3,
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_twitter_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_media_twitter_control',
			array(
				'label'    => __( 'Twitter URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_twitter_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_facebook_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_media_facebook_control',
			array(
				'label'    => __( 'Facebook URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_facebook_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_instagram_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_instagram_control',
			array(
				'label'    => __( 'Instagram URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_instagram_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_pinterest_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_pinterest_control',
			array(
				'label'    => __( 'Pinterest URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_pinterest_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_twitch_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_twitch_control', array(
				'label'    => __( 'Twitch URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_twitch_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_spotify_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_spotify_control', array(
				'label'    => __( 'Spotify URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_spotify_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_soundcloud_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_soundcloud_control', array(
				'label'    => __( 'Soundcloud URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_soundcloud_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_mixcloud_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_mixcloud_control', array(
				'label'    => __( 'Mixcloud URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_mixcloud_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_vimeo_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_vimeo_control', array(
				'label'    => __( 'Vimeo URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_vimeo_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_youtube_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_media_youtube_control',
			array(
				'label'    => __( 'YouTube URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_youtube_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_rss_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_media_rss_control',
			array(
				'label'    => __( 'RSS', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_rss_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_blogloving_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'brutalistthemes_social_media_blogloving_control', array(
				'label'    => __( 'Bloglovin URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_blogloving_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_linkedin_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_media_linkedin_control',
			array(
				'label'    => __( 'LinkedIn URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_linkedin_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_xing_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_media_xing_control',
			array(
				'label'    => __( 'Xing URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_xing_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_social_media_snapchat_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_social_media_snapchat_control',
			array(
				'label'    => __( 'Snapchat URL', 'w95' ),
				'section'  => 'brutalistthemes_social_media_section',
				'settings' => 'brutalistthemes_social_media_snapchat_setting',
				'type'     => 'text',
			)
		)
	);

	// About Widget

	$wp_customize->add_section(
		'brutalistthemes_about_section',
		array(
			'title'    => __( 'About Widget', 'w95' ),
			'priority' => 4,
		) );

	$wp_customize->add_setting(
		'brutalistthemes_about_shop_sidebar_setting',
		array(
			'default'           => false,
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_about_shop_sidebar_control',
			array(
				'label'       => __( 'Hide this widget in Shop Sidebar', 'w95' ),
				'section'     => 'brutalistthemes_about_section',
				'settings'    => 'brutalistthemes_about_shop_sidebar_setting',
				'type'        => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_about_title_setting',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_about_title_control',
			array(
				'label'    => __( 'Widget Title', 'w95' ),
				'section'  => 'brutalistthemes_about_section',
				'settings' => 'brutalistthemes_about_title_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_about_image_setting',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'brutalistthemes_about_image_control',
			array(
				'label'    => __( 'Image', 'w95' ),
				'section'  => 'brutalistthemes_about_section',
				'settings' => 'brutalistthemes_about_image_setting',
				'type'     => 'image',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_about_text_setting',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_about_text_control',
			array(
				'label'    => __( 'Text', 'w95' ),
				'section'  => 'brutalistthemes_about_section',
				'settings' => 'brutalistthemes_about_text_setting',
				'type'     => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_about_button_setting',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_about_button_control',
			array(
				'label'    => __( 'Button Text', 'w95' ),
				'section'  => 'brutalistthemes_about_section',
				'settings' => 'brutalistthemes_about_button_setting',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_about_link_setting',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_about_link_control',
			array(
				'label'    => __( 'Button Link', 'w95' ),
				'section'  => 'brutalistthemes_about_section',
				'settings' => 'brutalistthemes_about_link_setting',
				'type'     => 'text',
			)
		)
	);

	// Signature

	$wp_customize->add_section(
		'brutalistthemes_signature_section',
		array(
			'title'    => __( 'Signature Image', 'w95' ),
			'priority' => 5,
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_signature_image_setting',
		array(
			'sanitize_callback' => 'esc_url_raw',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'brutalistthemes_signature_image_control',
			array(
				'section'  => 'brutalistthemes_signature_section',
				'settings' => 'brutalistthemes_signature_image_setting',
				'type'     => 'image',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_signature_size_setting',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_signature_size_control',
			array(
				'label'       => __( 'Signature image width', 'w95' ),
				'description' => __( 'For example if you want the width to be 200px, just input 200.', 'w95' ),
				'section'     => 'brutalistthemes_signature_section',
				'settings'    => 'brutalistthemes_signature_size_setting',
				'type'        => 'text',
			)
		)
	);

	// Related posts

	$wp_customize->add_section(
		'brutalistthemes_related_section',
		array(
			'title'    => __( 'Related Articles', 'w95' ),
			'priority' => 6,
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_related_setting',
		array(
			'default'           => false,
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_related_control',
			array(
				'label'       => __( 'Hide Related Articles', 'w95' ),
				'description' => __( 'Check to hide the related posts section on single article page.', 'w95' ),
				'section'     => 'brutalistthemes_related_section',
				'settings'    => 'brutalistthemes_related_setting',
				'type'        => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_related_title_setting',
		array(
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
			'default'           => 'You might also like',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_related_title_control',
			array(
				'label'    => __( 'Related posts title', 'w95' ),
				'section'  => 'brutalistthemes_related_section',
				'settings' => 'brutalistthemes_related_title_setting',
				'type'     => 'text',
			)
		)
	);

	// Social Media Share Buttons

	$wp_customize->add_section(
		'brutalistthemes_share_buttons_section',
		array(
			'title'    => __( 'Social Media Share Buttons', 'w95' ),
			'priority' => 7,
		)
	);

	$wp_customize->add_setting(
		'brutalistthemes_share_buttons_setting',
		array(
			'default'           => '',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'brutalistthemes_share_buttons_control',
			array(
				'label'       => __( 'Hide share buttons', 'w95' ),
				'description' => __( 'Check to hide the share buttons on posts and pages.', 'w95' ),
				'section'     => 'brutalistthemes_share_buttons_section',
				'settings'    => 'brutalistthemes_share_buttons_setting',
				'type'        => 'checkbox',
			)
		)
	);
}

add_action( 'customize_register', 'w95_customize_register' );