<?php
$iw_active_theme = wp_get_theme();
$iw_child = $iw_active_theme->get( 'Template' ); // If this is a child theme

//Event Camp theme by XiaoThemes
if ($iw_active_theme == 'Eventcamp WordPress Theme' OR $iw_child == 'eventcamp') {
include_once('eventcamp.php');
}
?>