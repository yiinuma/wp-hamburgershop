<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php wp_head();  ?>
</head>

<body>
    <div class="l-container">
        <div class="p-sidebar__back"></div>
        <header class="l-header">
            <div class="p-header__inner">
                <button class="sidebar-btn" id="sidebar-button--open">
                    <h2>Menu</h2>
                </button>
                <a href="<?php echo esc_url(home_url('/'));?>">
                    <h1 class="p-header__ttl"><?php bloginfo( 'name' );?></h1>
                </a>

                <?php get_search_form (); ?>

            </div>
        </header>