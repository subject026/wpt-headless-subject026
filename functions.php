<?php

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
