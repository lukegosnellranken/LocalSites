
<footer class="site-footer">

<div class="site-footer__inner container container--narrow">

  <div class="group">

    <div class="site-footer__col-one">
      <h1 class="museum-logo-text-footer museum-logo-text--alt-color"><a href="<?php echo site_url() ?>"><strong>St. Charles County</strong> Veterans Museum</a></h1>
      <p><a class="site-footer__nonlink">636-294-2657<br>410 East Elm Street<br>O'Fallon, Missouri</a></p>
      
    </div>

    <div class="site-footer__col-two-three-group">
      <div class="site-footer__col-two">
        <h3 class="headline headline--small">Explore</h3>
        <nav class="nav-list">
          <ul>
            <li><a href="<?php echo site_url('/news') ?>">News</a></li>
            <li><a href="<?php echo site_url('/videos') ?>">Videos</a></li>
            <li><a href="<?php echo site_url('/gallery') ?>">Gallery</a></li>
            <li><a href="<?php echo site_url('/stories') ?>">Stories</a></li>
          </ul>
        </nav>
      </div>
      

      <div class="site-footer__col-three">
        <h3 class="headline headline--small">Give</h3>
        <img id="footer-donate" src="<?php echo get_theme_file_uri('images/donate-button-desktop.png') ?>" /> 
        <img id="footer-donate-mobile" src="<?php echo get_theme_file_uri('images/donate-button.png') ?>" /> 
      </div>
    </div>

    <div class="site-footer__col-four">
      <h3 class="headline headline--small">Connect With Us</h3>
      <nav>
        <ul class="min-list social-icons-list group">
          <li><a href="https://www.facebook.com/SCCVETERANSMUSEUM/" class="social-color-facebook" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          
          <!-- <li><a href="<?php echo site_url('/videos') ?>" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> -->
          
        </ul>
      </nav>
    </div>
  </div>

</div>
<p class="gosnell-footer">Site created and designed by <a class="gosnell-link" target="_blank" rel="noopener noreferrer" href="http://lukegosnell.com">Luke Gosnell</a>  - &#169;2020</p>
</footer>

<?php wp_footer(); ?>

</body>
</html>