<?php get_header() ;?>
</div>

            <div id="PRODUCTspace">

            </div>
            
            <div id="CONTACTspace">
    
            <section class="front_news">
        <div class="sec_head">お知らせ</div>
        <div class="news_list">
            <ul>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!--  ループ開始  -->
                <li>
                    <a href="<?php the_permalink() ;?>">
                        <div class="date"><?php echo get_the_date('Y.m.d') ;?></div>
                        <div class="ttl"><?php the_title() ;?></div>
                    </a>
                </li>
                <?php endwhile; endif; ?><!--  /ループ終わり -->
            </ul>
            <div class="btn_stn"><a href="<?php bloginfo('url') ;?>/news">一覧をみる</a></div>
        </div>
    </section>

<?php get_footer() ;?>
