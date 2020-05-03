<?php
    get_header();
    while(have_posts()) {
        the_post(); 
        pageBanner();
?>

        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo site_url('/stories') ?>"><i class="fa fa-home" aria-hidden="true"></i> Stories Home</a> <span class="metabox__main museum-events">Veterans Stories</span></p>
            </div>
            
            <div class="container container--narrow page-section">
                <div class="generic-content">
                    <div class="row group">

                        <div class="one-third">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="two-thirds">
                            <?php the_content(); ?>
                            <p><em>Please contact the St. Charles County Veterans Museum Oral History project at info@stcharlescountyveteransmuseum.com or call 636-294-2657 
                                for more information and lets’ talk. We want to hear from you because we know…Every Veteran has a story.</em></p>


                        </div>

                    </div>
                </div>

                <?php

                    $relatedPrograms = get_field('related_programs');

                    if ($relatedPrograms) {
                    echo '<hr class="section-break">';
                    echo '<h2 class="headline headline--medium">Subject(s) Taught</h2>';
                    echo '<ul class="link-list min-list">';
                    foreach($relatedPrograms as $program) { ?>
                        <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program); ?></a></li>
                    <?php }
                    echo '</ul>';
                    }

                ?>

            </div>

        </div>
        
    <?php } 
    get_footer();
?>