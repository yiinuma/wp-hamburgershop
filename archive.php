<?php get_header(); ?>


<article class="l-main">

    <section class="c-top-img c-top-img--archive">
        <h2 class="c-top-img__text--archive">Menu:
            <span class="c-top-img__text--category">
                <?php
                if(is_category()){
                    echo single_cat_title(); 
                }elseif(is_tag()){
                    echo single_tag_title();
                }
            ?>
            </span>
        </h2>
    </section>

    <div class="l-archive">
        <div class="p-archive">
            <?php echo category_description(); ?>

            <?php get_template_part("components/loop_archive"); ?>

            <div class="c-pager pc">
                <?php if(function_exists("wp_pagenavi")): ?>
                <?php wp_pagenavi(); ?>
                <?php endif; ?>
            </div>
            <!-- テーマチェック回避がてらに仕様変更 SP用ページネーション追加　-->
            <div class="c-pager sp">
                <div class="prev"><?php previous_posts_link('&lt;&lt;  前へ'); ?></div>
                <div class="next"><?php next_posts_link('次へ &gt;&gt;'); ?></div>
            </div>

        </div>
    </div>

</article>


<?php get_sidebar(); ?>

<?php get_footer(); ?>