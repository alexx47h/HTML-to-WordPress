<?php get_header(); ?>
  <!-- Page Content -->
  <div class="container">
    <?php if (have_posts()) { ?>
      <?php while(have_posts()) { ?>
        <?php the_post(); ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              <?php the_title(); ?>
              <small>by <a href="#"><?php the_author(); ?></a>
              </small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="index.html">Home</a>
              </li>
              <li class="active">Blog Post</li>
            </ol>
          </div>
        </div>
        <!-- /.row -->
        <!-- Content Row -->
        <div class="row">
          <!-- Blog Post Content Column -->
          <div class="col-lg-8">
            <!-- Blog Post -->
            <hr>
            <!-- Date/Time -->
            <p><i class="fa fa-clock-o"></i> Опубликованно <?php the_date(); ?></p>
            <hr>
            <!-- Preview Image -->
            <img class="img-responsive" src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="">
            <hr>
            <!-- Post Content -->
            <p><?php the_content(); ?></p>
            <hr>
            <!-- Blog Comments -->
            <!-- Comments Form -->
            <div class="well">
              <h4>Leave a Comment:</h4>
              <form role="form">
                <div class="form-group">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <hr>
            <!-- Posted Comments -->
            <!-- Comment -->
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Start Bootstrap
                  <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </div>
            <!-- Comment -->
            <div class="media">
              <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Start Bootstrap
                  <small>August 25, 2014 at 9:30 PM</small>
                </h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                <!-- Nested Comment -->
                <div class="media">
                  <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64" alt="">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">Nested Start Bootstrap
                      <small>August 25, 2014 at 9:30 PM</small>
                    </h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                  </div>
                </div>
                <!-- End Nested Comment -->
              </div>
            </div>
          </div>
      <?php } ?>
    <?php } ?>
      <!-- Blog Sidebar Widgets Column -->
      <div class="col-md-4">
        <?php dynamic_sidebar('news-sidebar'); ?>
      </div>
    </div>
    <!-- /.row -->
    <hr>
<?php get_footer(); ?>