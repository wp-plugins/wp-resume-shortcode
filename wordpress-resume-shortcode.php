<?php

/*
Plugin Name: Wordpress Resume Shortcode
Plugin URI: http://www.patrickroux.fr
Description: A wordpress plugin allowing the use of shortcodes to build a resume page. For help on how to use it, go to Settings > WP Resume SC.
Version: 0.1
Author: Patrick Roux
Author URI: http://www.patrickroux.fr
License: GPL2
*/



class wordpress_resume_shortcode
{
    public function __construct()
    {
        include_once plugin_dir_path( __FILE__ ).'/actions/wprsc-addshortcode.php';
		new wprsc_addshortcode();

        include_once plugin_dir_path( __FILE__ ).'/actions/wprsc-addmenu.php';
		new wprsc_addmenu();
    }
}

new wordpress_resume_shortcode();


?>