<?php get_header(); ?>


<article class="l-main">

    <section class="c-top-img c-top-img--archive">
        <h2 class="c-top-img__text--archive">Menu:
            <span class="c-top-img__text--category"><?php single_cat_title(); ?></span>
        </h2>
    </section>

    <div class="l-archive">
        <div class="p-archive">
            <h2>小見出しが入ります</h2>
            <p>
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>

            <?php if(have_posts()):while(have_posts()):the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="c-card">
                    <div class="c-card__thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="c-card__contents">
                        <div class="c-card__heading">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div class="c-card__caption">
                            <?php the_excerpt(); ?>
                        </div>
                        <div class="c-card__button">
                            <a href='<?php the_permalink(); ?>'><button type="button"> 詳しく見る</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; else: ?>
            <p>表示する記事がありません</p>
            <?php endif; ?>


            <div class="c-pager">
                <div class="c-pager__pagination">
                    <span class="c-pager__pagination--list">page1/10</span>
                    <a class="c-pager__pagination--pre" href="#"><span>«</span></a>
                    <a href="#" class="page smaller">1</a>
                    <a href="#" class="page current">2</a>
                    <a href="#" class="page larger">3</a>
                    <a href="#" class="page larger">4</a>
                    <a href="#" class="page larger">5</a>
                    <a href="#" class="page larger">6</a>
                    <a href="#" class="page larger">7</a>
                    <a href="#" class="page larger">8</a>
                    <a href="#" class="page larger">9</a>
                    <a class="c-pager__pagination--next" href="#"><span>»</span></a>
                </div>
            </div>

        </div>

    </div>

</article>


<?php get_sidebar(); ?>

<?php get_footer(); ?>