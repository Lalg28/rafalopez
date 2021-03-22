<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_page_before' );?>


				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

				    <div class="hero">
                        <div class="texto-hero obra">
                            <hr class="hr-fade top">
                            <h1>OBRA</h1> 
                            <hr class="hr-fade bottom">
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="dos-columnas margintop">
                            <div class="columna-1">
                                <div class="carusel-imagenes">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_01.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_02.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_03.jpg' ?>" alt="">
                                </div>
                            </div>
                            <div class="columna-2">
                                <h2>Barro</h2>
                                <p class="paddingtop">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore voluptate quaerat beatae suscipit dolorem exercitationem officia quae tenetur consequuntur placeat ea eius ipsam nobis numquam laudantium vel, velit atque dolore.
                                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo asperiores repellat dolore, expedita eveniet magnam sint eum qui magni natus assumenda minus dolorum, perspiciatis voluptas in dicta labore quam debitis!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="dos-columnas marginbt">
                            <div class="columna-1">
                                <div class="carusel-imagenes">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_01.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_02.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_03.jpg' ?>" alt="">
                                </div>
                            </div>
                            <div class="columna-2 orden">
                                <h2>Cerámica</h2>
                                <p class="paddingtop">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore voluptate quaerat beatae suscipit dolorem exercitationem officia quae tenetur consequuntur placeat ea eius ipsam nobis numquam laudantium vel, velit atque dolore.
                                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo asperiores repellat dolore, expedita eveniet magnam sint eum qui magni natus assumenda minus dolorum, perspiciatis voluptas in dicta labore quam debitis!
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="dos-columnas marginbt">
                            <div class="columna-1">
                                <div class="carusel-imagenes">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_01.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_02.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/obra_03.jpg' ?>" alt="">
                                </div>
                            </div>
                            <div class="columna-2">
                                <h2>Yeso</h2>
                                <p class="paddingtop">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore voluptate quaerat beatae suscipit dolorem exercitationem officia quae tenetur consequuntur placeat ea eius ipsam nobis numquam laudantium vel, velit atque dolore.
                                    <br>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo asperiores repellat dolore, expedita eveniet magnam sint eum qui magni natus assumenda minus dolorum, perspiciatis voluptas in dicta labore quam debitis!
                                </p>
                            </div>
                        </div>
                    </div>
					
				</article><!-- #post-## -->

				<?php

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
