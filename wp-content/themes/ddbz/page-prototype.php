<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ddbz
 */
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/warenhaus-typenhebel" type="text/css"/>
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <title>Diez Design Build</title>
  <?php wp_head(); ?>
</head>
<body class="proto">
<header>
  <a href="/" class="logo">
  <img class="ddbz" src="<?php echo get_template_directory_uri() ?>/images/ddbz.png">
  <img class="dZ" src="<?php echo get_template_directory_uri() ?>/images/dZ.png"></a>
  <div class="menu-menu-1-container">
    <ul id="menu-menu-1" class="menu">
      <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="#diez">Diez</a></li>
      <li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a href="#design">Design</a></li>
      <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="#build">Build</a></li>
    </ul></div>
</header>

    <section class="proto-content">

    <?php
    while ( have_posts() ) :
      the_post();

      get_template_part( 'template-parts/content', 'page' );

      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
        comments_template();
      endif;

    endwhile; // End of the loop.
    ?>

    <!-- Ty Play -->
    <div class="play-block">
      <h2 class="play-title playLeft"><span>ty</span>
      allan
      jackson</h2>
      <div class="tyStage">
      <img src="/wp-content/uploads/tystage.png">
      </div>
    </div>
    <h2 class="play-title playLeft"><span>as seen on</span>
    disney+</h2>

    </section>
</body>
<?php
get_footer();
