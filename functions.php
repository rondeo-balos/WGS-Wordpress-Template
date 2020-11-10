<?php
  
  function custom_theme_assets(){
    wp_emqueue_style('style',get_stylesheet_uri());
  }
  add_action('wp_enqueu_scripts','custom_theme_assets');
  
  register_nav_menus(['primary'=>__('Primary Menu')]);
