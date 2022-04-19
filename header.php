<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name'); ?> </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
    <script src="menu.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <header class="header">
            <div class="header__inner">
                <!-- Logo -->
                <a class="branding" href="#">
                    <img src="<?php echo get_template_directory_uri()?>/Assets/Icons/LD.svg" alt="logotype">
                </a>
                <!-- Menu -->
                <nav class="nav">
                    <div class="menu">
                        <ul class="menu__list">
                            <li class="menu__item"><a class="menu__link transition" href="portfolio.php">Portfolio</a></li>
                            <li class="menu__item"><a class="menu__link transition" href="#about">Om mig</a></li>
                            <li class="menu__item"><a class="menu__link transition"  href="#contact">Kontakt</a></li>
                        </ul>
                    </div>
                    
                    <!-- Burger Menu -->
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </nav>

                    <span class="header__social">
                        <a href="https://www.instagram.com/lisa_dahlgren">
                            <img src="<?php echo get_template_directory_uri()?>/Assets/Icons/instagram_icon.svg" alt="" class="social__icon">
                        </a>
                    </span>
            </div>
        </header>
        <main class="content">