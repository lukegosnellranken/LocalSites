
<?php get_header(); ?>

  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/camera/pano-8.jpg') ?>);">
    </div>
    <div class="page-banner__content container t-center c-white">
      <h2 class="headline headline--medium" id="home-banner-title">Every veteran has a story.</h2>
    </div>
  </div>

  <div class="under-banner">
  <br class="ub-break">
    <p class="under-banner-text">Open Thursday and Friday 10am - 6pm | Saturday 10am - 4pm</p>
    
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Latest Events</h2>

        <?php
          $today = 3000-01-01;
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));

          while($homepageEvents->have_posts()) {
            $homepageEvents->the_post(); ?>
            <div class="event-summary">
              <a class="event-summary__date t-center" href="#">
                <span class="event-summary__month"><?php
                  $eventDate = DateTime::createFromFormat('d/m/Y',  get_field( 'event_date' ));
                  echo $eventDate->format('M')
                ?></span>
                <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                    } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
              </div>
            </div>
            <?php }
            ?>

        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue">All Current Events</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Current News</h2>
        <?php 
          $homepagePosts = new WP_Query(array(
            'posts_per_page' => 2
          ));

          while($homepagePosts->have_posts()){
            $homepagePosts->the_post(); ?>
            <div class="event-summary">
              <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if(has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                } ?><a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
              </div>
            </div>
          <?php } wp_reset_postdata();
        ?>
        
        <p class="t-center no-margin"><a href="<?php echo site_url('/news'); ?>" class="btn btn--yellow">News Archive</a></p>
      </div>
    </div>
  </div>


  <img id="home-transparent-line" src="<?php echo get_theme_file_uri('images/transparent-line.png') ?>" /> 


  <div class="generic-content" id="front-page-ralph">
    <div class="row group">

      <div class="one-third">
        <img id="ralph-image" src="<?php echo get_theme_file_uri('images/ralph_barrale.png') ?>"/> 
      </div>

      <div class="two-thirds">
        <p class="front-page-text">Ralph Barrale wanted to see a Veterans Museum that would honor all of those Veterans who served our country, and especially those from St. Charles County. This was but another example of Ralph Barrale’s dedication to our servicemen and women and his desire to keep their memories in the forefront of the generations of today so that our Veterans will not be forgotten.</p>
        <p class="front-page-text">The museum opened in the spring of 2019. There you will find “Ralph’s Story” among others like his, who served our country, because Ralph felt</p>
        <!-- <blockquote class="front-page-text">“NO ONE IS EVER GONE, AS LONG AS SOMEONE STILL HAS MEMORIES OF THEM”</blockquote> -->
        <p class="ralph-quote">"No one is ever gone, as long as somebody still has memories of them."</p>
      </div>

    </div>
  </div>





  <div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/camera/pano-7.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Donate</h2>
        <p class="t-center">A museum that honors the story of every veteran that has ever lived in St. Charles County. That’s a tall order! We need your help!</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/donate') ?>" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/camera/pano-5.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Stories</h2>
        <p class="t-center">Every veteran has one.</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/stories') ?>" class="btn btn--blue">View archive</a></p>
      </div>
    </div>
  </div>
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/camera/pano-2.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Volunteers</h2>
        <p class="t-center">Learn how you can get involved with some of the most dedicated people in St. Charles County.</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/volunteers') ?>" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div>

<?php get_footer();
?>

