<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">

		         <?php $args = array(
					'showposts'		=> -1, 
					'post_type'		=> 'page',
					'post_status'	=> 'private'		
					); ?>
		         

				<aside id="archives" class="widget">
					<h1 class="widget-title"><?php _e( 'Instructions', 'twentyeleven' ); ?></h1>
					<ul>
					 	<?php
						$recent = new WP_Query($args);
							while($recent->have_posts()) : $recent->the_post();?>
								<li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
							 <?php endwhile; ?>
					</ul>
				</aside>

		</div><!-- #secondary .widget-area -->
