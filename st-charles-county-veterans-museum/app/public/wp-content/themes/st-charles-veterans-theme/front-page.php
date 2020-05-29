
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
        <h2 class="event-news-title headline headline--small-plus t-center">Latest Events</h2>

        <?php
        // SHOWS LATEST 2 EVENTS PAST AND PRESENT
          /* $today = 3000-01-01;
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
          )); */

          // SHOWS LATEST 2 EVENTS PRESENT ONLY
          $today = date('Ymd');
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
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
                <p class="home-post-content"><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                    } ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
              </div>
            </div>
            <?php }
            ?>

        <p class="t-center no-margin archive-link-desktop"><a href="<?php echo get_post_type_archive_link('event'); ?>" class="btn btn--blue btn--home">All Current Events</a></p>
        <p class="archive-link-mobile"><a class="archive-link-mobile-link" href="<?php echo get_post_type_archive_link('event'); ?>">See All Current Events</a></p>

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
                <p class="home-post-content"><?php if(has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                } ?><a href="<?php the_permalink(); ?>" class="nu gray">Read more</a></p>
              </div>
            </div>
          <?php } wp_reset_postdata();
        ?>
        
        <p class="t-center no-margin archive-link-desktop"><a href="<?php echo site_url('/news'); ?>" class="btn btn--yellow btn--home">News Archive</a></p>
        <p class="archive-link-mobile"><a class="archive-link-mobile-link" href="<?php echo site_url('/news'); ?>">Browse News Archive</a></p>
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
        <p class="front-page-text ralph-quote"><span class="quotation">"</span>No one is ever gone, as long as somebody still has memories of them.<span class="quotation">"</span></h3></p>
      </div>

    </div>
  </div>




<!-- Hero slider -->
<div class="hero-slider">
  <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('images/camera/pano-7.jpg') ?>);">
    <div class="hero-slider__interior container">
      <div class="hero-slider__overlay">
        <h2 class="headline headline--medium t-center">Donate</h2>
        <p class="t-center hero-slider-desktop">A museum that honors the story of every veteran that has ever lived in St. Charles County. That’s a tall order! We need your help!</p>
        <p class="t-center hero-slider-mobile">We need your help!</p>
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
        <p class="t-center hero-slider-desktop">Learn how you can get involved with some of the most dedicated people in St. Charles County.</p>
        <p class="t-center hero-slider-mobile">Learn how you can get involved.</p>
        <p class="t-center no-margin"><a href="<?php echo site_url('/volunteers') ?>" class="btn btn--blue">Learn more</a></p>
      </div>
    </div>
  </div>
</div>


<div id="map-flex-div" class= "row group">
  <div>
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3108.997857780127!2d-90.69608018465223!3d38.809602379584405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87ded1f87c5419a5%3A0x7ea528bc8dd3c52d!2sSt%20Charles%20County%20Veterans%20Museum!5e0!3m2!1sen!2sus!4v1588384446196!5m2!1sen!2sus" width="640" height="427" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <div>
    <img id="museum-image" src="<?php echo get_theme_file_uri('images/veterans-museum-pic3-text.png') ?>"/> 
  </div>
</div>

<div id="map-mobile-div">
  <div>
    <iframe id="map-mobile" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3108.997857780127!2d-90.69608018465223!3d38.809602379584405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87ded1f87c5419a5%3A0x7ea528bc8dd3c52d!2sSt%20Charles%20County%20Veterans%20Museum!5e0!3m2!1sen!2sus!4v1588384446196!5m2!1sen!2sus" width="640" height="427" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </div>
  <div>
    <img id="museum-image-mobile" class="motto-image" src="<?php echo get_theme_file_uri('images/veterans-museum-pic3-text.png') ?>"/> 
    <img id="museum-image-mobile" class="motto-image-mobile" src="<?php echo get_theme_file_uri('images/veterans-museum-pic3.png') ?>"/> 
  </div>
</div>



<?php get_footer();
?>

