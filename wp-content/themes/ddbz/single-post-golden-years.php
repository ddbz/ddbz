<?php
/**
 * The template for Post - Lifecycles
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ddbz
 */

 /* - Pulling for custom papaRico replacement for DiezDesignBuildz
 * get_header();
 */
?>

  <!doctype html>
  <html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/warenhaus-typenhebel" type="text/css"/> -->
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header id="masthead" class="site-header">
      <a href="/" class="logo">
      <img class="ddbz" src="<?php echo get_template_directory_uri() ?>/images/ddBz.2.png">
      <img class="dZ" src="<?php echo get_template_directory_uri() ?>/images/dZ.png"></a>
      <div class="menu-menu-1-container">
        <a href="/papaRico"><span class="pR-title sweed">papaRico</span></a>
        <!-- Taking down till I build out the individual pages
        <img class="title" src="<?php echo get_template_directory_uri() ?>/images/diezDesignBuildz.png">
        <span>diezDesignBuildZ</span>
        <ul id="menu-menu-1" class="menu">
          <li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43"><a href="/#diez">Diez</a></li>
          <li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45"><a href="/#design">Design</a></li>
          <li id="menu-item-44" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44"><a href="/#build">Build</a></li>
        </ul></div>
        -->
    </header><!-- #masthead -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
    ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header subtitle golden">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title sweed">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
      <h3 class="byline">7 17</h3>
			<div class="entry-meta">
				<?php
				ddbz_posted_on();
				?>
				<!-- ^ ddbz_posted_by() - Pretty it up later -->
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php ddbz_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ddbz' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ddbz' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ddbz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

		<?php
			// get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation(); - Comment out till it's pretty

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
