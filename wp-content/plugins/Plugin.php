<?php
/**
 * @package Hello_Hamza
 * @version 1.0.0
 */
/*
Plugin Name: Hamza
Plugin URI: http://wordpress.org/plugins/hello-hamza/
Description: This is a Pluging.
Author: Hamza
Version: 1.0.0
Author URI: http://hamza.com/
*/


add_action('wp_footer','footer');


function footer(){
    echo ('foooteeer');
}