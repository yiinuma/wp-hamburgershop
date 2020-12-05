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
        wp_enqueue_style('hamburger',get_template_directory_uri().'/assets/css/hamburger.css',array());
    }
    add_action( 'wp_enqueue_scripts','hamburger_script' );
    
    // 引数には好きなサイズを指定できるようにしています。使える値はthe_post_thumbnail()と同じ、"thumbnail", "medium", "large", "full"の4種です。
    function get_thumb_img($size = 'full') {
        $thumb_id = get_post_thumbnail_id();                         // アイキャッチ画像のIDを取得
        $thumb_img = wp_get_attachment_image_src($thumb_id, $size);  // $sizeサイズの画像内容を取得
        $thumb_src = $thumb_img[0];    // 画像のurlだけ取得
        $thumb_alt = get_the_title();  //alt属性に入れるもの（記事のタイトルにしています）
        return '<img src="'.$thumb_src.'" alt="'.$thumb_alt.'">';
      }


    ///////////////////////////////////////
    // Gutenberg用のCSSを読み込む
    ///////////////////////////////////////
    add_action( 'enqueue_block_editor_assets', 'add_block_editor_style' );
    function add_block_editor_style() {
        wp_enqueue_style( 'block-editor-style', get_theme_file_uri( '/assets/css/editor-style.css' ) );
    }

      
    