<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1.0 ">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css" integrity="sha384-wxqG4glGB3nlqX0bi23nmgwCSjWIW13BdLUEYC4VIMehfbcro/ATkyDsF/AbIOVe" crossorigin="anonymous">

<?php wp_head(); ?>

<head prefix="og: http://ogp.me/ns#">

<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<meta property="og:locale" content="ja_JP">


<?php if(is_tag() || is_date() || is_search() || is_404()) : ?>
  <meta name="robots" content="noindex"/>
<?php endif; ?>

<!--個別ページ用のmetaデータ-->
<?php if( is_single() || is_page() ): ?>

<meta property="og:type" content="article">
<meta property="og:title" content="<?php the_title(); ?>">
<meta property="og:url" content="<?php the_permalink(); ?>">
<meta property="og:description" content="<?php echo strip_tags( get_the_excerpt() ); ?>">
<?php if( has_post_thumbnail() ): ?>
  <?php $postthumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); ?>
  <meta property="og:image" content="<?php echo $postthumb[0]; ?>">
<?php endif; ?>

<?php setup_postdata($post) ?>
<meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>"/>
<meta name="description" content="<?php echo strip_tags( get_the_excerpt() ); ?>" />
<?php if ( has_tag() ): ?>
<?php $tags = get_the_tags();
$kwds = array();
foreach($tags as $tag){
  $kwds[] = $tag->name;
}	?>
<meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
<?php endif; ?>
<?php else: ?><!--個別ページ以外のメタデータ(TOPページ・記事一覧ページなど)-->

<meta property="og:type" content="website">
<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
<?php
$http = is_ssl() ? 'https' . '://' : 'http' . '://';
$url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
?>
<meta property="og:url" content="<?php echo $url; ?>">
<meta property="og:description" content="<?php bloginfo( 'description' ) ?>">
<meta property="og:image" content="表示したい画像のパス">

  <meta name="description" content="<?php bloginfo( 'description' ); ?>">
  <?php $allcats = get_categories();
  $kwds = array();
  foreach($allcats as $allcat) {
    $kwds[] = $allcat->name;
  } ?>
  <meta name="keywords" content="<?php echo implode( ',',$kwds ); ?>">
<?php endif; ?>

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
