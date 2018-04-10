<?php
/**
 * The template for displaying the About Page
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
//connected to About Page

 get_header(); ?>
 <div id="primary" class="site-content">
   <div id="content" role="main">
       <h2><?php the_title(); ?></h2>
       <?php while ( have_posts() ) : the_post();?>
       <?php the_content();?>
       <?php endwhile; // end of the loop. ?>
 
<div class="services"  >
    
    <h5 class="service-title"> <?php echo get_field ("title") ?> </h5>
    <p class="service-description"> <?php echo get_field ("description") ?> </p>
    
</div>
    
    

        <?php query_posts("post_type=services");?>
       <?php while (have_posts()) :
        the_post();?>
       
       
       
  
       
<div class="service-icon">
          
           <img src="<?php the_field("icon"); ?>" alt= "" />


</div>
    
 
  <div class="service-text">
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
      <p> <?php echo get_field ("description") ?> </p>   
 </div>
 
 




<?php endwhile; // end of the loop. ?>
      <?php wp_reset_query(); // resets the altered query back to the original ?>

       

    
 
       
       
       <div class ="about-contact">
<h4><?php echo get_field('about_page_contact') ?> </h4>
           <h3>Interested in working with us?</h3>
      <a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us <?php echo get_field('button') ?> </a>
  </div><!--contact us button-->


   </div><!-- #content -->
 </div><!-- #primary -->







 <?php get_footer(); ?>
