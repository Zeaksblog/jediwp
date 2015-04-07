<?php
/**
 * The sidebar containing the left sidebar widget area.
 *
 * @package jediwp
 */

if ( ! is_active_sidebar( 'sidebar-left' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-3 col-lg-3 col-md-pull-9" role="complementary">
	<div class="well">
		<?php dynamic_sidebar( 'sidebar-left' ); ?>
	</div>
</div><!-- #secondary -->

</div> <!-- .row -->
</div> <!-- .container -->