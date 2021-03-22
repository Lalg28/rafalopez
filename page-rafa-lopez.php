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
                        <div class="texto-hero rafa-lopez">
                            <hr class="hr-fade top">
                            <h1>RAFA LÓPEZ</h1> 
                            <hr class="hr-fade bottom">
                        </div>
                    </div>

                    <div class="container">
                        <div class="dos-columnas margintop">
                            <div class="columna-1">
                                <div class="carusel-imagenes">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_01_a.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_01_b.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_01_c.jpg' ?>" alt="">
                                </div>
                            </div>
                            <div class="columna-2">
                                <p>Rafa López es un maestro artesano de Tonalá con una trayectoria de más de 40 años. Su obra mezcla la iconografía 
                                    tradicional tonalteca y elementos artísticos más eclécticos. Aparte de la alfarería domina diversas técnicas y 
                                    trabaja en comisiones de pintura y escultura. Su obra ha sido presentada en diversos países del mundo como USA, Holanda o Australia.  
                                    <br><br>Desde los 6 años tuvo la fortuna de trabajar en distintos talleres, aprendiendo diferentes técnicas, papel maché, yeso y 
                                    cerámica de alta temperatura, incluso trabajó un tiempo decorando piezas para Sergio Bustamante.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="banner">
                        <h2 class="texto-banner">"Ser artesano es una<br>labor gratificante"</h2>
                    </div>

                    <div class="container">
                        <div class="dos-columnas">
                            <div class="columna-1">
                                <div class="carusel-imagenes">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_02_a.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_02_b.jpg' ?>" alt="">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_02_c.jpg' ?>" alt="">
                                </div>
                            </div>
                            <div class="columna-2 orden">
                                <p>A los 23 años monta su propio taller con otros 3 artesanos, y así lleva 35 años trabajando el barro con diferentes acabados.  
                                    <br><br>Ser artesano es una labor gratificante. Tiene dificultad y requiere precisión, para de una bola de barro terminar con una pieza hermosa.  
                                    <br><br>Él ve esperanza y una gran lección en las nuevas generaciones que están retomando el oficio  “Vienen con mucha energía y siento que eso nos ayuda a superarnos”.
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
