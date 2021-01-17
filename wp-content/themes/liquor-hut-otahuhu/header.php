<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
 

    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

				
</head>

<body <?php body_class( );?> data-archive='<?php echo $archive ?>'>
 

<!-- LOADER -->
<div class="preloader">
    <div class="lds-ellipsis">
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<!-- END LOADER -->

<!-- Home Popup Section
<div class="modal fade subscribe_popup" id="onload-popup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="ion-ios-close-empty"></i></span>
                </button>
                <div class="row no-gutters">
                    <div class="col-sm-5">
                        <div class="background_bg h-100" data-img-src="assets/images/popup_img.jpg"></div>
                    </div>
                    <div class="col-sm-7">
                        <div class="popup_content">
                            <div class="popup-text">
                                <div class="heading_s1">
                                    <h4>Subscribe and Get 25% Discount!</h4>
                                </div>
                                <p>Subscribe to the newsletter to receive updates about new products.</p>
                            </div>
                            <form method="post">
                                <div class="form-group">
                                    <input name="email" required type="email" class="form-control rounded-0" placeholder="Enter Your Email">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-fill-line btn-block text-uppercase rounded-0" title="Subscribe" type="submit">Subscribe</button>
                                </div>
                            </form>
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox3" value="">
                                    <label class="form-check-label" for="exampleCheckbox3"><span>Don't show this popup again!</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End Screen Load Popup Section --> 

<!-- START HEADER -->
<header class="header_wrap fixed-top header_with_topbar">
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                       <!-- <div class="lng_dropdown mr-2">
                            <select name="countries" class="custome_select">
                                <option value='en' data-image="assets/images/eng.png" data-title="English">English</option>
                                <option value='fn' data-image="assets/images/fn.png" data-title="France">France</option>
                                <option value='us' data-image="assets/images/us.png" data-title="United States">United States</option>
                            </select> 
                        </div>
                        <div class="mr-3">
                            <select name="countries" class="custome_select">
                                <option value='USD' data-title="USD">USD</option>
                                <option value='EUR' data-title="EUR">EUR</option>
                                <option value='GBR' data-title="GBR">GBR</option>
                            </select>
                        </div>
                        <ul class="contact_detail text-center text-lg-left">
                            <li><i class="ti-mobile"></i><span>123-456-7890</span></li>
                        </ul>
                        -->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center text-md-right">
                        <ul class="header_list small-navbar">
                        <?php 

                                                $argsLocation = array(
                                                    'post_type' => 'contact_details',
                                                    'posts_per_page' => 1,
                                                    'post_status' => 'publish',
                                                    
                                                );
                                                $contact = new WP_Query( $argsLocation );
                                                while($contact->have_posts()){
                                                    $contact->the_post();
                                                    ?>
                                           
                            
                           <!-- <li><a href="compare.html"><i class="ti-control-shuffle"></i><span>Compare</span></a></li> -->
                           <li><a href="#" class="change-store-btn"><i class="fal fa-map-marker-alt"></i><span><?php echo get_field('location_'); ?></span></a></li>
                            <?php 
                                                }
                                                wp_reset_postdata();

                            ?>    
                           <!-- <li><a href="compare.html"><i class="ti-control-shuffle"></i><span>Compare</span></a></li> -->
                            <li><a href="<?php echo get_site_url(); ?>/wish-list"><i class="fal fa-heart"></i><span>Wishlist</span></a></li>
                            <?php 
                                if(is_user_logged_in()){
                                    ?>
                                        <!--<li><a href="<?php //echo get_site_url(); ?>/my-account"><i class="fad fa-user"></i><span>My Account</span></a></li>
                                -->
                                    <?php
                                }
                                else{
                                    ?>
                                    <!--
                                     <li><a href="<?php //echo get_site_url(); ?>/my-account"><i class="ti-user"></i><span>Login</span></a></li>
                                -->
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_header dark_skin main_menu_uppercase">
        <div class="container">
            <nav class="main-navbar-container"> 
                <a class="navbar-brand" href="/">
                    <img class="logo_light" src="<?php echo get_site_url();?>/wp-content/uploads/2020/12/LH-logo-landscape-1.png" alt="logo" />
                    <img class="logo_dark" src="<?php echo get_site_url();?>/wp-content/uploads/2020/12/LH-logo-landscape-1.png" alt="logo" />
                </a>
                
                <div id="main-navbar">
                    <?php 
                            wp_nav_menu( array(
                              'theme_location' => 'Main-navbar'
                            ) )
                          ?>
                 
                </div>
                <ul class="navbar-nav attr-nav align-items-center">
                    <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="fal fa-search"></i></a>
                        <div class="search_wrap">
                            <span class="close-search"><i class="fal fa-times"></i></span>
                            <?php echo do_shortcode('[ivory-search id="560" title="Default Search Form"]'); ?>
                        </div><div class="search_overlay"></div>
                    </li>
                    <!-- cart items 
                    <li class="dropdown cart_dropdown"><a class="nav-link cart_trigger" href="#" data-toggle="dropdown"><i class="linearicons-cart"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="<?php  echo get_theme_file_uri();?>/assets/images/cart_thamb1.jpg" alt="cart_thumb1">Variable product 001</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>78.00</span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="<?php  echo get_theme_file_uri();?>/assets/images/cart_thamb2.jpg" alt="cart_thumb2">Ornare sed consequat</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span></span>81.00</span>
                                </li>
                            </ul>
                            <div class="cart_footer">
                                <p class="cart_total"><strong>Subtotal:</strong> <span class="cart_price"> <span class="price_symbole">$</span></span>159.00</p>
                                <p class="cart_buttons"><a href="#" class="btn btn-fill-line rounded-0 view-cart">View Cart</a><a href="#" class="btn btn-fill-out rounded-0 checkout">Checkout</a></p>
                            </div>
                        </div>
                    </li>
                            -->
                </ul>
            </nav>
        </div>
    </div>
</header>
<!-- END HEADER -->
