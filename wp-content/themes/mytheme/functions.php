<?php
  // Имя ф-и: "Название_темыWP_scripts" - ? = назв. для экшена (theme_name_scripts)
  function my_theme_scripts() {
    // Напр., если шрифты не локально (а с googlefonts), то как обычно в <head>
    // Для корневого style.css
    wp_enqueue_style( 'my_theme-style', get_stylesheet_uri() );
    // В php точкой "." объединяем 2 выражения
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'modern-business-style', get_template_directory_uri() . '/css/modern-business.css' );
    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );

    // jQuery в WP п/у, но если не указать явно (даже м. не б. здесь js/jquery.js), то не б. работать авто-карусель
    wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.js', array(), null, true );
    // Подключать после array('jquery'), false - скрипт "пойдет" в <head>..., true - ...</body>
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/js/carousel.js', array('jquery'), null, true );
    // Загрузка не локально
    // wp_enqueue_script( 'easing-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), null, true );
    // wp_enqueue_script( 'example-js', get_template_directory_uri() . '/js/example.js', array(), '20151215', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );

  $args_news = array(
    'name'          => 'News sidebar',
    'id'            => 'news_sidebar',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="well %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>'
  );
  register_sidebar($args_news);
  $args_post = array(
    'name'          => 'Post sidebar',
    'id'            => 'post_sidebar',
    'description'   => '',
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="well %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>'
  );
  register_sidebar($args_post);


  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('menus');

  register_nav_menu('top', 'Top header menu');


  remove_filter('the_content','wptexturize');
  remove_filter('the_excerpt','wptexturize');
  remove_filter('comment_text', 'wptexturize');
?>