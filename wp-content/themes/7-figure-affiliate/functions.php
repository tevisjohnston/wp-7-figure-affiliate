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
    }

    public function enqueue_styles() {
        wp_enqueue_style('tailwind-output', get_template_directory_uri() . '/assets/css/src/output.css');
    }

}


Theme_7_Figure_Affiliate::get_instance();