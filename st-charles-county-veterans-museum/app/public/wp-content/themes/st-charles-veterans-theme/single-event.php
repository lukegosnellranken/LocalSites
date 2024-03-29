<?php
    get_header();
    while(have_posts()) {
        the_post(); 
        pageBanner();
?>

        <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
                <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Events Home</a> <span class="metabox__main museum-events">Museum Events</span></p>
            </div>
            <div class="generic-content">
                <?php the_content(); ?>
                <p><em>Call or email us. The museum is always looking for sponsors, donors, artifacts, memorabilia, veterans stories and volunteers. 
                    For more information on the museum, contact sccvetsmuseum@gmail.com or call 636-294-2657.</em></p>
            </div>

            

        </div>
        
    <?php } 
    get_footer();
?>