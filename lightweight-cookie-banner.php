<?php
/**
 * Plugin Name: Lightweight Cookie Banner
 * Plugin URI: https://github.com/Stutz-Medien/Wordpress__Plugin-lightweight-cookie-banner
 * Description: This is a lightweight plugin for a cookie banner.
 * Version: 0.9.0
 * Author: Stutz Medien AG
 * Author URI: https://stutz-medien.ch/
 * License: The MIT License (MIT)
 * License URI: https://mit-license.org/
 */

add_action('wp_enqueue_scripts', 'cookie_banner_init');


function cookie_banner_init() {
    wp_enqueue_script( 'cookie-banner-js', plugins_url( 'files/cookie_banner_.js', __FILE__ ));
    wp_enqueue_style( 'cookie-banner-css', plugins_url( 'files/cookie_banner_.css', __FILE__ ));
}
