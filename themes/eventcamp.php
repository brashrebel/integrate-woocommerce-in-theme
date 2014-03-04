<?php
// Get body up to snuff and ditch the sidebar on products and product archives
add_action('woocommerce_before_main_content', 'eventcamp_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'eventcamp_wrapper_end', 10);
add_action('wp', create_function("", "if (is_archive(array('product'))) remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);") );
add_action('wp', create_function("", "if (is_singular(array('product'))) remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);") );
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10);
function eventcamp_wrapper_start() {
echo '<div class="container"><div class="content-wrapper">';
}
function eventcamp_wrapper_end() {
echo '</div></div><!--container and content-wrapper-->';
}
?>