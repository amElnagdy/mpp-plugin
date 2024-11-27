<?php

/**
 * Plugin Name: MPP Plugin
 * Description: A plugin for the MPP project.
 * Version: 1.0
 * Author: YOUR NAME
 */

 // Custom CSS for the whole website
 add_action('wp_enqueue_scripts', 'mpp_plugin_enqueue_styles');
 function mpp_plugin_enqueue_styles() {
    wp_enqueue_style('mpp-plugin-styles', plugin_dir_url(__FILE__) . 'assets/custom-css.css');
 }

 // Custom JS for the footer
 add_action('wp_footer', 'mpp_plugin_js_for_footer');
 function mpp_plugin_js_for_footer() {
    echo '<script src="' . plugin_dir_url(__FILE__) . 'assets/custom-js.js"></script>';
 }

 // Add anything you want to add to the <head> tag
 add_action('wp_head', 'mpp_plugin_add_meta_tags');
 function mpp_plugin_add_meta_tags() {
    echo '';
 }

