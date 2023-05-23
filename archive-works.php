<?php get_header() ;?>
    <main>
        <p class="pageTop only_pc"><a href="#wrap" class="pageTop__bg"><i class="fas fa-angle-up pageTop__button 2x"></i></a></p>
        <section id="keyVisual" class="keyVisual"></section>
        <section class="worksArea blContainer" id="works">
            <h2 class="section__title section__internalLinks">
                WORKS
            </h2>
            <div class="articleWrapper">
                <?php               
                $args = array(
                    'post_type' => 'works',
                    'posts_per_page' => 15,
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
            </div>
        </section>
    </main>
<?php get_footer() ;?>