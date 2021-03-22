<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">

<title>Ollin - Arte en movimiento</title>

<!-- AJAX Y JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<!-- LIBRERIA AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- LIBRERIA SLICK -->
<link href="../wp-content/themes/hayuamig/assets/slick-1.8.1/slick/slick.css">
<link href="../wp-content/themes/hayuamig/assets/slick-1.8.1/slick/slick-theme.css">
<!-- METADATA -->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PZL55LP0C5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(‘js’, new Date());
  gtag(‘config’, ‘G-PZL55LP0C5’);
</script>
<!-- BOOTSTRAP E ICONOS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="assets/fonts/styles.css">
<link href="https://file.myfontastic.com/LN33oX4mnHEKpseP5Ww9Gh/icons.css" rel="stylesheet">
<link rel="shortcut icon" href="../wp-content/themes/vidrioguicho/assets/img/logo.ico" type="image/ico">
<!-- MAPA -->
<link rel="stylesheet" href="//unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin=""/>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="overflow">

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">

		<?php
		/**
		 * Functions hooked into storefront_header action
		 *
		 * @hooked storefront_header_container                 - 0
		 * @hooked storefront_skip_links                       - 5
		 * @hooked storefront_social_icons                     - 10
		 * @hooked storefront_site_branding                    - 20
		 * @hooked storefront_secondary_navigation             - 30
		 * @hooked storefront_product_search                   - 40 REMOVED
		 * @hooked storefront_header_container_close           - 41
		 * @hooked storefront_primary_navigation_wrapper       - 42
		 * @hooked storefront_primary_navigation               - 50
		 * @hooked storefront_header_cart                      - 60
		 * @hooked storefront_primary_navigation_wrapper_close - 68
		 */
		do_action( 'storefront_header' );
		?>

		</header><!-- #masthead -->
	

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	

	if (is_front_page()) { ?>
		<div class="main-banners-container">
			<div class="item">
				<hr class="hr-fade top">
                <h1>ARTE<br>EN MOVIMIENTO</h1>
				<hr class="hr-fade bottom">
			</div>
		</div> <?php
	}else{ ?>
		<div class="inner-section-banner" style="background-image: url(<?php the_post_thumbnail_url() ?>) "><h1><?php the_title() ?></h1></div><?php
	}

	if (is_page('contact')) { ?>
		<h1 class="title text-center contact pattern mayus"><?php the_title() ?></h1><?php
	}
	?>

	<div id="content" class="site-content" tabindex="-1">
		

		<?php
		do_action( 'storefront_content_top' );

