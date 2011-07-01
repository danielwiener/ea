<?php
/*
Plugin Name: Remove Metaboxes
Plugin URI: http://danielwiener.com/
Description: Removing as many submenus from as many screens as possible. Post Formats, etc.
Version: 0.1
Author: Daniel Wiener
Author URI: http://danielwiener.com/
*/ 

//http://techmasher.co.cc/customizing-the-wordpress-admin-area/ 
//http://www.strangework.com/2010/03/24/how-to-hide-an-admin-menu-in-wordpress/
// http://codex.wordpress.org/Function_Reference/remove_meta_box
	
	
function dw_remove_many_meta_boxes() { 
	global $current_user;
	get_currentuserinfo();	
   	
		if($current_user->user_login != 'danielwiener') {
		
			remove_meta_box( 'postcustom' , 'post' , 'normal' );
		  //  remove_meta_box( 'commentstatusdiv' , 'post' , 'normal' );// - Comments status metabox.
		  //  remove_meta_box( 'commentsdiv' , 'post' , 'normal' );// - Comments metabox.
		    remove_meta_box( 'slugdiv' , 'post' , 'normal' );// - Slug metabox.
		    remove_meta_box( 'revisionsdiv' , 'post' , 'normal' );// - Revisions metabox.
		    remove_meta_box( 'authordiv' , 'post' , 'normal' );// - Author metabox.
		    remove_meta_box( 'postcustom' , 'post' , 'normal' );// - Custom fields metabox.
		    remove_meta_box( 'postexcerpt' , 'post' , 'normal' );// - Excerpt metabox.
		    remove_meta_box( 'trackbacksdiv' , 'post' , 'normal' );// - Trackbacks metabox.
		    remove_meta_box( 'postimagediv' , 'post' , 'side' );// - Featured image metabox.
		    remove_meta_box( 'formatdiv' , 'post' , 'side' );// - Formats metabox.
		    remove_meta_box( 'tagsdiv-post_tag' , 'post' , 'side' );// - Tags metabox.
		  //  remove_meta_box( 'categorydiv' , 'post' , 'side' );// - Categories metabox. 

		}  //if current user                                        

}  // remove meta boxes function
add_action( 'do_meta_boxes' , 'dw_remove_many_meta_boxes' );

add_action( 'admin_menu', 'my_remove_menu_pages' );


// remove links and tools menus
function my_remove_menu_pages() {
			 
	global $current_user;
	get_currentuserinfo();			
	
		if($current_user->user_login != 'danielwiener') { 
			remove_menu_page('link-manager.php');
			remove_menu_page('tools.php');
			remove_menu_page('edit-comments.php'); 
			remove_menu_page('edit.php?post_type=page');
			remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=post_tag'); 
			remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
		} //end if current user.	
} //end function


?> 

