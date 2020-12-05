<?php get_header(); ?>


<article class="l-main">
    <?php
        if(have_posts()):
        while(have_posts()):the_post();?>

    <div class="c-top-img--single">
        <?php echo get_thumb_img('large'); ?>
        <h1 class="c-top-img__text--single"><?php the_title(); ?></h1>
    </div>

    <div class="l-single">
        <div class="editor-styles-wrapper">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile;
        else:
        ?>
    <p>表示する記事がありません</p>
    <?php endif; ?>

</article>

</article>

<?php get_sidebar(); ?>

<?php get_footer(); ?>