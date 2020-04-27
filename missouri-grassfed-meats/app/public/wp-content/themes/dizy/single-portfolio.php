<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package dizy
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="container">
		<?php
		while ( have_posts() ) :
			the_post();
			the_content();
		endwhile; // End of the loop.
		?>
		</div>
		<!-- wraper-portfolio-navigation -->
		<div class="wraper-portfolio-navigation">
		    <div class="container">
		        <?php if ( 'one' === dizy_global_var( 'portfolio_single_navigation_style', '', false ) ) : ?>
		            <!-- START OF STYLE ONE -->
		            <!-- portfolio-navigation -->
            		<div class="row portfolio-navigation style-one">
            		    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-left text-left">
            		        <?php
                			$prev_post = get_previous_post();
                			if ( is_a( $prev_post, 'WP_Post' ) ) {
                				?>
                				<!-- portfolio-navigation-previous -->
                				<div class="portfolio-navigation-previous">
                					<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>">
                					    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="29" viewBox="0 0 7 29"><path fill="none" d="M7 25l-3 3H3l-3-3M3.5 0v29"></path></svg>
                					</a>
                				</div>
                				<!-- portfolio-navigation-previous -->
                			<?php } ?>
            	        </div>
            	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            	            <!-- portfolio-navigation-migrate  -->
            				<div class="portfolio-navigation-migrate">
            					<a class="btn" href="<?php echo esc_url( dizy_global_var( 'portfolio_single_navigation_button_link', '', false ) ); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo esc_attr__('Back To Portfolio', 'dizy'); ?>">
            					    <span class="btn-dot"></span>
            					    <span class="btn-dot"></span>
            					    <span class="btn-dot"></span>
            					    <span class="btn-dot"></span>
            					</a>
            				</div>
            				<!-- portfolio-navigation-migrate -->
            	        </div>
            	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right text-right">
            	            <?php
                			$next_post = get_next_post();
                			if ( is_a( $next_post, 'WP_Post' ) ) {
                				?>
                				<!-- portfolio-navigation-next -->
                				<div class="portfolio-navigation-next pull-right">
                					<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>">
                					    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="29" viewBox="0 0 7 29"><path fill="none" d="M7 25l-3 3H3l-3-3M3.5 0v29"></path></svg>
                				    </a>
                				</div>
                				<!-- portfolio-navigation-next -->
                			<?php } ?>
            	        </div>
            	        <div class="clearfix"></div>
            		</div>
            		<!-- portfolio-navigation -->
            		<!-- END OF STYLE ONE -->
        		<?php elseif ( 'two' === dizy_global_var( 'portfolio_single_navigation_style', '', false ) ) : ?>
        		    <!-- START OF STYLE TWO -->
        		    <!-- portfolio-navigation -->
            		<div class="row portfolio-navigation style-two">
            		    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-left text-left">
            		        <?php
                			$prev_post = get_previous_post();
                			if ( is_a( $prev_post, 'WP_Post' ) ) {
                				?>
                				<!-- portfolio-navigation-previous -->
                				<div class="portfolio-navigation-previous">
                					<a class="btn" href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><span class="btn-line"></span><?php echo esc_attr__('Prev', 'dizy'); ?></a>
                				</div>
                				<!-- portfolio-navigation-previous -->
                			<?php } ?>
            	        </div>
            	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
            	            <!-- portfolio-navigation-migrate  -->
            				<div class="portfolio-navigation-migrate">
            					<a class="btn" href="<?php echo esc_url( dizy_global_var( 'portfolio_single_navigation_button_link', '', false ) ); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo esc_attr__('Back To Portfolio', 'dizy'); ?>">
            					    <span class="btn-dot"></span>
            					    <span class="btn-dot"></span>
            					    <span class="btn-dot"></span>
            					    <span class="btn-dot"></span>
            					</a>
            				</div>
            				<!-- portfolio-navigation-migrate -->
            	        </div>
            	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pull-right text-right">
            	            <?php
                			$next_post = get_next_post();
                			if ( is_a( $next_post, 'WP_Post' ) ) {
                				?>
                				<!-- portfolio-navigation-next -->
                				<div class="portfolio-navigation-next pull-right">
                					<a class="btn" href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo esc_attr__('Next', 'dizy'); ?><span class="btn-line"></span></a>
                				</div>
                				<!-- portfolio-navigation-next -->
                			<?php } ?>
            	        </div>
            	        <div class="clearfix"></div>
            		</div>
            		<!-- portfolio-navigation -->
            		<!-- END OF STYLE TWO -->
        		<?php endif; ?>
    		</div>
		</div>
		<!-- wraper-portfolio-navigation -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
