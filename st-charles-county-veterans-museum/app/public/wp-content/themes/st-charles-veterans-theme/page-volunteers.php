<?php
get_header(); 

while(have_posts()) {
    the_post(); 
    pageBanner();
?>



    <div class="container container--narrow page-section">

    <?php
        $theParent = wp_get_post_parent_id(get_the_ID());

        if ($theParent) { ?>
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
            </div>
        <?php }
    ?>

    <?php
        $testArray = get_pages(array(
            'child_of' => get_the_ID()
        ));
        if($theParent or $testArray){ ?>
            <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
                <ul class="min-list">
                    <?php
                        if($theParent){
                            $findChildrenOf = $theParent;
                        } else {
                            $findChildrenOf = get_the_ID();
                        }
                        wp_list_pages(array(
                            'title_li' => NULL,
                            'child_of' => $findChildrenOf
                        ));
                    ?>
                </ul>
            </div>
    <?php }
    ?>

    <!-- no pulling content -->
    <!-- reusing code from packages page -->

    
    <div class="row group">
        <div class="one-half">
            <img class="volunteer-image" src="<?php echo get_theme_file_uri('images/volunteer.png') ?>"/> 
        </div>
        
        <div class="one-half">
        <p class="volunteer-title">Would you like to get involved with some of the most dedicated people in St. Charles County?</p>
        <p class="volunteer-info">If you would like to join the volunteers working to make the St. Charles County Veterans Museum a reality, then we would like to hear from you! 
            You don’t need to be a Veteran, we love Patriots too!  
            Whether it is stuffing envelopes, building exhibits, helping with the Gift Shop, talking to groups, 
            working on the gardens, or maybe you have ideas we haven’t even thought of yet! We want to hear from you! 
            You can either email us at info@stcharlescountyveteransmuseum.com or call 636-294-2657 or fill out the form below!
        </p>
        </div>
    </div>
    

</div>


<?php }
    get_footer();
?>