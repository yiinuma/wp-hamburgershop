<article class="l-sidebar">
    <div class="p-sidebar__inner" id="sidebar">
        <button id="sidebar-button--close">
            <i class="fas fa-times fa-3x"></i>
        </button>

        <h2>Menu</h2>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'category-menu',
                'menu_class' => 'p-sidebar__menu'
            )); 
        ?>
    </div>
</article>