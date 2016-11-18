<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oneoheight
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Radha Govinda Temple</title>

<!-- Bootstrap Core CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<!-- Sidebar CSS -->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/simple-sidebar.css" rel="stylesheet">

<?php wp_head(); ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body <?php body_class(); ?>>

		

 <div id="wrapper">
	
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <li><img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/sp-book-holding.png" alt="iskcon-logo" height="65%" width="65%"></li>
           <!-- <ul class="sidebar-nav">
                
                <li class="sidebar-brand"><a href="home">Home</a></li>
                <li><a href="history">History</a></li>
                <li><a href="controversy">The Controversy</a></li>
                <li><a href="srila-prabhupada-said">Srila Prabhupada Said</a></li>    
                <li><a href="what-you-can-do">What you can do</a></li>                    
            </ul> -->
            
            <?php /* Primary navigation */
		wp_nav_menu( array(
  		'menu' => 'primary',
  		'depth' => 2,
  		'container' => 'div',
  		'container_id' => 'sidebar-wrapper', 
  		'menu_class' => 'nav navbar-nav sidebar-nav'
  		//Process nav menu using our custom nav walker
  		//'walker' => new wp_bootstrap_navwalker()
  		));
		?>    
		</div>

        <!-- /#sidebar-wrapper -->
        
    <div id="tag-line" class="col-sm-12">
        <div class="post-image">
        <img src="<?php bloginfo('stylesheet_directory') ?>/assets/img/BrooklynKrsna3.png" alt="krishna brooklyn" >
        </div> 
        <h2 class="tag-line">Sell Books Not Temples</h2>
    </div><!-- Headline -->


	
	<div id="content" class="site-content"></div>
