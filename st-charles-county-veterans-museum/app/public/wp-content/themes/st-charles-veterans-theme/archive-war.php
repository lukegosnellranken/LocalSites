<?php
    get_header(); 
    pageBanner(array(
        'title' => 'Veterans Stories',
        'subtitle' => ' '
    ));
?>

    <div class="container container--narrow page-section">
        <?php 
            while(have_posts()) {
                the_post(); ?>
                <div class = "post-item">
                    <h2 class="war-title-headline"><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <br>

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
            echo paginate_links();
        ?>
    </div>

    <?php get_footer();
?>