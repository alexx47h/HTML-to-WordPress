<?php get_header(); ?>
  <div class="main">
    <div class="content">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <!-- post -->
      <article class="article">
        <h3 class="article__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span class="date"><?php the_time('d.m.y'); ?></span></h3>
        <?php the_post_thumbnail( 'full' ); ?>
        <p><?php the_excerpt(); ?></p>
        <footer class="article__footer">
          <div class="tags"><?php the_tags('<span>Теги:</span> '); ?></div>
        </footer>
      </article>
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
        <h2>Данных постов нет!</h2>
      <?php endif; ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
<?php get_footer(); ?>