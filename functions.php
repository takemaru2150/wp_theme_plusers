<?php
add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );

//カスタムメニュー
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

//メニューボタンjs呼び出し
function navbutton_scripts(){
    wp_enqueue_script( 'navbutton_script', get_template_directory_uri() .'/js/navbutton.js', array('jquery') );
  }
  add_action( 'wp_enqueue_scripts' , 'navbutton_scripts' );
  