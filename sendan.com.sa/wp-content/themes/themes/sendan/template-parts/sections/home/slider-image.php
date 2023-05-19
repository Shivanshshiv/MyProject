<?php
/**
 * The section use for Home page main slider image 
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>

 <div class="pic-wrapper slidemain vvvvvvvvvv">
    <?php
    if( have_rows('slider_banner') ):
        $count = 1 ;     
        while ( have_rows('slider_banner') ) : the_row(); 
        ?>
        
         <figure class="pic-<?php echo $count++ ; ?>">
            <img class="sli img-fluid" src="<?php echo the_sub_field('slider-image'); ?>" alt="<?php echo the_sub_field('image_title'); ?>" />
        </figure>    
        
        <?php
        
        endwhile;
    endif;
    ?>
</div>
