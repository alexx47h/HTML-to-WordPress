<?php
/**
 * ThemeforDev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ThemeforDev
 */
if ( ! function_exists( 'themefordev_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function themefordev_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on ThemeforDev, use a find and replace
     * to change 'themefordev' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'themefordev', get_template_directory() . '/languages' );
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );
    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'menu-1' => esc_html__( 'Primary', 'themefordev' ),
    ) );
    // register_nav_menu('top-menu', 'for header');
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ) );
    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'themefordev_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    ) ) );
    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );
    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );
    // Настройка выбора форматов поста в админке
    // add_theme_support('post-formats', array('aside', 'quote'));

    /* др. р-р миниатюр, исп-е: <?php the_post_thumbnail('flats-thumb') ?> */
    // add_image_size('flats-thumb', 400, 300, true);
  }
endif;
add_action( 'after_setup_theme', 'themefordev_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function themefordev_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'themefordev_content_width', 640 );
}
add_action( 'after_setup_theme', 'themefordev_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function themefordev_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Sidebar', 'themefordev' ),
    'id'            => 'sidebar-1',
    'description'   => esc_html__( 'Add widgets here.', 'themefordev' ),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
  // register_sidebar([
  //   'name' => 'Sidebar Right',
  //   'id' => 'sidebar-right',
  //   'description' => 'Column aside',
  //   'before_widget' => '<div class="widget %2$s">',
  //   'after_widget'  => '</div>\n'
  // ]);
}
add_action( 'widgets_init', 'themefordev_widgets_init' );
/**
 * Enqueue scripts and styles.
 * Имя ф-и: "Название_темыWP_scripts" - ? = назв. для экшена (themefordev_scripts)
*/
function themefordev_media() {
  // Напр., если шрифты не локально, а с googlefonts, то как обычно в <head>.
  // Для корневого style.css:
  wp_enqueue_style( 'themefordev-style', get_stylesheet_uri() );
/* // wp_enqueue_style( 'main-mystyle', get_template_directory_uri() . '/css/main.min.css' );

  // jQuery в WP п/у, но если не указать явно (даже м.б. нет js/jquery.js), то не б. работать авто-карусель (GB-2017):
  wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.js', array(), null, true );
   // Подключать после array('jquery'), null - версия файла (м.б. в '20151215'), false - скрипт "пойдет" в <head>..., true - перед ...</body>:
   wp_enqueue_script( 'carousel-js', get_template_directory_uri() . '/js/carousel.js', array('jquery'), null, true );
   // Скрипт не локально:
   // wp_enqueue_script( 'easing-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js', array('jquery'), null, true );*/
  wp_enqueue_script( 'themefordev-nav', get_template_directory_uri() . '/js/main.min.js', array(), null, true );
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'themefordev_media' );
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
  require get_template_directory() . '/inc/jetpack.php';
}


/* Автоактивация и -обновление плагинов */
include_once(ABSPATH . 'wp-admin/includes/plugin.php');
activate_plugin('contact­form­7/wp_contact­form­7.php');
add_filter('auto_update_plugin', '__return_true');
/* Ограничение ревизий: 6 для стр., 3 для записей (и др. типов) */
function my_revisions_to_keep( $revisions, $post ) {
  if ( 'page' == $post->post_type )
    return 6;
  else
    return 3;
}
add_filter( 'wp_revisions_to_keep', 'my_revisions_to_keep', 6, 3 );
/* Откл. автоформатирования WP */
remove_filter('the_content','wptexturize');
remove_filter('the_excerpt','wptexturize');
remove_filter('comment_text', 'wptexturize');
/*  */
