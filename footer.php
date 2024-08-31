<footer>
    <div class="container">
        <div class="top">
          <div class="left">
              <a class="logo" href="/">
                  <img src="<?php echo get_field('logo', 'option'); ?>" alt="Foodieland">
              </a>
              <p class="subtitle">Lorem ipsum dolor sit amet, consectetuipisicing elit, </p>
          </div>
          <?php wp_nav_menu(array(
            'theme_location' => 'footer_menu'
          ));?>
        </div>
        <div class="bottom">
            <p><span>&commat;</span> Copyright <?php echo date('Y'); ?></p>
            <ul class="social-links">
              <?php $facebook = get_field('facebook', 'option');
              if(isset($facebook) && !empty($facebook)): ?>
                  <li class="facebook"><a href="<?php echo $facebook; ?>"></a></li>
              <?php endif; $twitter = get_field('twitter', 'option');
              if(isset($twitter) && !empty($twitter)): ?>
                  <li class="twitter"><a href="<?php echo $twitter; ?>"></a></li>
              <?php endif; $instagram = get_field('instagram', 'option');
              if(isset($instagram) && !empty($instagram)): ?>
                  <li class="instagram"><a href="<?php echo $instagram; ?>"></a></li>
              <?php endif; ?>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>