<?php
  function _e_tp() {
    echo get_template_directory_uri();
  }

  // function my_scripts_method() {
  //     wp_deregister_script( 'jquery' );
  //     wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
  //     wp_enqueue_script( 'jquery' );
  // }

  function change_the_title($content) {
    $new_content = $content." | Добавление к заголовку";
    return $new_content;
  }
  function another_change_the_title($title) {
    $new_title = $title." | Ещё 1 добавление";
    return $new_title;
  }
  // Без проверки - какого типа данных создается контент
  function change_default_content($content) {
    $content = "<p>Это контент п/у</p>";
    return $content;
  }

  function change_author_name($author) {
    if ($author == "editor") {
      return "Administrator";
    } else {
      return $author;
    }
  }

  function change_date_format_month_txt($myDate) {
  // 22.10.2016
    $newDate = explode(".", $myDate); // ["22","10","2016"]
    // $myDate = explode(".", get_the_date());
    $data = $newDate[0];
    $month = '';
    $year = $newDate[2];

    switch ($newDate[1]) {
      case 1: $month = "января"; break;
      case 2: $month = "февраля"; break;
      case 3: $month = "марта"; break;
      case 4: $month = "апреля"; break;
      case 5: $month = "мая"; break;
      case 6: $month = "июня"; break;
      case 7: $month = "июля"; break;
      case 8: $month = "августа"; break;
      case 9: $month = "сентября"; break;
      case 10: $month = "октября"; break;
      case 11: $month = "ноября"; break;
      case 12: $month = "декабря";
    }
    $newDate = $data.' '.$month.' '.$year;
    return $newDate;
  }

  // add_filter("the_title", "change_the_title", 2);
  // add_filter("the_title", "another_change_the_title", 1);

  // remove_filter("default_content", "change_default_content");

  add_filter("the_author", "change_author_name");
  add_filter("the_date", "change_date_format_month_txt");

  add_theme_support('title-tag');
  add_theme_support('menus');
  register_nav_menu("top", "Top header menu");
  //для удобства м. создать
  // register_nav_menu("bottom", "Bottom header menu");

  $args = array(
    'name'          => 'News sidebar',
    'id'            => 'news_sidebar',
    'description'   => '',
    'class'         => '',
    //инфа из верстки
    'before_widget' => '<div id="%1$s" class="well %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>'
  );
  register_sidebar($args);

  $args = array(
    'name'          => 'Post sidebar',
    'id'            => 'post_sidebar',
    'description'   => '',
    'class'         => '',
    //инфа из верстки
    'before_widget' => '<div id="%1$s" class="well %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widgettitle">',
    'after_title'   => '</h4>'
  );
  register_sidebar($args);
?>