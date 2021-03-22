<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">

        <div class="container">
            <div class="contenedor-flex">
                <div class="menu-footer">
                    <h3>MENÚ</h3>
                    <?php wp_nav_menu( array('menu' => 'Footer Menu', 'menu_class' => 'footer-menu') ); ?>
                </div>              
                <div class="logo-footer">
                    <img src="<?php echo get_stylesheet_directory_uri(). '/assets/img/logo_rafa_lopez.svg' ?>" alt="logo Vg">
                </div>
                <div class="contacto-footer">
                    <div class="telefono">
                        <a href="#">
                        <i class="fas fa-phone-alt"></i>
                        <p>33 9999 999</p>
                        </a>
                    </div>
                    <div class="whatsapp">
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                            <p>33 9999 999</p>
                        </a>
                    </div>
                    <div class="email">
                        <a href="#">
                            <i class="fas fa-envelope"></i>
                            <p>correo@dominio.com</p>
                        </a>
                    </div>
                </div>
            </div>
            <h2 class="copyright">DESARROLLADO POR <a href="https://blueterrier.mx/" target="_blank">BLUE TERRIER</a></h2>
        </div>

    </footer><!-- #colophon -->
    
    <script src="//unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</body>
</html>
