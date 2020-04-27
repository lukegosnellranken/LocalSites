<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package dizy
 */

if ( ! function_exists( 'dizy_global_var' ) ) {
	/**
	 * [dizy_global_var description]
	 *
	 * @param  [type] $dizy_opt_one   description.
	 * @param  [type] $dizy_opt_two   description.
	 * @param  [type] $dizy_opt_check description.
	 * @return [type]                          description
	 */
	function dizy_global_var(
		$dizy_opt_one,
		$dizy_opt_two,
		$dizy_opt_check
	) {
		global $dizy_theme_option;
		if ( $dizy_opt_check ) {
			if ( isset( $dizy_theme_option[ $dizy_opt_one ][ $dizy_opt_two ] ) ) {
				return $dizy_theme_option[ $dizy_opt_one ][ $dizy_opt_two ];
			}
		} else {
			if ( isset( $dizy_theme_option[ $dizy_opt_one ] ) ) {
				return $dizy_theme_option[ $dizy_opt_one ];
			}
		}
	}
}



if ( ! function_exists( 'dizy_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function dizy_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
		}

		$time_string          = sprintf(
			$time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() ),
			esc_attr( get_the_modified_date( 'c' ) ),
			esc_html( get_the_modified_date() )
		);
		$author_image = sprintf(
			get_avatar( get_the_author_meta('email'), '150' )
		);

		$byline = sprintf(
			/* translators: %s: post author. */
			esc_html_x( '%s', 'post author', 'dizy' ),
			'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
		);

		$published_on = sprintf(
			/* translators: %s: post date. */
			//esc_html_x( 'Published On - %s', 'post date', 'dizy' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);

				printf(
					wp_kses_post(
						'<div class="holder">
                            <div class="author-image hidden">' . $author_image . '</div>
                                <div class="data">
                                    <div class="meta">'
					)
				);

		// Hide category and tag text for pages.
		if ( 'post' === get_post_type() ) {
			/* translators: used between list items, there is a space after the comma */
			if ( true == dizy_global_var( 'display_categries', '', false ) ) :
			$categories_list = get_the_category_list( esc_html__( ', ', 'dizy' ) );
			if ( $categories_list && dizy_categorized_blog() ) {
				printf(
					wp_kses_post( '<span class="category">' ) .
					/* translators: used between list items, there is a space after the comma */
					esc_html( ' %1$s' ) .
					wp_kses_post( '</span>' ),
					wp_kses_post( $categories_list )
				);
			}
		   endif;
		}
		
		if ( ! is_single() ) {
			/* translators: used between list items, there is a space after the comma */
			if ( true == dizy_global_var( 'display_tags', '', false ) ) :
			$tags_list = get_the_tag_list( '', esc_html__( ', ', 'dizy' ) );
			if ( $tags_list ) {
				printf(
					wp_kses_post( '<span class="tags-links">' ) .
					/* translators: used between list items, there is a space after the comma */
					esc_html__( 'Tags: %1$s', 'dizy' ) .
					wp_kses_post( '</span>' ),
					wp_kses_post( $tags_list )
				); // WPCS: XSS OK.
			}
		    endif;
		}
		
		            printf(
    					wp_kses_post(
    						'<span class="byline">' . $byline . '</span>
    						<span class="published-on">' . $published_on . '</span>'
    					)
    				);
		
					// <li class="category"><i class="fa fa-th-large"></i> ' . $fromcategory . '</li>
				echo ' </div>
			</div>
		</div>';

	}
endif;
function dizy_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'dizy_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'dizy_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so dizy_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so dizy_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in dizy_categorized_blog.
 */
function dizy_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'dizy_categories' );
}
add_action( 'edit_category', 'dizy_category_transient_flusher' );
add_action( 'save_post', 'dizy_category_transient_flusher' );
