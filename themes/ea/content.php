<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
     <?php global $i; ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<h2 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h2>
				</hgroup>
			<?php else : ?>  
				<?php if ($i == 1): ?>
			   <h2>This Month's Offer</h2> 
				<table width="100%" border="0" cellspacing="0" cellpadding="2">
				<tr><td align="center"><img src="/monogram/assets/pattern3.gif" width="36" height="15" /></td></tr>
				</table>
				<?php elseif ( $i == 2 ): ?>
					<h2>Previous Offers</h2> 
						<table width="100%" border="0" cellspacing="0" cellpadding="2">
						<tr><td align="center"><img src="/monogram/assets/pattern3.gif" width="36" height="15" /></td></tr>
						</table>	
				<?php endif ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?> - <?php the_date( 'F Y' ) ?></a></h2>
			<?php endif; ?>

			<?php if ( 'post' == $post->post_type ) : ?>
			<div class="entry-meta">
				<?php
					// printf( __( '<span class="sep">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="sep"> by </span> <span class="author vcard"><a class="url fn n" href="%4$s" title="%5$s">%6$s</a></span>', 'twentyeleven' ),
					// 						get_permalink(),
					// 						get_the_date( 'c' ),
					// 						get_the_date(),
					// 						get_author_posts_url( get_the_author_meta( 'ID' ) ),
					// 						sprintf( esc_attr__( 'View all posts by %s', 'twentyeleven' ), get_the_author() ),
					// 						get_the_author()
					// 					);                   
				?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">  
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( '<span>Pages:</span>', 'twentyeleven' ), 'after' => '</div>' ) );
			 ?>  
		</div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			
		</footer><!-- #entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
