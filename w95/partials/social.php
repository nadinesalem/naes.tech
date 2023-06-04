<ul class="social-media-profiles element__frame">
    <li>
        <p class="bar__title">
			<?php
			if ( get_theme_mod( 'brutalistthemes_social_text_setting' ) ) {
				echo get_theme_mod( 'brutalistthemes_social_text_setting' );
			} else {
				echo esc_html__( 'Social', 'w95' );
			} ?>
        </p>
    </li>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_twitter_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_twitter_setting' ) ); ?>">
                <svg id="ba5308fa-c082-41cc-af98-9f1f092274b6" data-name="twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <polygon points="56.89 14.22 56.89 7.11 49.78 7.11 42.67 7.11 35.56 7.11 35.56 14.22 28.45 14.22 28.45 21.33 21.33 21.33 14.22 21.33 14.22 14.22 7.11 14.22 7.11 21.33 0 21.33 0 28.44 7.11 28.44 7.11 35.56 14.22 35.56 14.22 28.44 21.33 28.44 28.45 28.44 35.56 28.44 35.56 21.33 42.67 21.33 42.67 14.22 49.78 14.22 49.78 21.33 49.78 28.44 49.78 35.56 49.78 42.67 56.89 42.67 56.89 35.56 56.89 28.44 56.89 21.33 64 21.33 64 14.22 56.89 14.22"/><rect x="42.67" y="42.67" width="7.11" height="7.11"/><polygon points="28.45 49.78 21.33 49.78 21.33 42.67 21.33 35.56 14.22 35.56 14.22 42.67 7.11 42.67 7.11 49.78 7.11 49.78 14.22 49.78 14.22 56.89 21.33 56.89 28.45 56.89 35.56 56.89 42.67 56.89 42.67 49.78 35.56 49.78 28.45 49.78"/><rect y="7.11" width="7.11" height="7.11"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_facebook_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_facebook_setting' ) ); ?>">
                <svg id="a86b9e06-dbba-4892-88ca-e152c822ba41" data-name="facebook" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 64">
                    <polygon points="29 7 22 7 15 7 15 14 15 21 15 28 8 28 8 35 15 35 15 42 15 49 15 56 22 56 22 49 22 42 22 35 29 35 29 28 22 28 22 21 22 14 29 14 36 14 36 7 29 7"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_instagram_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_instagram_setting' ) ); ?>">
                <svg id="f63c4bc8-0e0a-4927-8a8a-08226f25e446" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M28.44,28.44v7.12H21.33V28.44Zm0,14.23h7.12V35.56H28.44Zm7.12-7.11h7.11V28.44H35.56Zm0-14.23H28.44v7.11h7.12Zm7.11,0h7.11V14.22H42.67ZM14.22,7.11H7.11v7.11h7.11Zm14.22,0H49.78V0H14.22V7.11H28.44Zm28.45,7.11V7.11H49.78v7.11Zm0,0V49.78H64V14.22ZM49.78,56.89h7.11V49.78H49.78Zm-14.22,0H14.22V64H49.78V56.89H35.56ZM7.11,49.78v7.11h7.11V49.78Zm0-14.22V14.22H0V49.78H7.11V35.56Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_pinterest_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_pinterest_setting' ) ); ?>">
                <svg id="a3433066-7725-4c32-b812-9c4b7a7643e8" data-name="pinterest" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <polygon points="14.22 49.78 14.22 56.89 14.22 64 21.33 64 21.33 56.89 21.33 49.78 21.33 42.67 14.22 42.67 14.22 49.78"/><polygon points="28.44 28.44 28.44 21.33 21.33 21.33 21.33 28.44 21.33 35.56 21.33 42.67 28.44 42.67 28.44 35.56 28.44 28.44"/><polygon points="28.44 42.67 28.44 49.78 35.56 49.78 42.67 49.78 42.67 42.67 35.56 42.67 28.44 42.67"/><rect x="42.67" y="35.56" width="7.11" height="7.11"/><polygon points="49.78 14.22 49.78 21.33 49.78 28.44 49.78 35.56 56.89 35.56 56.89 28.44 56.89 21.33 56.89 14.22 49.78 14.22"/><rect x="42.67" y="7.11" width="7.11" height="7.11"/><polygon points="35.56 0 28.44 0 21.33 0 21.33 7.11 28.44 7.11 35.56 7.11 42.67 7.11 42.67 0 35.56 0"/><rect x="14.22" y="7.11" width="7.11" height="7.11"/><polygon points="7.11 21.33 7.11 28.44 7.11 35.56 14.22 35.56 14.22 28.44 14.22 21.33 14.22 14.22 7.11 14.22 7.11 21.33"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_twitch_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_twitch_setting' ) ); ?>">
                <svg id="b485efa8-98ec-4c87-9f8c-5b2ca6d6df3c" data-name="twitch" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M42.67,14.22h7.11V35.56H42.67V14.22ZM21.33,21.33V35.56h7.11V14.22H21.33ZM56.89,0H7.11V7.11H0V56.89H14.22V64H28.44V56.89H49.78V49.78h7.11V42.67H28.44v7.11H21.33V42.67H14.22V7.11H56.89V42.67H64V0Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_spotify_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_spotify_setting' ) ); ?>">
                <svg id="a30d0f0a-215b-4ff3-abec-df1667983a15" data-name="spotify" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M49.78,14.22V7.11h7.11v7.11Zm7.11,0v7.11H49.78v7.11h7.11V49.78H64V14.22ZM49.78,56.89h7.11V49.78H49.78Zm-14.22,0H14.22V64H49.78V56.89H35.56ZM7.11,49.78v7.11h7.11V49.78Zm0-14.22V14.22H0V49.78H7.11V35.56ZM42.67,14.22H14.33v7.11H49.78V14.22Zm0,14.22H14.33v7.12H42.22v7h7.11V35.44H42.67ZM21.33,42.67v7.11H35.56V42.67H21.33ZM28.44,7.11H49.78V0H14.22V7.11H28.44Zm-14.22,0H7.11v7.11h7.11Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_soundcloud_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_soundcloud_setting' ) ); ?>">
                <svg id="e933a93e-ee22-419a-a4f5-95cf34ab6e82" data-name="soundcloud" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M64,32.56V46.78H56.89v7.11H28.44V11.22H42.67v7.11h7.11v7.11h7.11v7.12ZM14.22,25.44V53.89h7.11V18.33H14.22ZM0,32.56V53.89H7.11V25.44H0Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_youtube_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_youtube_setting' ) ); ?>">
                <svg id="a878aee8-e14f-477a-8762-3a983709ef61" data-name="youtube" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M56.89,14.22V7.11H7.11v7.11H0V49.78H7.11v7.11H56.89V49.78H64V14.22ZM21.33,35.56V21.33H35.56v7.11h7.11v7.12H35.56v7.11H21.33Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_mixcloud_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_mixcloud_setting' ) ); ?>">
                <svg id="b8253198-53ae-4da3-b259-92648700c94d" data-name="mixcloud" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M64,7.11V56.89H56.89V14.22H49.78v7.11H42.67V7.11H64ZM35.56,28.44V49.78h7.11V21.33H35.56ZM28.44,56.89h7.12V49.78H28.44Zm0-21.33V21.33H21.33V49.78h7.11V35.56ZM21.33,7.11H0V56.89H7.11V14.22h7.11v7.11h7.11V7.11Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_vimeo_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_vimeo_setting' ) ); ?>">
                <svg id="a25ddcbc-d729-40ea-bd53-89a7cd60f421" data-name="vimeo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <polygon points="56.89 7.11 49.78 7.11 42.67 7.11 42.67 14.22 35.56 14.22 35.56 21.33 42.67 21.33 49.78 21.33 49.78 28.44 42.67 28.44 42.67 35.56 35.56 35.56 28.44 35.56 28.44 28.44 28.44 21.33 28.44 14.22 28.44 7.11 21.33 7.11 14.22 7.11 7.11 7.11 7.11 14.22 0 14.22 0 21.33 0 28.44 7.11 28.44 7.11 21.33 14.22 21.33 14.22 28.44 14.22 35.56 14.22 42.67 21.33 42.67 21.33 49.78 21.33 56.89 28.44 56.89 28.44 64 35.56 64 35.56 56.89 42.67 56.89 42.67 49.78 49.78 49.78 49.78 42.67 56.89 42.67 56.89 35.56 56.89 28.44 64 28.44 64 21.33 64 14.22 64 7.11 56.89 7.11"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_rss_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_rss_setting' ) ); ?>">
                <svg id="ba177b19-ff4e-45db-bac8-14c4638a707f" data-name="rss" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57 57">
                    <path d="M56.89,35.67V57H49.78V35.67ZM42.67,28.56v7.11h7.11V28.56Zm-7.11-7.12v7.12h7.11V21.44Zm-7.12-7.11v7.11h7.12V14.33ZM21.33,7.22v7.11h7.11V7.22ZM14.22.11H0V7.22H21.33V.11ZM28.44,49.89V57h7.12V42.78H28.44ZM21.33,35.67v7.11h7.11V35.67Zm-7.11-7.11v7.11h7.11V28.56ZM7.11,21.44H0v7.12H14.22V21.44Zm0,21.34H0V57H14.22V49.89H7.11Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_bloglovin_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_bloglovin_setting' ) ); ?>">
                <svg id="f1ff12b1-4663-422e-85a2-eed7208d1b00" data-name="bloglovin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M35.56,49.78V42.67h7.11V56.89H35.56Zm0-21.34v7.12h7.11V21.33H35.56ZM49.78,0H42.67V7.11h7.11V21.33h7.11V0ZM21.33,35.56H14.22V21.33H35.56V14.22H7.11V64H35.56V56.89H14.22V42.67H35.56V35.56H21.33Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_linkedin_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_linkedin_setting' ) ); ?>">
                <svg id="fb793a66-a59a-4815-81e4-e60684f9a1a6" data-name="linkedin" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <polygon points="35.56 28.44 28.44 28.44 28.44 35.56 28.44 42.67 28.44 49.78 35.56 49.78 35.56 42.67 35.56 35.56 42.67 35.56 42.67 42.67 42.67 49.78 49.78 49.78 49.78 42.67 49.78 35.56 49.78 28.44 42.67 28.44 35.56 28.44"/><polygon points="14.22 35.56 14.22 42.67 14.22 49.78 21.33 49.78 21.33 42.67 21.33 35.56 21.33 28.44 14.22 28.44 14.22 35.56"/><rect x="14.22" y="14.22" width="7.11" height="7.11"/><polygon points="21.33 7.11 28.44 7.11 35.56 7.11 42.67 7.11 49.78 7.11 56.89 7.11 56.89 0 49.78 0 42.67 0 35.56 0 28.44 0 21.33 0 14.22 0 7.11 0 7.11 7.11 14.22 7.11 21.33 7.11"/><polygon points="7.11 42.67 7.11 35.56 7.11 28.44 7.11 21.33 7.11 14.22 7.11 7.11 0 7.11 0 14.22 0 21.33 0 28.44 0 35.56 0 42.67 0 49.78 0 56.89 7.11 56.89 7.11 49.78 7.11 42.67"/><polygon points="42.67 56.89 35.56 56.89 28.44 56.89 21.33 56.89 14.22 56.89 7.11 56.89 7.11 64 14.22 64 21.33 64 28.44 64 35.56 64 42.67 64 49.78 64 56.89 64 56.89 56.89 49.78 56.89 42.67 56.89"/><polygon points="56.89 7.11 56.89 14.22 56.89 21.33 56.89 28.44 56.89 35.56 56.89 42.67 56.89 49.78 56.89 56.89 64 56.89 64 49.78 64 42.67 64 35.56 64 28.44 64 21.33 64 14.22 64 7.11 56.89 7.11"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_xing_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_xing_setting' ) ); ?>">
                <svg id="afd5afbf-634f-4f8e-9d04-fe20cf9fcb02" data-name="xing" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M63.89,7.11v7.11H56.78V7.11ZM49.78,56.89V49.78H42.67v7.11Zm-.11-35.56h-7v7.11h7.11V21.33h7V14.22H49.67Zm-7,28.45V42.67H35.56v7.11ZM35.56,35.56h7.11V28.44H35.56Zm-7.12,7.11h7.12V35.56H28.44Zm0-21.34H21.33v7.11h7.11ZM14.22,35.56h7.11V28.44H14.22Zm0-21.34v7.11h7.11V14.22ZM7.11,42.67h7.11V35.56H7.11Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
	<?php if ( get_theme_mod( 'brutalistthemes_social_media_snapchat_setting' ) ) { ?>
        <li>
            <a href="<?php echo esc_url( get_theme_mod( 'brutalistthemes_social_media_snapchat_setting' ) ); ?>">
                <svg id="b920d1fa-84db-4476-816f-64376a5ec5b8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                    <path d="M12.8,46.93V51.2H8.53V46.93ZM4.27,42.67v4.26H8.53V42.67Zm12.8,0V38.4H8.53v4.27h8.54Zm4.26-8.54V29.87H17.07V38.4h4.26Zm-12.8,0H12.8V29.87H8.53ZM4.27,25.6v4.27H8.53V25.6Zm8.53-4.27H8.53V25.6H12.8Zm0,4.27v4.27h4.27V25.6Zm8.53-4.27V12.8H17.07V25.6h4.26ZM25.6,8.53H21.33V12.8H25.6Zm34.13,38.4V42.67H55.47v4.26Zm0-17.06V25.6H55.47v4.27ZM51.2,51.2h4.27V46.93H51.2Zm4.27-17.07V29.87H51.2v4.26Zm0-12.8H51.2V25.6h4.27ZM51.2,42.67h4.27V38.4H46.93v4.27ZM46.93,25.6v4.27H51.2V25.6ZM42.67,51.2H38.4v4.27H51.2V51.2H42.67Zm0-17.07V38.4h4.26V29.87H42.67Zm0-12.8V25.6h4.26V12.8H42.67v8.53Zm0-8.53V8.53H38.4V12.8ZM29.87,55.47H25.6v4.26H38.4V55.47H29.87ZM34.13,8.53H38.4V4.27H25.6V8.53h8.53ZM21.33,51.2H12.8v4.27H25.6V51.2Z"/>
                </svg>
            </a>
        </li>
	<?php } ?>
</ul>