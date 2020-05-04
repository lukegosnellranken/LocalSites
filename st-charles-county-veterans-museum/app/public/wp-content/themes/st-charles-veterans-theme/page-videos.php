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

    
    <p class="video-title">Veterans Museum Opening</p>
    
    <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/KiCKlzn4XU8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <br><br>
    <hr>

    <p class="video-title">St. Charles County Veterans Museum</p>
        
    <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/nS9zt9xMHCM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <br><br>
    <hr>

    <p class="video-title">Veterans Museum Update</p>

    <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/z60E7t8ggkQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <br><br>
    <hr>

    <p class="video-title">A WWII Veteran's Story</p>

    <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/GM7YOI1Usxk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <br><br>
    <hr>

    <p class="video-title">The Museum Opens in O'Fallon</p>

    <div class="videoWrapper">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HDVRxfDRRmo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
        

</div>


<?php }
    get_footer();
?>