<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ;?>/style.css">
        <script type="text/javascript" src="<?php get_stylesheet_directory_uri();?>/js/script.js"></script>
    
        <?php wp_head(); ?>
    </head>

    <body>
        <div class="bg">
            <header>
                <div class="headerTitle">
                    <h1>pori</h1>
                </div>
                <nav id="menuList">
                    <ul>
                        <li><a href="<?php home_url(); ?>/poriporipori.com">HOME</a></li>
                        <li><a href="<?php home_url(); ?>">ABOUT</a></li>
                        <li><a href="<?php home_url(); ?>">PRODUCT</a></li>
                        <li><a href="<?php home_url(); ?>">CONTACT</a></li>
                    </ul>
                </nav>

                <div id="menuListIcon">
                    <span class="innerLine" id="line1"></span>
                    <span class="innerLine" id="line2"></span>
                    <span class="innerLine" id="line3"></span>
                </div>
            </header>

            <div id="HOMEspace">