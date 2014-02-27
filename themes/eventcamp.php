<?php
add_action('woocommerce_before_main_content', 'eventcamp_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'eventcamp_wrapper_end', 10);

function eventcamp_wrapper_start() {
  echo 'HHHHHHHHHHHHHHHHH<div class="container"><div class="content-wrapper">';
}

function eventcamp_wrapper_end() {
  echo '</div></div><!--container and content-wrapper-->';
}
?>