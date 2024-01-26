<?php
/**
 * The Header template for our theme
 * @package WordPress
 * @subpackage 2001online
 * @since 2001online 1.4
 */
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>> <!--<![endif]-->
<html class="no-js" lang="es">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all">
<?php wp_head(); ?>
</head>


<header>
<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_blanco_modonerd.svg" width="300px" height="auto">
</header>
<nav class="menu">
    <a href="#">Cine</a>
    <a href="#">Series</a>
    <a href="#">Videojuegos</a>
    <a href="#">Libros</a>
</nav>