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
					<nav id="access" role="navigation">
						<div <?php the_brics5_navbar_class(); ?>>
							<div class="navbar-inner">
								<div class="container">
									<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target="#china-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse" id="china-collapse">
										<?php wp_nav_menu( array(
											'theme_location'	=>	'china-menu',
											'menu_class'		=>	'nav',
											'depth'				=>	3,
											'fallback_cb'		=>	false,
											'walker'			=>	new The_Bootstrap_Nav_Walker,
										) ); 
										?>
								    </div>
								</div>
							</div>
						</div>				
					</nav><!-- #access -->

</section>
<section id="primary" class="span8">
<?php if (function_exists('show_full_breadcrumb')) show_full_breadcrumb(); ?>
<?php wp_list_cats('child_of=' . get_category_root_id($cat) . '&optioncount=1&hide_empty=0');?>	
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
		endif;
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/category.php */