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
get_header();
?>


    <div class="sidebar-left">
    <img class="hello phone" src="<?php echo get_template_directory_uri() ?>/images/phone.png">
    </div>
    <section class="border-LR page-contact">
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
    </section>
    <div class="sidebar-right">
    <img class="hello jargon" src="<?php echo get_template_directory_uri() ?>/images/jargon.png">
    </div>

<?php
get_footer();
