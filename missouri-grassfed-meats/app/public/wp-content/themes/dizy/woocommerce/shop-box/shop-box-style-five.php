<?php
/**
 * Shop Box Style Five Template
 *
 * @package dizy
 */

?>

<!-- radiantthemes-shop-box style-five -->
<div <?php post_class( 'radiantthemes-shop-box matchHeight style-five' ); ?>>
	<div class="holder">
		<?php if ( $product->is_on_sale() ) { ?>
			<?php echo wp_kses_post( apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'dizy' ) . '</span>', $post, $product ) ); ?>
		<?php } ?>
		<div class="pic">
			<img src="<?php echo esc_url( get_parent_theme_file_uri( '/assets/images/blank/Blank-Image-100x95.png' ) ); ?>" alt="<?php echo esc_attr__( 'Blank Image', 'dizy' ); ?>" width="100" height="95">
			<div class="product-image" style="background-image:url(<?php esc_url( the_post_thumbnail_url( 'large' ) ); ?>)"></div>
			<a class="overlay" href="<?php the_permalink(); ?>"></a>
		</div>
		<div class="data">
			<?php
			/**
			 * Woocommerce Before Shop Loop Item hook.
			 * woocommerce_before_shop_loop_item hook.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item' );
			?>
			<?php
			/**
			 * Woocommerce Shop Loop Item Title hook.
			 * woocommerce_shop_loop_item_title hook.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			do_action( 'woocommerce_shop_loop_item_title' );
			?>
			</a>
			<?php
			/**
			 * Woocommerce After Shop Loop Item Title hook.
			 * woocommerce_after_shop_loop_item_title hook.
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );
			?>
			<div class="action-buttons">
				<?php
				/**
				 * Woocommerce After Shop Loop Item hook.
				 * woocommerce_after_shop_loop_item hook.
				 *
				 * @hooked woocommerce_template_loop_product_link_close - 5
				 * @hooked woocommerce_template_loop_add_to_cart - 10
				 */
				do_action( 'woocommerce_after_shop_loop_item' );
				?>
			</div>
		</div>
	</div>
</div>
<!-- radiantthemes-shop-box style-one -->
