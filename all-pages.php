<?php /**
 * Plugin Name: Add Pages to "All Pages"
 * Description: Creates a sub-menu under "All Pages" in Admin with current site's pages
 * Author: Colin Devroe
 * Author URI: http://cdevroe.com/
 * Version: 1.0.0
*/

// Add Menu item in navigation
function cdevroe_all_pages_navigation(){
  $pages = get_pages(array('post_status'=>'publish'));
  foreach ($pages as $page_data) {
    add_submenu_page( 'edit.php?post_type=page', 'post.php?post='.$page_data->ID.'&action=edit', '- '.$page_data->post_title, 'manage_options', $page_data->ID, function(){} );
  }
}
add_action( 'admin_menu', 'cdevroe_all_pages_navigation' );

function cdevroe_all_pages_admin_scripts(){
  wp_enqueue_script( 'cdevroe-all-pages-js', plugins_url() . '/all-pages/all-pages.js' );
}
add_action( 'admin_enqueue_scripts', 'cdevroe_all_pages_admin_scripts' );
