<?php 
 //add nav menu
 function liquorhut_config(){ 
    register_nav_menus( 
       array(
           "Main-navbar" => "Main Navbar",
          'footer-useful-links' => 'Footer Useful Links',
          'footer-category' => 'Footer Category', 
          'footer-account-links' => 'Footer My Account'

       )
       );  

       add_theme_support( "title-tag");
       
         add_post_type_support( "gd_list", "thumbnail" );      
  }
 
  add_action("after_setup_theme", "liquorhut_config", 0);
?>