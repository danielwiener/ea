<?php
/**
 * * Template Name: Instruction Page 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
 <?php get_sidebar('instructions'); ?>
 <?php get_sidebar(); ?> 
	</div>
	</td><td bgcolor="#ffffff"><img src="/global/s.gif" width="1" height="300" /></td><td valign="top" bgcolor="#FFFFFF"> 
	<table border="0" cellspacing="0" cellpadding="7">
	<tr><td valign="top"><!-- Start entry -->

				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			</td></tr>
			</table>
			</td><td bgcolor="#CCCC99"><img src="/global/s.gif" width="1" height="300" /></td><td valign="top"><div id="side_list"><h3><a href="/members/">Monogram Club<br>Members Login</a></h3></div><div id="nav">
			<?php
			include('php_stuff/monogram_verticalmenu.php');
			?></p></div></td><td bgcolor="#FFFFFF"><img src="/global/s.gif" width="1" height="300" /></td></tr>
<?php get_footer(); ?>