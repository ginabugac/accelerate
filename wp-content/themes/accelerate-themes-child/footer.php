<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */
?>

		<div><!--main page-->


		<footer id="colophon" class="site-footer" role="contentinfo">

			<div class="site-info">
			

				

<?php green_accelerate_footer(); ?>

<p class="footer-desc"><span class="main-color"><?php bloginfo( 'name' ); ?></span> <?php bloginfo('description');?>
	
				
            



			<nav class="social-media-navigation" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'social-media', 'menu_class' => 'social-media-menu' ) ); ?>
			</nav>
			
 

			</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</div><!-- #page -->
	
	


 



