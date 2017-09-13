  <footer class="footer">
      <div class="widget">
        <h4 class="widget__title">Навигация</h4>
        <?php wp_nav_menu(array('theme_location'=>'menu', 'container'=>'false', 'menu_class'=>'')); ?>
      </div>
      <?php dynamic_sidebar('footer-sbr'); ?>
      <div class="widget search">
        <h4 class="widget__title">Поиск</h4>
        <form action="">
          <input type="text" placeholder="Поиск" name="s">
          <button type="submit" class="btn btn-black">Поиск</button>
        </form>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>