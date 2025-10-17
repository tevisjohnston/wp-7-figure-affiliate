<?php

define('THEME_7FIG_DIR_URI', get_template_directory_uri());
define('THEME_7FIG_DIR', get_template_directory());

class Theme_7_Figure_Affiliate {

    public static function get_instance() {
        static $instance = null;
        if ($instance === null) {
            $instance = new self();
        }
        return $instance;
    }

    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles'));
        add_action('init', array($this, 'register_custom_post_types'));
        add_action('init', array($this, 'register_custom_taxonomies'));
    }

    public function enqueue_styles() {
        wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/assets/css/src/output.css');
    }

    public function register_custom_post_types() {
        $labels = array(
            'name'               => _x('Affiliate Products', 'post type general name', '7-figure-affiliate'),
            'singular_name'      => _x('Affiliate Product', 'post type singular name', '7-figure-affiliate'),
            'menu_name'          => _x('Affiliate Products', 'admin menu', '7-figure-affiliate'),
            'name_admin_bar'     => _x('Affiliate Product', 'add new on admin bar', '7-figure-affiliate'),
            'add_new'            => _x('Add New', 'affiliate product', '7-figure-affiliate'),
        );

        $args = array(
            'labels'             => $labels,
            'description'        => __('Affiliate products from Warriorplus', '7-figure-affiliate'),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array('slug' => 'affiliate-product'),
            'capability_type'    => 'post',
            'menu_position'      => 5,
            'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'revisions'),
            'show_in_rest'       => true,
        );

        register_post_type('affiliate_product', $args);
    }
}


Theme_7_Figure_Affiliate::get_instance();