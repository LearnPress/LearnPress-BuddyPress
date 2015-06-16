<?php
/*
Plugin Name: LearnPress BuddyPress Integration
Plugin URI: http://thimpress.com/learnpress
Description: Using the profile system provided by BuddyPress
Author: thimpress
Version: beta
Author URI: http://thimpress.com
Tags: learnpress
*/

if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

define( 'LPR_BP_PATH', dirname( __FILE__ ) );
/**
 * Register BuddyPress addon
 */
function learn_press_register_buddypress() {
    require_once( LPR_BP_PATH . '/init.php' );
}
add_action( 'learn_press_register_add_ons', 'learn_press_register_buddypress' );
