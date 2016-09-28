<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blaire
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Start of top header section -->
    <div class="topbar">
        <div  class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="topbar-text">
                        <p> Welcome Customer, You can <span style="color:#F94A4A">Login </span>or <span style="color:#F94A4A">Create an Account</span></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-5">
                    <div class="header-top-menu">
                        <nav>
                            <ul class="topbar-ul list-unstyled list-inline">
                               <li>
                                    <a href="#" class="england">English &#9662;</a>
                                    <ul class="dropdown">
                                        <li><a class="spain" href="#">Spanish</a></li>
                                        <li><a class="french" href="#">French</a></li>
                                    </ul>
                                </li>

                                 <li>
                                    <a href="#">Currency: $ USD &#9662;</a>
                                    <ul class="dropdown">
                                        <li><a href="#">$ CAD</a></li>
                                        <li><a href="#">€ EUR</a></li>
                                    </ul>
                                </li>

                                <li><a href="#"><i class="fa fa-user"></i><span>Account</span></a>
                                    <ul class="dropdown">
                                        <li><a href="#"><i class="fa fa-user-plus"></i><span>My Account</span></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i><span>My WishList</span></a></li>
                                        <li><a href="#"><i  class="fa fa-share-square-o"></i><span>Check Out</span></a></li>
                                        <li><a href="#"><i  class="fa fa-unlock-alt"></i><span>Login</span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of top header section -->

    <!-- start of menu section -->
    <div class="menu-wrapper">
        <div class="container">
            <div class="row">
                <div class="menu-container">
                    <div class="menu">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="http://marioloncarek.com">About</a>
                                <ul>
                                    <li><a href="http://marioloncarek.com">School</a>
                                        <ul>
                                            <li><a href="http://marioloncarek.com">Lidership</a></li>
                                            <li><a href="#">History</a></li>
                                            <li><a href="#">Locations</a></li>
                                            <li><a href="#">Careers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Study</a>
                                        <ul>
                                            <li><a href="#">Undergraduate</a></li>
                                            <li><a href="#">Masters</a></li>
                                            <li><a href="#">International</a></li>
                                            <li><a href="#">Online</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Research</a>
                                        <ul>
                                            <li><a href="#">Undergraduate research</a></li>
                                            <li><a href="#">Masters research</a></li>
                                            <li><a href="#">Funding</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Something</a>
                                        <ul>
                                            <li><a href="#">Sub something</a></li>
                                            <li><a href="#">Sub something</a></li>
                                            <li><a href="#">Sub something</a></li>
                                            <li><a href="#">Sub something</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="http://marioloncarek.com">News</a>
                                <ul>
                                    <li><a href="http://marioloncarek.com">Today</a></li>
                                    <li><a href="#">Calendar</a></li>
                                    <li><a href="#">Sport</a></li>
                                </ul>
                            </li>
                            <li><a href="http://marioloncarek.com">Contact</a>
                                <ul>
                                    <li><a href="#">School</a>
                                        <ul>
                                            <li><a href="#">Lidership</a></li>
                                            <li><a href="#">History</a></li>
                                            <li><a href="#">Locations</a></li>
                                            <li><a href="#">Careers</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Study</a>
                                        <ul>
                                            <li><a href="#">Undergraduate</a></li>
                                            <li><a href="#">Masters</a></li>
                                            <li><a href="#">International</a></li>
                                            <li><a href="#">Online</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Study</a>
                                        <ul>
                                            <li><a href="#">Undergraduate</a></li>
                                            <li><a href="#">Masters</a></li>
                                            <li><a href="#">International</a></li>
                                            <li><a href="#">Online</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Empty sub</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End of menu section -->

    <!-- Start of banner section -->
    <div class="slider-banner-sec">
        <div class="banner-slider-wrap">
            <div class="banner-slider-item" style="background-image: url(<?php echo get_template_directory_uri() . '/images/slider1.jpg' ?>)">
            </div>
            <div class="banner-slider-item" style="background-image: url(<?php echo get_template_directory_uri() . '/images/slider2.jpg' ?>)">
            </div>
        </div>
    </div>

    <div class="banner-home">
        <div class="row">
            <div class="col-md-4 col-xs-12 col-sm-12 nopad">
                <div class="banner-box">
                    <img class="box-content-img"  src="<?php echo get_template_directory_uri() . '/images/slide3.jpg' ?>">
                    <div class="caption">
                        <h2>Womens Fashion Collection</h2>
                        <button class="btn bbtn-def">Shop Now</button>
                     </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 col-sm-12 nopad">
                <div class="banner-box">
                    <img class="box-content-img"  src="<?php echo get_template_directory_uri() . '/images/slide3.jpg' ?>">
                    <div class="caption">
                        <h2>Womens Fashion Collection</h2>
                        <button class="btn bbtn-def">Shop Now</button>
                     </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12 col-sm-12 nopad">
                <div class="banner-box">
                    <img class="box-content-img"  src="<?php echo get_template_directory_uri() . '/images/sidebox1.jpg' ?>">
                    <div class="caption">
                        <h2>Womens Fashion Collection</h2>
                        <button class="btn bbtn-def">Shop Now</button>
                     </div>
                </div>
            </div>
        </div>
    </div>