<?php
if(have_posts()):
while(have_posts()):the_post();?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="c-card">
        <div class="c-card__thumbnail">
            <?php echo get_thumb_img('large'); ?>
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
<?php endwhile;
    else:
    ?><p>表示する記事がありません</p>
<?php endif; ?>