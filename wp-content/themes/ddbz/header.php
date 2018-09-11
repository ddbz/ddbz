<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ddbz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/warenhaus-typenhebel" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header">
    <img src="<?php echo get_template_directory_uri() ?>/images/ddbz.png">
    <?php wp_nav_menu( 'Primary' ); ?>
	</header><!-- #masthead -->
