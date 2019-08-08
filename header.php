<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0 ">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" integrity="sha384-wxqG4glGB3nlqX0bi23nmgwCSjWIW13BdLUEYC4VIMehfbcro/ATkyDsF/AbIOVe" crossorigin="anonymous">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
    <!--タイトルを画像にする場合-->
    <!-- <div class="site-title">
      <h1><a href="<?php echo home_url(); ?>">
        <img src="アップロードした画像へのURL" alt="<?php bloginfo( 'name' ); ?>"/>
      </a></h1>
    </div> -->
    
    <!--タイトルを文字にする場合-->
    <div class="site-title">
      <h1><a class="site-title-a" href="<?php echo home_url(); ?>">
        <?php bloginfo( 'name' ); ?>
      </a></h1>
      <!-- <div class="site-title-img-wrap">
        <img class="site-title-img" src="<?php echo get_template_directory_uri(); ?>/images/title.jpg" alt="<?php bloginfo( 'name' ); ?>"/>
      </div> -->
    </div>

        <!--スマホ用メニューボタン-->
    <button type="button" id="navbutton">
      <i class="fas fa-list-ul"></i>
    </button>


  </div>
    <!--ヘッダーメニュー-->
  <?php wp_nav_menu( array(
        'theme_location' => 'header-nav',
        'container' => 'nav',
        'container_class' => 'header-nav',
        'container_id' => 'header-nav',
        'fallback_cb' => ''
  ) ); ?>

</header>
