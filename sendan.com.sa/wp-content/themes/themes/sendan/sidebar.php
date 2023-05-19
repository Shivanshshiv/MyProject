
<?php
   if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>



<div class="col-md-12 widget-area wrapper" id="secondary" role="complementary">

	<?php dynamic_sidebar( 'right-sidebar' ); ?>

</div><!-- #secondary -->

