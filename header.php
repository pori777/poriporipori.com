<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
        <script>src="<?php get_stylesheet_directory_uri();?>script.js"</script>
    
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
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="product.html">PRODUCT</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </nav>

                <div id="menuListIcon">
                    <span class="innerLine" id="line1"></span>
                    <span class="innerLine" id="line2"></span>
                    <span class="innerLine" id="line3"></span>
                </div>
            </header>

            <div id="HOMEspace">