<?php
/** index.php
 *
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 05.02.2012
 */

get_header(); ?>

<section id="secondary" class="widget-area span2" role="complementary">
<img src="/wp-content/themes/the-bootstrap/img/brazil.png">
					<nav id="access" role="navigation">
						<div <?php the_brics5_navbar_class(); ?>>
							<div class="navbar-inner">
								<div class="container">
									<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target="#brazil-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse" id="brazil-collapse">
										<?php wp_nav_menu( array(
											'theme_location'	=>	'brazil-menu',
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

</section><!-- #secondary .widget-area -->
<section id="secondary" class="widget-area span2" role="complementary">
<img src="/wp-content/themes/the-bootstrap/img/russia.png">
					<nav id="access" role="navigation">
						<div <?php the_brics5_navbar_class(); ?>>
							<div class="navbar-inner">
								<div class="container">
									<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target="#russia-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse" id="russia-collapse">
										<?php wp_nav_menu( array(
											'theme_location'	=>	'russia-menu',
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

</section><!-- #secondary .widget-area -->
<section id="secondary" class="widget-area span2" role="complementary">
<img src="/wp-content/themes/the-bootstrap/img/india.png">
					<nav id="access" role="navigation">
						<div <?php the_brics5_navbar_class(); ?>>
							<div class="navbar-inner">
								<div class="container">
									<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target="#india-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse" id="india-collapse">
										<?php wp_nav_menu( array(
											'theme_location'	=>	'india-menu',
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

</section><!-- #secondary .widget-area -->
<section id="secondary" class="widget-area span2" role="complementary">
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

</section><!-- #secondary .widget-area -->
<section id="secondary" class="widget-area span2" role="complementary">
<img src="/wp-content/themes/the-bootstrap/img/safrica.png">
					<nav id="access" role="navigation">
						<div <?php the_brics5_navbar_class(); ?>>
							<div class="navbar-inner">
								<div class="container">
									<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target="#safrica-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse" id="safrica-collapse">
										<?php wp_nav_menu( array(
											'theme_location'	=>	'safrica-menu',
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

</section><!-- #secondary .widget-area -->
<section id="secondary" class="widget-area span2" role="complementary">
<img src="/wp-content/themes/the-bootstrap/img/brics5.gif">
					<nav id="access" role="navigation">
						<div <?php the_brics5_navbar_class(); ?>>
							<div class="navbar-inner">
								<div class="container">
									<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
									<a class="btn btn-navbar" data-toggle="collapse" data-target="#brics5-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse" id="brics5-collapse">
										<?php wp_nav_menu( array(
											'theme_location'	=>	'brics5-menu',
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

</section><!-- #secondary .widget-area -->
<?php get_footer();


/* End of file index.php */
/* Location: ./wp-content/themes/the-bootstrap/index.php */