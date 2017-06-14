<?php
/**
 * Template Name: no-sidebar.php 
 *
 * This is the template that displays all pages without a sidebar
 */

if ( is_front_page() ) :
	get_header( 'home' );
else:
	get_header();
endif; ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template. If it's the home page, load a special template without the title
			if ( is_front_page() ) :
				get_template_part( 'notitle', 'page' );
			else:
				get_template_part( 'template-parts/content', 'page' );
			endif;

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

</div><!-- .content-area -->

<?php get_footer(); ?>
