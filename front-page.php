<?php get_header() ;?>
    <main>
        <p class="pageTop only_pc"><a href="#wrap" class="pageTop__bg"><i class="fas fa-angle-up pageTop__button 2x"></i></a></p>
        <section id="keyVisual" class="keyVisual"></section>
        <section id="about" class="about blContainer">
            <h2 class="section__title section__internalLinks">
                ABOUT
            </h2>
            <ul class="about__cards">
                <li class="about__card">
                    <h4 class="about__cardTitle">
                        業務内容
                    </h4>
                    <ul class="about__cardContent">
                        <li class="about__cardContentItem">
                            LP制作
                        </li>
                        <li class="about__cardContentItem">
                            ホームページ制作
                        </li>
                        <li class="about__cardContentItem">
                            WordPres導入
                        </li>
                    </ul>
                </li>
                <li class="about__card">
                    <h4 class="about__cardTitle">
                        使用スキル
                    </h4>
                    <ul class="about__cardContent">
                        <li class="about__cardContentItem">
                            HTML
                        </li>
                        <li class="about__cardContentItem">
                            CSS/SASS
                        </li>
                        <li class="about__cardContentItem">
                            JavaScript
                        </li>
                        <li class="about__cardContentItem">
                            WordPress
                        </li>
                    </ul>
                </li>
                <li class="about__card">
                    <h4 class="about__cardTitle">
                        SNS
                    </h4>
                    <ul class="about__cardContent">
                        <li class="about__cardContentItem">
                            Twitter<i class="fab fa-twitter about__cardContentIcon"></i>
                        </li>
                        <li class="about__cardContentItem">
                            Instagram<i class="fab fa-instagram about__cardContentIcon"></i>
                        </li>
                        <li class="about__cardContentItem">
                            GitHub<i class="fab fa-github about__cardContentIcon"></i>
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <section class="worksArea blContainer" id="works">
            <h2 class="section__title section__internalLinks">
                WORKS
            </h2>
            <div class="postCardWrapper">
                <?php               
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 6,
                    'orderby'=>'post_date', // 投稿日順に並べる
                    'order'=>'DESC' // 新着順に並べる
                );
                    $the_query = new WP_Query($args); if($the_query->have_posts()):
                ?>
                <ul class="postCards">
                    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                    <li class="postCard">
                        <a href="<?php the_permalink(); ?>" class="postCard__link">
                            <div class="postCard__imgWrapper">
                                <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像" class="postCard__img">
                            </div>
                            <div class="postCard__content">
                                <p class="postCard__date">
                                    <?php echo get_the_date('Y.m.d')?>
                                </p>
                                <p class="postCard__title">
                                    <?php echo CFS()->get('title') ;?>
                                </p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php else : ?>
                <?php endif ;?>
                <div class="button">
                    <a href="https://poriporipori.com/blog">
                        <p class="button__text button__shadow">
                            一覧ページを見る<i class="fas fa-angle-right nav__buttonLink"></i>
                        </p>    
                    </a>
                </div>
            </div>
        </section>
        <section class="blogArea blContainer" id="blog">
            <h2 class="section__title section__internalLinks">
                BLOG
            </h2>
            <div class="postCardWrapper">
                <?php               
                $args = array(
                    'post_type' => 'blog',
                    'posts_per_page' => 6,
                    'orderby'=>'post_date', // 投稿日順に並べる
                    'order'=>'DESC' // 新着順に並べる
                );
                    $the_query = new WP_Query($args); if($the_query->have_posts()):
                ?>
                <ul class="postCards">
                    <?php while ($the_query->have_posts()):$the_query->the_post(); ?>
                    <li class="postCard">
                        <a href="<?php the_permalink(); ?>" class="postCard__link">
                            <div class="postCard__imgWrapper">
                                <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="サンプル画像" class="postCard__img">
                            </div>
                            <div class="postCard__content">
                                <p class="postCard__date">
                                    <?php echo get_the_date('Y.m.d')?>
                                </p>
                                <p class="postCard__title">
                                    <?php echo CFS()->get('title') ;?>
                                </p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <?php else : ?>
                <?php endif ;?>
                <div class="button">
                    <a href="https://poriporipori.com/blog">
                        <p class="button__text button__shadow">
                            一覧ページを見る<i class="fas fa-angle-right nav__buttonLink"></i>
                        </p>    
                    </a>
                </div>
            </div>
        </section>
        <section class="contactArea blContainer" id="contact">
            <h2 class="section__title section__internalLinks">
                CONTACT
            </h2>
            <?php echo do_shortCode('[contact-form-7 id="44" title="コンタクトフォーム"]')?>
        </section>
    </main>
<?php get_footer() ;?>
