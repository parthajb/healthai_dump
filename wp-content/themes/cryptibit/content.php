<?php
/**
 * @package CryptiBIT
 */

$cryptibit_theme_options = cryptibit_get_theme_options();

$post_classes = get_post_class();

$current_post_class = $post_classes[4];

$category_html = '';

// Blog posts style
if(isset($cryptibit_theme_options['blog_post_elements_style'])) {
  $post_class_add = 'blog-post-style-'.$cryptibit_theme_options['blog_post_elements_style'];
} else {
  $post_class_add = 'blog-post-style-square';
}

$category_html = '<div class="mgt-post-categories">'.strip_tags( get_the_category_list( ', ', 0, $post->ID )).'</div>';

$post_comments = get_comments_number($post->ID);

$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'cryptibit-blog-thumb');

if(has_post_thumbnail( $post->ID )) {
	$post_has_image = true;
	$post_class_add .= ' post-has-image';
	$image_bg ='background-image: url('.$image[0].');';
}
else {
	$post_has_image = false;
	$post_class_add .= ' post-no-image';
	$image_bg = '';
}

// Sticky post
if(is_sticky($post->ID)) {
	$post_classes[] = 'sticky-post';
}
?>

<div class="content-block blog-post mgt-post clearfix <?php echo esc_attr($post_class_add); ?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>

				<div class="post-content-wrapper">
					<?php
					echo '<a href="'.get_permalink($post->ID).'"><div class="mgt-post-image" data-style="'.esc_attr($image_bg).'"><div class="mgt-post-image-wrapper">
								<div class="mgt-post-details">'.wp_kses_post($category_html).'</div><div class="mgt-post-details-bottom"><div class="mgt-post-date">
						'.get_the_time( get_option( 'date_format' ), $post->ID ).' </div><div class="mgt-post-title"><h5>'.wp_kses_post($post->post_title).'</h5></div></div>
						</div></div></a>';
					?>
					<div class="post-content">


						<!-- .entry-content -->
						<div class="entry-content">
							<?php

						    if( strpos( $post->post_content, '<!--more-->' ) ) {
						    	if(isset($cryptibit_theme_options['blog_post_exrcept']) && $cryptibit_theme_options['blog_post_exrcept']) {
						    		the_content();
						    	}
						    }
						    else {
						    	if(isset($cryptibit_theme_options['blog_post_exrcept']) && $cryptibit_theme_options['blog_post_exrcept']) {
						        	the_excerpt();
						        ?>
								<a href="<?php the_permalink(); ?>" class="btn more-link mgt-button mgt-style-borderedgrey mgt-size-small mgt-align-left mgt-display-inline mgt-text-size-normal mgt-text-transform-none"><?php esc_html_e('Read more', 'cryptibit'); ?></a>
						        <?php
						    	}
						    }

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'cryptibit' ),
								'after'  => '</div>',
							) );
							?>
						</div><!-- // .entry-content -->



					</div>

				</div>


	</article>
</div>
