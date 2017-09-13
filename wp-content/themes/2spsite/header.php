<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="theme-color" content="#fff">
  <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
  <meta name="viewport" content="width=1200">
  <!--[if IE]><script src="js/html5shiv.js"></script><![endif]-->
  <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
  <header class="header">
    <div class="logo">
      <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      <p><?php bloginfo('description'); ?></p>
    </div>
    <div class="search">
      <form action="">
        <input type="text" placeholder="Поиск" name="s">
        <button type="submit" class="btn">Поиск</button>
      </form>
    </div>
  </header>
  <nav class="nav">
    <?php
      $massiv_vhodnih_parametrov = array(
        'container' => fasle,
        'echo' => false,
        // Аргумент функции формата строки sprintf():
        'items_wrap' => '%3$s',
        'depth' => 0,
      );
      // Удалим из строк меню всё кроме тега ссылки:
      print strip_tags( wp_nav_menu($massiv_vhodnih_parametrov ), '<a>');
    ?>
  </nav>