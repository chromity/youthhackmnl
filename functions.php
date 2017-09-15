<?php
add action('wp_enqueue_scripts', 'mat_assets');

function mat_assets() {
  wp_enqueue_style('youthhackmnl', get_stylesheet_uri());
}
