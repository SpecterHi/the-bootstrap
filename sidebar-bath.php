<?php
/** sidebar.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */

tha_sidebars_before(); ?>
<section id="bh" class="widget-area span2" role="complementary">

	<?php tha_sidebar_top();
	if ( ! dynamic_sidebar( 'bath' ) ) {
	} // end sidebar widget area
	tha_sidebar_bottom(); ?>
</section><!-- #secondary .widget-area -->
<?php tha_sidebars_after();


/* End of file sidebar.php */
/* Location: ./wp-content/themes/the-bootstrap/sidebar.php */