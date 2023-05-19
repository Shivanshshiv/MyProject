<?php 
/*
* Template Name: Home Page
* @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
*/

get_header();
?>
         
    <!-- about -->
     <?php  get_template_part( 'template-parts/sections/home/about'); ?> 
     <!--bussiness--> 
     <?php  get_template_part( 'template-parts/sections/home/bussiness'); ?>  
     <!--sustainability--> 
     <?php  get_template_part( 'template-parts/sections/home/sustainability'); ?>  
    <!-- our projects -->
    <?php  get_template_part( 'template-parts/sections/home/our-project'); ?>    
    <!-- large pic gallery -->
   
     <!--our Career -->
     <?php  get_template_part( 'template-parts/sections/home/career'); ?>    
     
     

     
     <?php get_footer(); ?>