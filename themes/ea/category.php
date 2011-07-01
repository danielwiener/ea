<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

				<table border="0" cellpadding="0" cellspacing="0" width="760">
					<tr> 
					<td valign="top"> 
					<div class="menu"> 

				 <?php get_sidebar(); ?>  

					<p><b>Do you have an embroidery business? Visit our companion site for professional monogrammers, <a href="http://www.wholesalemonograms.com/">WholesaleMonograms</a></b></p>
					</div>
					</td><td bgcolor="#ffffff"><img src="/global/s.gif" width="1" height="300" /></td><td valign="top" bgcolor="#FFFFFF"> 
					<table border="0" cellspacing="0" cellpadding="7">
					<tr><td valign="top"><!-- Start entry -->

				<header class="page-header">
					 <?php if (single_cat_title( '', false ) == 'Newsletter Specials'): ?>
					   <h2>Special Offers Exclusively For Newsletter Subscribers</h2> 
					<?php else: ?>
					<h2>
					<?php
						printf( __( '%s', 'twentyeleven' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h2>
					<?php endif; ?>
					<table width="100%" border="0" cellspacing="0" cellpadding="2">
						<tr><td align="center"><img src="/monogram/assets/pattern3.gif" width="36" height="15" /></td></tr>
						</table>
				</header>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php $i = 1; ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>
                  		 <table width="100%" border="0" cellspacing="0" cellpadding="2">
						<tr><td align="center"><img src="/monogram/assets/pattern3.gif" width="36" height="15" /></td></tr>
						</table>
						<?php $i++; ?>
				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			
		


			</td></tr>
			</table>
			</td><td bgcolor="#CCCC99"><img src="/global/s.gif" width="1" height="300" /></td><td valign="top"><div id="side_list"><h3><a href="/members/">Monogram Club<br>Members Login</a></h3></div><div id="nav">
			<?php
			include('php_stuff/monogram_verticalmenu.php');
			?></p></div></td><td bgcolor="#FFFFFF"><img src="/global/s.gif" width="1" height="300" /></td></tr>
<?php get_footer(); ?>