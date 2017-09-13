<?php get_header(); ?>
  <!-- Header Carousel -->
  <header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <?php
      $args = array("post_type" => 'carousel');
      $slides = new WP_Query($args);
    ?>
    <ol class="carousel-indicators">
      <!-- Число слайдов = число постов -->
      <?php $slides_count = $slides->post_count; ?>
      <?php
        // счетчик
        for ($i = 0; $i < $slides_count; $i++) { ?>
          <?php
            if ($i == 0) {
              $active = "active";
            } else {
              $active = "";
            }
          ?>
          <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
        <?php } ?>
    </ol>
    <!-- Wrapper for slides -->
<!--     <div class="carousel-inner">
    <?php
      // вариант после 8. OptionTree-карусель
      $carouselopttr = ot_get_option("carousel_opttree");
      foreach ($carouselopttr as $carouselop) { ?>
        <div class="item <?php echo $active; ?>">
          <div class="fill" style="background-image:url('<?php echo $carouselop["carousel_opttree_image"]; ?>');"></div>
          <div class="carousel-caption">
            <h2><?php echo $carouselop["title"]; ?></h2>
          </div>
        </div>
      <?php } ?>
    ?> -->
    <?php if ($slides->have_posts()) { ?>
      <div class="carousel-inner">
      <?php
        $i = 0;
        while ($slides->have_posts()) { ?>
          <?php $slides->the_post(); ?>
          <?php
            if ($i == 0) {
              $active = "active";
            } else {
              $active = "";
            }
          ?>
          <div class="item <?php echo $active; ?>">
            <!-- Получаем миниатюру записи -->
            <?php $miniature_url = get_the_post_thumbnail_url($post->ID) ?>
            <div class="fill" style="background-image:url('<?php echo $miniature_url; ?>');"></div>
            <div class="carousel-caption">
              <h2><?php the_title(); ?></h2>
            </div>
          </div>
          <!-- Иначе б. все active -->
          <?php $i++; ?>
        <?php } ?>
        <!-- После всех операций "вернули" WP его данные -->
        <?php wp_reset_postdata(); ?>
      </div>
    <?php } ?>
    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="icon-next"></span>
    </a>
  </header>
  <!-- Page Content -->
  <div class="container">
    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">
          Welcome to <?php bloginfo("name"); ?>
        </h1>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><i class="fa fa-fw fa-check"></i> Bootstrap v3.2.0</h4>
          </div>
          <div class="panel-body">
            <p><?php bloginfo("description"); ?></p>
            <a href="#" class="btn btn-default">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><i class="fa fa-fw fa-gift"></i> Free &amp; Open Source</h4>
          </div>
          <div class="panel-body">
            <p><?php bloginfo("description"); ?></p>
            <a href="#" class="btn btn-default">Learn More</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
          </div>
          <div class="panel-body">
            <p><?php bloginfo("description"); ?></p>
            <a href="#" class="btn btn-default">Learn More</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->
    <!-- Portfolio Section -->
    <?php
      $portfolios_count = ot_get_option("portfolio_count_on_main");
      $args = array(
        "post_type" => 'portfolio',
        "posts_per_page" => $portfolios_count
        );
      $portfolios = new WP_Query($args);
    ?>
    <?php if ($portfolios->have_posts()) { ?>
      <div class="row">
        <div class="col-lg-12">
          <h2 class="page-header">Portfolio Heading</h2>
        </div>
        <?php
          $i=0;
          while ($portfolios->have_posts()) { ?>
            <?php $portfolios->the_post(); ?>
            <?php $miniature_url = get_the_post_thumbnail_url($post->ID); ?>
            <div class="col-md-4 col-sm-6">
              <a href="<?php echo $post->guid; ?>">
                <img class="img-responsive img-portfolio img-hover" src="<?php echo $miniature_url; ?>" alt="">
              </a>
            </div>
          <?php } ?>
      </div>
    <?php } ?>
    <!-- /.row -->
    <!-- Features Section -->
    <div class="row">
      <div class="col-lg-12">
        <h2 class="page-header">Modern Business Features</h2>
      </div>
      <div class="col-md-6">
        <p>The Modern Business template by Start Bootstrap includes:</p>
        <ul>
          <li><strong>Bootstrap v3.2.0</strong>
          </li>
          <li>jQuery v1.11.0</li>
          <li>Font Awesome v4.1.0</li>
          <li>Working PHP contact form with validation</li>
          <li>Unstyled page elements for easy customization</li>
          <li>17 HTML pages</li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
      </div>
      <div class="col-md-6">
        <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/700x450.png" alt="">
      </div>
    </div>
    <!-- /.row -->
    <hr>
    <!-- Call to Action Section -->
    <div class="well">
      <div class="row">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
        </div>
      </div>
    </div>
    <hr>
<?php get_footer(); ?>