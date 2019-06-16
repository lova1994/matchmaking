<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="http://matchmaking.lovaunger.se/wp-content/themes/matchmaking/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />


    <?php wp_head(); ?>
</head>

<body>



    <div class="container">
   

        <header>
            <nav class="navbar">
                <a class="logo" style="text-transform:uppercase;" href="<?php echo home_url(); ?>">  <?php echo get_bloginfo( 'name' ); ?> </a>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
                <div class="navbar-links">
                    <?php
wp_nav_menu();
                    ?>
                </div>
            </nav>



         
        </header>

        