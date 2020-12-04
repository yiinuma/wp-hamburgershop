<?php get_header(); ?>


<article class="l-main">

    <section class="c-top-img c-top-img--archive">
        <h2 class="c-top-img__text--archive">Search:
            <span class="c-top-img__text--category"><?php the_search_query(); ?></span>
        </h2>
    </section>

    <div class="l-archive">
        <div class="p-archive">
            <h2>小見出しが入ります</h2>
            <p>
                テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>

            <?php get_template_part("components/loop_archive"); ?>

            <div class="c-pager">
                <?php if(function_exists("wp_pagenavi")): ?>
                <?php wp_pagenavi(); ?>
                <?php endif; ?>
            </div>

        </div>

    </div>

</article>


<?php get_sidebar(); ?>

<?php get_footer(); ?>