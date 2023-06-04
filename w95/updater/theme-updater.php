<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( ! class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include dirname( __FILE__ ) . '/theme-updater-admin.php';
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(
	// Config settings
	array(
		'remote_api_url' => 'https://brutalistthemes.com', // Site where EDD is hosted
		'item_name'      => 'W95', // Name of theme
		'theme_slug'     => 'w95', // Theme slug
		'version'        => '21.13', // The current version of this theme
		'author'         => 'Brutalist Themes', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
		'item_id'        => '',
	),
	// Strings
	array(
		'theme-license'             => __( 'Theme License', 'w95' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'w95' ),
		'license-key'               => __( 'License Key', 'w95' ),
		'license-action'            => __( 'License Action', 'w95' ),
		'deactivate-license'        => __( 'Deactivate License', 'w95' ),
		'activate-license'          => __( 'Activate License', 'w95' ),
		'status-unknown'            => __( 'License status is unknown.', 'w95' ),
		'renew'                     => __( 'Renew?', 'w95' ),
		'unlimited'                 => __( 'unlimited', 'w95' ),
		'license-key-is-active'     => __( 'License key is active.', 'w95' ),
		/* translators: the license expiration date */
		'expires%s'                 => __( 'Expires %s.', 'w95' ),
		'expires-never'             => __( 'Lifetime License.', 'w95' ),
		/* translators: 1. the number of sites activated 2. the total number of activations allowed. */
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'w95' ),
		'activation-limit'          => __( 'Your license key has reached its activation limit.', 'w95' ),
		/* translators: the license expiration date */
		'license-key-expired-%s'    => __( 'License key expired %s.', 'w95' ),
		'license-key-expired'       => __( 'License key has expired.', 'w95' ),
		/* translators: the license expiration date */
		'license-expired-on'        => __( 'Your license key expired on %s.', 'w95' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'w95' ),
		'license-is-inactive'       => __( 'License is inactive.', 'w95' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'w95' ),
		'license-key-invalid'       => __( 'Invalid license.', 'w95' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'w95' ),
		/* translators: the theme name */
		'item-mismatch'             => __( 'This appears to be an invalid license key for %s.', 'w95' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'w95' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'w95' ),
		'error-generic'             => __( 'An error occurred, please try again.', 'w95' ),
	)
);
