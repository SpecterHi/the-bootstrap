<?php
/** search.php
 *
 * The template for displaying Search Results pages.
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

get_header(); ?>

<section id="primary" class="span8">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		if ( have_posts() ) : ?>
	
			<header class="page-header">
				<h1 class="page-title">                Search Results for: <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="search-terms">'); echo $key; _e('</span>'); _e(' - '); echo $count . ' '; _e('results'); wp_reset_query(); ?></h1>

			</header>
	
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( '/partials/content-search', get_post_format() );
			}
			the_bootstrap_content_nav();
		else :
			get_template_part( '/partials/content-search', 'not-found' );
		endif; 
	
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file search.php */
/* Location: ./wp-content/themes/the-bootstrap/search.php */