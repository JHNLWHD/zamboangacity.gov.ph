<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package gwt_wp
 */
?>
<?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
<aside id="sidebar-right" class="<?php govph_displayoptions( 'govph_sidebar_position_right' ); ?>columns" role="complementary">
	<?php do_action( 'before_sidebar' ); ?>
	<?php dynamic_sidebar( 'right-sidebar' ) ?>
</aside>
<?php endif; ?>