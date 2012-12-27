<?php
/** category.php
 *
 * The template for displaying Category Archive pages.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

get_header(); ?>
<section id="leftblank" class="span1">&nbsp;</section>
<section id="secondary" class="span2">
<img src="/wp-content/themes/the-bootstrap/img/china.png">
</section>
<section id="primary" class="span8">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
<?php if (function_exists('HAG_Breadcrumbs')) { HAG_Breadcrumbs(); } ?>
<?php wp_list_cats('child_of=' . get_category_root_id($cat) . '&show_count=1&hide_empty=0&show_option_none=0');?>
		<?php
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */