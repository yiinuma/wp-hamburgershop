<form class="p-search-form" id="searchform" method="get" action="<?php echo esc_url(home_url('/'));?>">
    <i class="fas fa-search"></i>
    <label class="screen-reader-text" for="s"><?php echo __('search','wp-hamburgershop'); ?>検索：</label>
    <input class="p-search-form__keyword" name="s" id="s" />
    <input class="p-search-form__submit" id="searchsubmit" type="submit" value="検索" />
</form>