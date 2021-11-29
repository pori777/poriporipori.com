<?php get_header(); ?>

<div id="content" class="page_wrap W_inner">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?><!-- ループ開始 -->
    <h1><?php the_title(); ?></h1>
    <div class="page_container">
        <php the_content(); ?>
    </div>
    <?php endwhile; endif; ?><!-- ループ終了 -->
</div>

<?php get_footer(); ?>