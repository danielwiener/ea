<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage EA
 * @since EA 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
            <?php 
				$args = array(
			    'numberposts'     => 6,
			    'category'        => 1,
			    'orderby'         => 'post_date',
			    'order'           => 'DESC',
			    'post_type'       => 'post',
			    'post_status'     => 'publish' ); ?>
				<aside id="recent-posts" class="widget">
					<h1 class="widget-title"><?php _e( 'Specials', 'twentyeleven' ); ?></h1>
					<ul>
						<?php
					  	$dw_special_posts = get_posts( $args );
						foreach( $dw_special_posts as $post ) :	setup_postdata($post); ?>
							<li><span class="headline1"><?php the_date('F Y'); ?></span><br />
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endforeach; ?>  
					</ul>
				</aside>


			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
