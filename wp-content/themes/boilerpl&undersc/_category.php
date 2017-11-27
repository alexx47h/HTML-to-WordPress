<?php get_header(); ?>
<?php if (have_posts()) { ?>
  <?php while(have_posts()) { ?>
    <?php the_post(); ?>
    <!-- HTML + PHP для вывода контента с исп-м тегов -->
    <ul>
      <li><?php the_title(); ?></li>
    </ul>
  <?php } ?>
<?php } ?>


<?php if (have_posts()) { ?>
  <?php the_post(); ?>
  <!-- Page Content -->
  <div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
      <div class="col-lg-12">
        <h1 class="page-header">One Column Portfolio
          <small>Subheading</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="index.html">Home</a>
          </li>
          <li class="active"><?php the_category("portfolio"); ?></li>
        </ol>
      </div>
    </div>
    <!-- /.row -->
    <!-- Project One -->
    <?php while (have_posts()){ ?>
      <?php the_post(); ?>
      <?php $miniature_url_relate = get_the_post_thumbnail_url($post->ID);?>
      <?php $title_portfolio = get_the_title($post->ID);?>
      <div class="row">
        <div class="col-md-7">
          <a href="<?php echo get_post_permalink($post->ID); ?>">
            <img class="img-responsive img-hover" src="<?php echo $miniature_url_relate; ?>" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3><?php echo $title_portfolio; ?></h3>
          <p><?php the_excerpt(); ?></p>
          <a class="btn btn-primary" href="<?php echo get_post_permalink($post->ID); ?>">View Project</i></a>
        </div>
      </div>
      <!-- /.row -->
      <hr>
    <?php } ?>
    <!-- Pagination -->
    <div class="row text-center">
      <div class="col-lg-12">
        <?php the_posts_pagination($args); ?>
        <ul class="pagination">
          <li>
            <a href="#">&laquo;</a>
          </li>
          <li class="active">
            <a href="#">1</a>
          </li>
          <li>
            <a href="#">2</a>
          </li>
          <li>
            <a href="#">3</a>
          </li>
          <li>
            <a href="#">4</a>
          </li>
          <li>
            <a href="#">5</a>
          </li>
          <li>
            <a href="#">&raquo;</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- /.row -->
    <hr>
<?php } ?>
<?php get_footer(); ?>