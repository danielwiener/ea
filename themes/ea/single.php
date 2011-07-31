<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage EA
 * @since EA 1.0
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

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				   

					<?php get_template_part( 'content', 'single' ); ?>
					<table width="100%" border="0" cellspacing="0" cellpadding="2">
						<tr><td align="center"><img src="/monogram/assets/pattern3.gif" width="36" height="15" /></td></tr>
						</table> 
					 
							<span class="nav-previous"><?php previous_post_link( '%link', __( '&larr; %title', 'twentyeleven' ) ); ?></span>
						    <span class="nav-next"><?php next_post_link( '%link', __( '%title &rarr;', 'twentyeleven' ) ); ?></span>
					   
						

					<?php twentyeleven_content_nav( 'nav-below' ); ?>



				<?php endwhile; // end of the loop. ?>
         		 


					</td></tr>
					</table>
					</td><td bgcolor="#CCCC99"><img src="/global/s.gif" width="1" height="300" /></td><td valign="top"><div id="side_list"><h3><a href="/members/">Monogram Club<br>Members Login</a></h3></div><div id="nav">
					<?php
					include('php_stuff/monogram_verticalmenu.php');
					?></p></div></td><td bgcolor="#FFFFFF"><img src="/global/s.gif" width="1" height="300" /></td></tr>

<?php get_footer(); ?>