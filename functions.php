<?php
    register_nav_menu( 'category-menu','hamburger'); // １つのメニューバー表示
    // add_theme_support('menus');
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name','display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
        wp_enqueue_script('slide',get_template_directory_uri().'/assets/js/slide.js');
        wp_enqueue_style('font-awesome','//use.fontawesome.com/releases/v5.8.2/css/all.css',array());
        wp_enqueue_style('roboto','//fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap',array());
        // wp_enqueue_style('preconnect','//fonts.gstatic.com',array());
        wp_enqueue_style('M+PLUS+1p','//fonts.googleapis.com/css2?family=M+PLUS+1p:wght@300;400;500;700&display=swap',array());
        wp_enqueue_style('hamburger-css',get_template_directory_uri().'/assets/css/style-hamburger.css',array());
    }
    add_action( 'wp_enqueue_scripts','hamburger_script' );



      
    