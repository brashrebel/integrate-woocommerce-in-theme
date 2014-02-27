<?php
/*
Plugin Name: Integrate Woocommerce in Theme
Description: This simple plugin provides theme support for Woocommerce in themes that don't natively integrate with it.
Version: 1.0
Author: Kyle Maurer
Author URI: http://realbigmarketing.com/staff/kyle
*/

/*
Tutorials and recources:
http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
*/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
include_once('themes/themes.php');
}
?>