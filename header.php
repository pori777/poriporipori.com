<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
        <link rel="stylesheet" href="/style.css">
        <link rel="stylesheet" href="js/script.js">
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
                    <li><a href="<?php  echo esc_url( home_url ( '/' ) ); ?>">HOME</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/product/' ) ); ?>">PRODUCT</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) );?>">CONTACT</a></li>
                </ul>
            </nav>

            <div id="menuListIcon">
                <span class="innerLine" id="line1"></span>
                <span class="innerLine" id="line2"></span>
                <span class="innerLine" id="line3"></span>
            </div>
        </header>