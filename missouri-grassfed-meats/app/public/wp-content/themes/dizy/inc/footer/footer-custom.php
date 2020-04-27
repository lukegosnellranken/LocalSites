<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dizy
 */
?>

			</div>
			<!-- #content -->
		</div>
		<!-- #page -->

		<?php
$footerBuilder_id = dizy_global_var('footer_list_text', '', false);
$getFooterPost = get_post($footerBuilder_id);
$content = $getFooterPost->post_content;
echo "<!-- wraper_footer -->";
echo "<footer class='wraper_footer custom-footer'>";
echo "<div class='container'>";
echo do_shortcode($content);
echo "</footer>";
echo "<!-- wraper_footer -->";
?>

	</div>
	<!-- radiantthemes-website-layout -->

<?php wp_footer(); ?>

</body>
</html>
