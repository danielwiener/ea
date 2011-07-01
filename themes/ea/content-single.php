<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">  
		<h2>Special Offers Exclusively For Newsletter Subscribers</h2>
		<h3 class="entry-title"><?php the_title(); ?> - <?php echo get_the_date('F Y'); ?></h3>

		<div class="entry-meta"> </div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( '<span>Pages:</span>', 'twentyeleven' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
	   
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
