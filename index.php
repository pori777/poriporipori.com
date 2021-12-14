<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ; ?>https://unpkg.com/ress/dist/ress.min.css">
        <link href="<?php echo get_template_directory_uri() ; ?>https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ;?>js/script.js">
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
        
        <div class="catchPhraseSpace">
            <div class="catchPhrase">
                <h1>お客様の要望に合ったサイトを<br>
                    スムーズなコミュニケーションで</h1>
            </div>
        </div>
<!----------------------------------------------------------------------------------------------------------------------------------------->
        <div class="strongPointSpace">
            <div class="box">
                <div class="strongPointImage">
                    <img src="<?php home_url();?>poriporiporiImage/programming-1873854_1920.png">
                </div>
                <div class="desc">
                    <section class="strongPointSentence">
                        <h2>お客様にあった<br>
                            ホームページをデザイン</h2>
                        <h5>
                            お客様のご要望を正確に聞き、イメージ通りのホームページを手に入れることができます。
                            利用したい機能などがあればお気軽にご相談ください。
                        </h5>
                    </section>
                </div>
            </div>

            <div class="box">
                <div class="strongPointImage">
                    <img src="<?php home_url();?>poriporiporiImage/workspace-1280538_1920.jpg">
                </div>
            <div class="desc">
                <section class="strongPointSentence">
                    <h2>素早い返信による快適な連絡</h2>
                    <h5>
                        素早い返信によりお客様に快適なコミュニケーションをはかります。
                    </h5>
                </section>
            </div>
        </div>

<!-------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="aboutSpace">
            <section class="about">
                <h2>業務内容</h2>
                <h4>Webサイト制作&nbsp;&nbsp;&nbsp;Webサイトのデザイン&nbsp;&nbsp;&nbsp;コーディング
                </h4>
                <h2>使用可能言語</h2>
                <h4>HTML&nbsp;&nbsp;&nbsp;CSS&nbsp;&nbsp;&nbsp;JavaScript&nbsp;&nbsp;&nbsp;PHP</h4>
                <h2>使用可能技術</h2>
                <h4>WordPress&nbsp;&nbsp;&nbsp;AdobeXD</h4>
            </section>
        </div>        
<!--------------------------------------------------------------------------------------------------------------------------------------->
            
        <div class="contact_indexSpace">
            <form method="post" action="page-contact.php">
                <button class="contactButton"><h3>お問い合わせ</h3></button>
            </form>
        </div>
        <div class="snsSpace">
            <form action="post" action="https://twitter.com/pori072">
                <button ><i class="fab fa-twitter fa-3x my-skyblue faa-wrench  animated-hover"></i></button>
            </form>
            <form action="post" action="">
                <button><i class="fab fa-github fa-3x my-purple faa-bounce  animated-hover"></i></button>
            </form>
            <?php get_footer() ;?>