<!DOCTYPE HTML">
<html>
<head>

<title>Embroidery Arts | Special Offers Exclusively For Newsletter Subscribers	</title>

<?php
include('templates/meta_tag.tmpl');
?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<?php
include('templates/meta_link_script.tmpl');
?>
<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet" type="text/css">  
<?php
	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>
<?php
include('templates/body_tag.tmpl');
include('php_stuff/config.php');
?>
<script language="JavaScript1.2">mmLoadMenus();</script>
<?php
include('templates/monogram_menu.tmpl');
include('templates/horizontal_white.tmpl');
include('templates/view_each_letter.tmpl');
include('templates/horizontal_white.tmpl');?>