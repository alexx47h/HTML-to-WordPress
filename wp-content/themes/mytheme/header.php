<!DOCTYPE html>
<html lang="<?php echo get_bloginfo( 'language' ); ?>">
<head>
  <meta charset="<?php echo get_bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
<!-- Modern Business - Start Bootstrap Template -->
  <!-- Bootstrap Core CSS -->
  <link href="<?php _e_tp(); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"> -->
  <!-- Custom CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/css/modern-business.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <?php wp_head(); ?>
  <style>
    <?php
      $top_line_background = ot_get_option("top_line_background");
      if (isset($top_line_background)) { ?>
        /*класс из верстки, отвечающий за цвет фона меню*/
        .navbar-inverse {
          background-color: <?php echo $top_line_background; ?>;
          border-color: <?php echo $top_line_background; ?>;
        }
      <?php } ?>
    ?>
  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <!-- вызываем в н-м месте -->
        <?php
          $args = array(
            'theme_location' => 'top',
            // <ul class у н-го меню
            'menu_class' => 'nav navbar-nav navbar-right'
          );
          wp_nav_menu($args);
        ?>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>