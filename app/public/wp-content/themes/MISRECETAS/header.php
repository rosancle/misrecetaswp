<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
<!--        <title>Mis recetas</title> -->
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <meta name="description" content="Página web sobre mis recetas">
        <meta name="keywords" content="recetas, gastronomía, comer">
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">  
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet"> 
    </head>

    <body>
        <div class="container">
<!--
            <header id="header" class="block-center-row mb-3">  
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Mis recetas">
            </header> 
-->            
            <header id="header" >
                <h2 class="head-strong  mb-1"> Mis Recetas </h1>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" alt="Mis Recetas" >
            </header>

            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                        'container' => 'nav',
                        'container_class' => 'nav-main block-center-row mb-2'
                    )
                );

            ?>            
            
            <!--
            <nav class="nav-main fnt-lg block-center-row mb-2">
                <ul>
                    <li>Inicio</li>
                    <li class="separator">|</li>
                    <li><a href="">Recetas</a></li>
                    <li class="separator">|</li>
                    <li><a href="">Contactar</a></li>                      
                </ul>                             
            </nav>
            -->