<?php

class brutalistthemes_portfolio {

	const VERSION = '1.0.0';

	private $slug = 'portfolio';
	private $taxonomy_slug = 'portfolio_tag';
	private $taxonomy_cat_slug = 'portfolio_category';

	public function __construct() {
		// register post type
		add_action( 'init', array( $this, 'register_post_type' ) );

		// register taxonomy
		add_action( 'init', array( $this, 'register_taxonomy' ), 9 );

		// add post type count to "At a Glance" dashboard
		add_filter( 'dashboard_glance_items', array( $this, 'alter_dashboard_glance_items' ) );

		// what to do when theme is activated
		add_action( 'after_switch_theme', array( $this, 'on_activate' ) );
	}

	/**
	 * Register "portfolio" post type
	 */
	public function register_post_type() {
		$labels = array(
			'name'               => is_admin() ? __( 'Portfolio Items', 'w95' ) : __( 'Portfolio', 'w95' ),
			'singular_name'      => __( 'Portfolio Item', 'w95' ),
			'add_new'            => __( 'Add New', 'w95' ),
			'add_new_item'       => __( 'Add New', 'w95' ),
			'edit_item'          => __( 'Edit', 'w95' ),
			'new_item'           => __( 'New', 'w95' ),
			'all_items'          => __( 'All posts', 'w95' ),
			'view_item'          => __( 'View post', 'w95' ),
			'search_items'       => __( 'Search Posts', 'w95' ),
			'not_found'          => __( 'No posts found', 'w95' ),
			'not_found_in_trash' => __( 'No Posts found in Trash', 'w95' ),
			'parent_item_colon'  => '',
			'menu_name'          => is_admin() ? __( 'Portfolio', 'w95' ) : __( 'Portfolio Items', 'w95' )
		);

		$args = array(
			'labels'              => $labels,
			'description'         => __( 'Post type for portfolio posts', 'w95' ),
			'public'              => true,
//			'exclude_from_search' => true,
			'menu_icon'           => 'dashicons-smiley',
			'supports'            => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'trackbacks',
				'comments',
				'custom-fields'
			),
			'has_archive'         => true,
			'taxonomies'          => array( $this->taxonomy_slug, $this->taxonomy_cat_slug ),
            'show_in_rest'       => true,
//            'rewrite'             => array( 'slug' => $this->slug, 'with_front' => true ),
		);

		register_post_type( $this->slug, $args );
	}

	/**
	 * Register taxonomy (used just for related posts)
	 */
	public function register_taxonomy() {
		$args = array(
			'hierarchical'       => false,
			'public'             => false,
			'publicly_queryable' => false,
			'rewrite'            => false,
			'show_admin_column'  => true,
			'show_ui'            => true,
			'show_in_rest'       => true
		);

		register_taxonomy( $this->taxonomy_slug, null, $args );

		$args_cat = array(
			'hierarchical'       => true,
			'public'             => true,
			'publicly_queryable' => true,
			'show_admin_column'  => true,
			'show_ui'            => true,
			'show_in_rest'       => true,
			'update_count_callback' => '_update_post_term_count',
		);

		register_taxonomy( $this->taxonomy_cat_slug, null, $args_cat );

//		flush_rewrite_rules();
	}
	
	/**
	 * add post type count to "At a Glance" dashboard
	 *
	 * @param array $elements
	 *
	 * @return array
	 */
	public function alter_dashboard_glance_items( $elements ) {
		$num_posts = wp_count_posts( $this->slug );

		if ( $num_posts && $num_posts->publish ) {
			$text             = sprintf( _n( '%s Portfolio Item', '%s Portfolio Items', $num_posts->publish, 'w95'), number_format_i18n( $num_posts->publish ) );
			$post_type_object = get_post_type_object( $this->slug );

			if ( $post_type_object && current_user_can( $post_type_object->cap->edit_posts ) ) {
				$elements[] = sprintf( '<a class="%1$s-count" href="edit.php?post_type=%2$s">%3$s</a>', $this->slug, $this->slug, $text );
			} else {
				$elements[] = sprintf( '<span class="%1$s-count">%2$s</span>', $this->slug, $text );
			}

			$elements[] = '<style>#dashboard_right_now .' . $this->slug . '-count:before {content: "\f488"}</style>';
		}

		return $elements;
	}

	/**
	 * What to do when the theme is activated
	 */
	public function on_activate() {
		// flush
		flush_rewrite_rules();
	}

}