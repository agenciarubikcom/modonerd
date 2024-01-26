<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
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