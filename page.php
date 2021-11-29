<?php get_header(); ?>

<div id="content" class="page_wrap W_inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
    <h1><?php the_title(); ?></h1><!-- リクエストしたページのタイトルを表示 -->
    <div class="page_container">
        <?php the_content(); ?><!--固定ページの管理画面の中身を表示 -->
    </div>
    <?php endwhile; endif; ?><!-- ループ終了 -->
</div>

<?php get_footer(); ?>