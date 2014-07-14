<?php
add_action('woocommerce_before_main_content', 'hemingway_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'hemingway_wrapper_end', 10);
function hemingway_wrapper_start() {
echo '<div class="wrapper section-inner"><div class="content left">';
}
function hemingway_wrapper_end() {
echo '</div></div><!--wrapper + content left + posts-->';
}