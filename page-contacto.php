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
                    <section class="contacto">
                        <div class="container">
                            <h1>Contactanos <span>___</span></h1>
                            <h2>Queremos escucharte</h2>
                            <div class="contenedor-contacto">
                                <div class="formulario-contacto">
                                    <div class="contacto">
                                        <form action="<?php echo get_stylesheet_directory_uri(). '/contacto.php' ?>" class="formulario-contacto" id="formularioContacto" method="POST" role="form">
                                            <input type="text" name="nombre" placeholder="Nombre" required>
                                            <input type="text" name="asunto" placeholder="Asunto" required>
                                            <input type="email" name="email" placeholder="Correo" required>
                                            <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                                            <input type="submit" name="mensaje" class="btn-contact" value="Enviar">
                                        </form>
                                    </div>
                                </div>
                                <div class="imagen-contacto">
                                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_01_a.jpg' ?>" alt="">
                                </div>
                            </div>
                        </div>
					</section>
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
