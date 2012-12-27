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
<section id="primary" class="span8">
<?php if (function_exists('show_full_breadcrumb')) show_full_breadcrumb(); ?>
<?php wp_list_cats('child_of=' . get_category_root_id($cat) . '&show_count=1&hide_empty=0&show_option_none=0');?>	
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();

		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php if ( $category_description = category_description() ) {
					echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
				} ?>
			</header><!-- .page-header -->
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content', get_post_format() );
			}
			the_bootstrap_content_nav();
/*不显示没文章		else :
			get_template_part( '/partials/content', 'not-found' );
*/
		endif;
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */