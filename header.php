<!DOCTYPE html>
<html lang = ja>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pori</title>
    <meta name="description" content="poriのポートフォリオサイトです。制作実績やブログを発信しております。">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ;?>/sass/style.css">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="pcHeader blContainer nav only_pc">
            <h1 class="pcHeader__title">pori</h1>
            <nav class="pcHeader__nav only_pc">
                <li class="pcHeader__navItem nav__navItem"><a href="https://poriporipori.com/#about" class="nav__navLink">ABOUT</a></li>
                <li class="pcHeader__navItem nav__navItem"><a href="https://poriporipori.com/works" class="nav__navLink">WORKS</a></li>
                <li class="pcHeader__navItem nav__navItem"><a href="https://poriporipori.com/blog" class="nav__navLink">BLOG</a></li>
                <li class="pcHeader__navItem nav__navItem"><a href="https://poriporipori.com/#contact" class="nav__navLink">CONTACT</a></li>
            </nav>
        </div>
        <div class="spHeader only_sp">
            <h1 class="spHeader__title">pori</h1>
            <nav class="spHeader__nav" id="spHeader__menuList">
                <li class="spHeader__navItem nav__navItem"><a href="https://poriporipori.com/#about" class="nav__navLink">ABOUT</a></li>
                <li class="spHeader__navItem nav__navItem"><a href="https://poriporipori.com/works" class="nav__navLink">WORKS</a></li>
                <li class="spHeader__navItem nav__navItem"><a href="https://poriporipori.com/blog" class="nav__navLink">BLOG</a></li>
                <li class="spHeader__navItem nav__navItem"><a href="https://poriporipori.com/#contact" class="nav__navLink">CONTACT</a></li>
            </nav>
            <div class="hamburgerIcon">
                <span class="hamburgerIcon__line" id="line1"></span>
                <span class="hamburgerIcon__line" id="line2"></span>
                <span class="hamburgerIcon__line" id="line3"></span>
            </div>
        </div>
    </header>