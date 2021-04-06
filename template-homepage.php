<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <section class="rafa-lopez">
                <div class="container">
                       <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/rafa_lopez_home.jpg' ?>" alt="">
                       <div class="text-container">
                            <h2>Rafa López</h2>
                            <p>Rafa López es un maestro artesano de Tonalá con una trayectoria de más de 40 años. Su obra mezcla la iconografía tradicional
                                tonalteca y elementos artísticos más eclécticos. Aparte de la alfarería domina diversas técnicas y trabaja en comisiones de pintura
                                y escultura. Su obra ha sido presentada en diversos países del mundo como USA, Holanda y Australia.
                            </p>
                            <a href="https://ollinarteenmovimiento.com/rafa-lopez/">Conoce más de la historia de Rafa López <i class="fas fa-arrow-right"></i></a>
                       </div>
                </div>
            </section>

            <section class="trayectoria">
                <div class="container">
                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/trayectoria_home.jpg' ?>" alt="">
                    <div class="text-container">
                        <h2>Trayectoria</h2>
                        <p>Mi trabajo se basa principalmente en la búsqueda del dibujo en la naturaleza. A travéz de la observación,
                        encuentro un lenguaje gráfico que se repite constantemente: ya sea en una piedra, en la superficie arrugada
                        de un papel o escondido en cualquier otro tipo de superficie
                        </p>
                        <a href="https://ollinarteenmovimiento.com/obra/">Sigue su obra a travéz del tiempo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </section>

            <section class="procesos">
                <div class="galeria-procesos">
                    <!-- PROCESO 1 -->
                    <div id="proceso1" class="proceso">
                        <div class="container">
                            <div class="text-container">
                                <h2>Proceso Creativo</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequatur dolores tenetur assumenda aperiam iure voluptatem ad dignissimos quo facilis id minus veritatis quod quas officia sequi corporis, non dolorum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- PROCESO 2 -->
                    <div id="proceso2" class="proceso">
                        <div class="container">
                            <div class="text-container">
                                <h2>Tarjeta ejemplo</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequatur dolores tenetur assumenda aperiam iure voluptatem ad dignissimos quo facilis id minus veritatis quod quas officia sequi corporis, non dolorum.</p>
                            </div>
                        </div>
                    </div>
                    <!-- PROCESO 3 -->
                    <div id="proceso3" class="proceso">
                        <div class="container">
                            <div class="text-container">
                                <h2>Proceso Creativo</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut consequatur dolores tenetur assumenda aperiam iure voluptatem ad dignissimos quo facilis id minus veritatis quod quas officia sequi corporis, non dolorum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="productos-destacados">
                <div class="container">
                    <h1>Catálogo</h1>
                    <?php do_action('homepage'); ?>
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();