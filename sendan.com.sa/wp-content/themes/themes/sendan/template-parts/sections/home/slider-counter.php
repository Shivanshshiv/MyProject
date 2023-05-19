<?php
/**
 * This section use to Mange Home page main slider counter
 *
 * @package sendan
 * @developed by Hariom ( Sendan International Team )
 * @since 1.0.0
 */
?>
<div class="col-md-9 f-left">

    <div class="clear-topbb">&nbsp;</div>
    <div class="row text-center mainbbcount">
    <?php
    if( have_rows('slider_counter') ):
        $count = 0;     
        while ( have_rows('slider_counter') ) : the_row(); $count++;
        ?>	
        <div class="col-md-3 col-sm-6 countermainarea">
            <div class="counter">
                <i class="<?php echo the_sub_field('counter_icon'); ?> fa-2x"></i><br/>
                <span class="timer count-title <?php if($count != 1 ) { ?> count-number <?php } ?>" id="counter_<?php echo $count;?>"  data-to="<?php echo the_sub_field('counter_number'); ?>" data-speed="1500"><?php echo the_sub_field('counter_number'); ?></span>
                <?php if( $count != 1 ) { ?><span style="font-size: 30px; margin-right: 0px;">+</span> <?php } ?>
                <p class="count-text "><?php echo the_sub_field('counter_title'); ?></p>
            </div>
        </div>
        <?php endwhile;
	endif;
	?>
    </div>

</div>
        
        
