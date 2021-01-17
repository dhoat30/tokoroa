<?php 
/**
 * liquorHut functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package liquorHut

 */
require get_theme_file_path('/inc/buddypress-design-boards.php');

require get_theme_file_path('/inc/boards-route.php');
require get_theme_file_path('/inc/custom-post-type.php');

require get_theme_file_path('/inc/nav-registeration.php');


 //enqueue scripts

 function liquorHut_scripts(){ 
   wp_enqueue_script("jquery");
  // wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/f3cb7ab01f.js', NULL, '1.0', false);
   wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap", false);
   wp_enqueue_style("google-fonts2", "https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap", false);
   ;
   if (strstr($_SERVER['SERVER_NAME'], 'localhost')) {
      wp_enqueue_script('main', 'http://localhost:3000/bundled.js',  NULL, '1.0', true);
      
    } else {
      wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'),  NULL, '1.0', true);

      wp_enqueue_script('main', get_theme_file_uri('/bundled-assets/scripts.78c3768c0eacace93954.js'), NULL, '1.0', true);
      wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/styles.78c3768c0eacace93954.css'));
    }
    wp_localize_script("main", "liquorHutData", array(
      "root_url" => get_site_url(),
      "nonce" => wp_create_nonce("wp_rest")
    ));
  

  
}
add_action( "wp_enqueue_scripts", "liquorHut_scripts" ); 




  //admin bar
  if ( ! current_user_can( "manage_options" ) ) {
   show_admin_bar( false );
}
//sidebar


add_action( "widgets_init", "mat_widget_areas" );
function mat_widget_areas() {
    register_sidebar( array(
        "name" => "Theme Sidebar",
        "id" => "mat-sidebar",
        "description" => "The main sidebar shown on the right in our awesome theme",
        "before_widget" => '<li id="%1$s" class="widget %2$s">',
		"after_widget"  => "</li>",
		"before_title"  => '<h3 class="widget-title">',
		"after_title"   => "</h3>",
    ));
}



//custom post register

add_theme_support("post-thumbnails");
add_post_type_support( "boards", "thumbnail" ); 
function register_custom_type(){ 
   register_post_type("boards", array(
      "supports" => array("title", "page-attributes", 'editor'), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "labels" => array(
         "name" => "Boards", 
         "add_new_item" => "Add New Board", 
         "edit_item" => "Edit Board", 
         "all_items" => "All Boards", 
         "singular_name" => "Note"
      ), 
      "menu_icon" => "dashicons-heart"
      
   )
   ); 
}

add_action("init", "register_custom_type"); 

 //make private page parent/child
 add_filter("page_attributes_dropdown_pages_args", "my_attributes_dropdown_pages_args", 1, 1);

function my_attributes_dropdown_pages_args($dropdown_args) {

    $dropdown_args["post_status"] = array("publish","draft", "private");

    return $dropdown_args;
}


// remove "Private: " from titles
function remove_private_prefix($title) {
	$title = str_replace("Private: ", "", $title);
	return $title;
}
add_filter("the_title", "remove_private_prefix");

//facet wp
function fwp_archive_per_page( $query ) {
   if ( is_tax( 'category' ) ) {
       $query->set( 'posts_per_page', 20 );
   }
}
add_filter( 'pre_get_posts', 'fwp_archive_per_page' );


function fwp_home_custom_query( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'post_type', [ 'post', 'product' ] );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
    }
}
add_filter( 'pre_get_posts', 'fwp_home_custom_query' );

