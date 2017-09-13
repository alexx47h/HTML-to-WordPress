<?php
  function theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri());
    wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
  }
  add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

  add_theme_support( 'post-thumbnails' );

  register_nav_menu( 'menu', 'Меню в шапке' );

  $args = array(
    'name'          => 'Виджет sidebar',
    'id'            => 'sidebar',
    'description'   => 'Здесь добавляем виджеты сайдбара',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget__title">',
    'after_title'   => '</h4>'
  );
  register_sidebar( $args );

  $args_footer = array(
    'name'          => 'Виджет footer',
    'id'            => 'footer-sbr',
    'description'   => 'Здесь добавляем виджеты футера',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget__title">',
    'after_title'   => '</h4>'
  );
  register_sidebar( $args_footer );
?>