<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package dizy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'style-default' ); ?>>
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'full' ); ?></a>
		</div><!-- .post-thumbnail -->
	<?php } ?>
	<div class="entry-meta">
		<?php dizy_posted_on(); ?>
	</div><!-- .entry-meta -->
	<header class="entry-header">
		<?php the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-main">
		<div class="entry-content">
			<?php echo wp_kses_post( substr( wp_strip_all_tags( get_the_excerpt() ), 0, 300 ) . '...' ); ?>
		</div><!-- .entry-content -->
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="post-read-more">
					<a class="btn" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'Read More', 'dizy' ); ?> <i class="fa fa-angle-right"></i></span></a>
				</div><!-- .post-read-more -->
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<?php
				if( dizy_global_var( 'display_social_sharing', '', false ) ) {
				?>  	
					<div class="post-share">
						<p class="post-share-title"><?php esc_html_e( 'Share', 'dizy' ); ?></p>
						<ul class="post-share-buttons">
							<?php if ( wp_is_mobile() ) { ?>
								<li><a href="https://api.whatsapp.com/send?&text=<?php the_title(); ?> : <?php the_permalink(); ?>" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php esc_attr_e( 'Share on WhatsApp', 'dizy' ); ?>"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
							<?php } ?>
							<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php esc_attr_e( 'Share on Facebook', 'dizy' ); ?>"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php esc_attr_e( 'Share on Google+', 'dizy' ); ?>"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="http://twitter.com/share?text=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php esc_attr_e( 'Share on Twitter', 'dizy' ); ?>"><i class="fa fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>&amp;summary=&amp;source=" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php esc_attr_e( 'Share on LinkedIn', 'dizy' ); ?>"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php the_post_thumbnail_url( 'full' ); ?>&amp;description=<?php the_title(); ?>" target="_blank" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php esc_attr_e( 'Share on Pinterest', 'dizy' ); ?>"><i class="fa fa-pinterest-p"></i></a></li>
						</ul>
					</div><!-- .post-share -->
				<?php 
				} 
				?>
			</div>
		</div>
	</div><!-- .entry-main -->
</article><!-- #post-## -->
