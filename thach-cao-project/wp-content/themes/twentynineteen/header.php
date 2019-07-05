<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
$base_path = get_template_directory_uri();
?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->


<!-- Mirrored from corpthemes.com/html/autora/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jun 2019 13:03:00 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Autora - Construction Business HTMl Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_path ?>/style.css">

    <!-- Colors -->
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo $base_path ?>/assets/css/colors/color1.css" id="colors"> -->

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?php echo $base_path ?>/assets/icon/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $base_path ?>/assets/icon/apple-touch-icon-158-precomposed.png">

    <!--[if lt IE 9]>
        <script src="javascript/html5shiv.js"></script>
        <script src="javascript/respond.min.js"></script>
    <![endif]-->

</head>

<body class="header-fixed page no-sidebar header-style-2 topbar-style-2 menu-has-search">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">
        <!-- Header Wrap -->
        <div id="site-header-wrap">
            <!-- Top Bar -->        
            <!-- <div id="top-bar">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">
                        <div class="top-bar-content">
                            <div class="inner">
                                <span class="address content">4946 Marmora Road, Central New</span>
                                <span class="phone content">+61 3 8376 6284</span>
                                <span class="time content">Mon-Sat: 8am - 6pm</span>
                            </div>                            
                        </div>

                        <div class="top-bar-socials">
                            <div class="inner">
                                <span class="text">Follow us:</span>
                                <span class="icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div> -->
            <!-- /#top-bar -->

            <!-- Header -->
            <header id="site-header">
                <div id="site-header-inner" class="container">                    
                    <div class="wrap-inner clearfix">
                        <div id="site-logo" class="clearfix">
                            <div id="site-log-inner">
                                <a href="home.html" rel="home" class="main-logo">
                                    <img src="<?php echo $base_path ?>/assets/img/logo-small.png" alt="Autora" width="186" height="39" data-retina="assets/img/logo-small@2x.png" data-width="186" data-height="39">
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button">
                            <span></span>
                        </div><!-- /.mobile-button -->

                        <nav id="main-nav" class="main-nav">
                            <ul id="menu-primary-menu" class="menu">
                                <li class="menu-item menu-item-has-children current-menu-item">
                                    <a href="home.html">HOME</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-item"><a href="home.html">HOME 1</a></li>
                                        <li class="menu-item"><a href="home-2.html">HOME 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="page-about.html">ABOUT US </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="page-about.html">ABOUT US</a></li>
                                        <li class="menu-item"><a href="page-about-detail.html">ABOUT DETAIL</a></li>
                                        <li class="menu-item"><a href="page-about-team.html">ABOUT TEAM</a></li>
                                        <li class="menu-item"><a href="page-about-careers.html">ABOUT CAREERS</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="page-services.html">SERVICES</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="page-services.html">SERVICES</a></li>
                                        <li class="menu-item"><a href="page-services-detail.html">SERVICES DETAIL</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="page-projects.html">PROJECTS</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="page-projects.html">PROJECTS</a></li>
                                        <li class="menu-item"><a href="page-projects-full.html">PROJECTS FULL WIDTH</a></li>
                                        <li class="menu-item"><a href="page-project-detail.html">PROJECTS DETAIL</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children" >
                                    <a href="page-testimonial.html">PAGE</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="page-testimonial.html">PAGE TESTIMONIAL</a></li>
                                        <li class="menu-item"><a href="page-pricing.html">PAGE PRICING</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="page-blog.html">BLOG</a>
                                    <ul class="sub-menu right-sub-menu">
                                        <li class="menu-item"><a href="page-blog.html">BLOG</a></li>
                                        <li class="menu-item"><a href="page-blog-single.html">BLOG SINGLE</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="page-contact.html">CONTACT</a>
                                    <ul class="sub-menu right-sub-menu">
                                        <li class="menu-item"><a href="page-contact.html">CONTACT 1</a></li>
                                        <li class="menu-item"><a href="page-contact-2.html">CONTACT 2</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav><!-- /#main-nav -->

                        <div id="header-search">
                            <a href="#" class="header-search-icon">
                                <span class="search-icon fa fa-search">
                                </span>
                            </a>

                            <form role="search" method="get" class="header-search-form" action="#">
                                <label class="screen-reader-text">Search for:</label>
                                <input type="text" value="" name="s" class="header-search-field" placeholder="Search...">
                                <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- /#header-search -->
                    </div><!-- /.wrap-inner -->                    
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- #site-header-wrap -->

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
