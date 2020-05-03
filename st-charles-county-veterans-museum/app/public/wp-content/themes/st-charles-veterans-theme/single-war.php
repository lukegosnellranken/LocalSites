<?php
    get_header();
    while(have_posts()) {
        the_post(); 
        pageBanner();
?>

        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('war'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Stories Home</a> <span class="metabox__main museum-events">Veterans Stories</span></p>
            </div>
            <div class="generic-content">
                <?php the_content(); ?>
            </div>

            <?php
                $relatedVeterans = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'story',
                    'orderby' => 'title',
                    'order' => 'ASC',
                    'meta_query' => array(
                        array(
                            'key' => 'wars_involved',
                            'compare' => 'LIKE',
                            'value' => '"' . get_the_ID() . '"'
                        )
                    )
                ));

                if ($relatedVeterans->have_posts()) {
                    echo '<hr class="section-break">';
                    echo '<h2 class="headline headline--medium">' . get_the_title() . ' Veterans</h2>';

                    echo '<ul class="professor-cards">';
                    while($relatedVeterans->have_posts()) {
                        $relatedVeterans->the_post(); ?>
                        <li class="professor-card__list-item">
                            <a class="professor-card" href="<?php the_permalink(); ?>">
                                <img class="professor-card__image" src="<?php the_post_thumbnail_url('veteranCard'); ?>">
                                <span class="professor-card__name"><?php the_title(); ?></span>
                            </a>
                        </li>
                    <?php }
                    echo '</ul>';
                }

                wp_reset_postdata();
            ?>

        </div>
        
    <?php } 
    get_footer();
?>