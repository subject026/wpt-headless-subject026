<?php

// Register menus

function register_theme_menus() {
  register_nav_menus(array(
    'MAIN_NAV' => 'Header Navigation Menu'
  ));
}
add_action('init', 'register_theme_menus');


// Register custom blocks

if (function_exists('acf_register_block_type')) {
  add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types() {
  acf_register_block_type(
    array(
      'name' => 'hero',
      'title' => __('Hero'),
      'description' => 'Hero Section',
      'render_template' => 'blocks/templates/hero.php',
      'icon' => 'editor-paste-text',
      'keywords' => array('section', 'hero')
    )
  );
}
