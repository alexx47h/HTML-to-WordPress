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
<?php get_footer(); ?>