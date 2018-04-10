<?php
/**
 * The template for displaying 404 pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
 <header class="page-header">
				<h1 class="page-title"><?php _e( 'Not Found' ); ?></h1>
			</header>           <div class="page-wrapper">
				<div class="page-content">
					<h2><?php _e( 'Oops! Looks like there is nothing here. ' ); ?></h2>
					<p><?php _e( "You can just contact us!" ); ?></p>

				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

            
			
<div class ="about-contact">
<h4><?php echo get_field('about_page_contact') ?> </h4>
      <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us <?php echo get_field('button') ?> </a>
        
            

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
