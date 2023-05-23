<?php get_header() ;?>
    <main>
        <p class="pageTop only_pc"><a href="#wrap" class="pageTop__bg"><i class="fas fa-angle-up pageTop__button 2x"></i></a></p>
        <section id="keyVisual" class="keyVisual"></section>
        <section class="worksArea blContainer" id="works">
            <h2 class="section__title section__internalLinks">
                WORKS
            </h2>
            <div class="articleWrapper">
                <nav class="breadCrumbs">
                    <li class="breadCrumbs__item nav__navItem">
                        <a href="https://poriporipori.com" class="nav__navLink">
                            HOME
                        </a>
                    </li>
                    <li class="breadCrumbs__item nav__navItem">
                        <i class="fas fa-angle-right nav__navLink"></i>
                    </li>
                    <li class="breadCrumbs__item nav__navItem">
                        <a href="https://poriporipori.com/works" class="nav__navLink">
                            WORKS
                        </a>
                    </li>
                </nav>

                <div class="articleDetail__content">
                    <p class="articleDetail__date">
                        <?php echo get_the_date('Y.m.d')?>
                    </p>
                    <p class="articleDetail__title">
                        <?php echo CFS()->get('title') ;?>
                    </p>
                    <div class="articleDetail__img">
                        <img src="<?php echo CFS()->get('thumbnail') ;?>" alt="">
                    </div>
                    <div class="articleDetail__description">
                        <?php the_content(); ?>
                    </div>
                    <div class="articleDetail__link">
                        <a href="<?php echo CFS()->get('link');?>">
                            <?php echo CFS()->get('link');?>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer() ;?>