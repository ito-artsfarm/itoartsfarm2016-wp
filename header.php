<?php
/**
 * Version    : 1.2.0
 * Author     : inc2734
 * Author URI : http://2inc.org
 * Created    : April 17, 2015
 * Modified   : August 30, 2015
 * License    : GPLv2 or later
 * License URI: license.txt
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head prefix="og: http://ogp.me/ns# <?php echo ( is_single() || is_page() ) ? 'fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#' : 'fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#' ?>">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width">
<meta name="author" content="糸島芸農2016 実行委員会">
<meta name="description" content="自然豊かな糸島二丈松末地区で行われる、国内外の作家が集まり作品を展示する芸術の祭典、今年もやります。">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" media="all" rel="stylesheet" type="text/css">
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css" media="all" rel="stylesheet" type="text/css">
<link rel="apple-touch-icon" sizes="57x57"   href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-57x57-precomposed.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon" sizes="72x72"   href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-144x144-precomposed.png">
<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
<![endif]-->
<?php //wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header">
  <header>
    <div class="header-inner">
      <h1 class="header-inner-left">
        糸島国際芸術祭2016 糸島芸農<br>
        <span class="english">Itoshima International Art Festival 2016 Itoshima Arts Farm</span>
      </h1>
      <div class="navigation header-inner-right">
        <nav>
          <ul>
            <li>
              <a href="<?php echo home_url('/about/'); ?>" class="root">糸島芸農とは？</a>
              <ul>
                <li><a href="#">目的と概要</a></li>
                <li><a href="#">「発酵する地平」とは</a></li>
                <li><a href="#">プレスリリース</a></li>
              </ul>
            </li>
            <li>
              <a href="#" class="root">開催概要</a>
              <ul>
                <li><a href="#">アーティスト</a></li>
                <li><a href="#">イベント&nbsp;/&nbsp;スケジュール</a></li>
              </ul>
            </li>
            <li><a href="#" class="root">プロジェクト</a></li>
            <li>
              <a href="#" class="root">運営</a>
              <ul>
                <li><a href="<?php echo home_url('/member'); ?>">運営メンバー</a></li>
                <li><a href="<?php echo home_url('/blog/'); ?>">スタッフブログ&nbsp;/&nbsp;ニュース</a></li>
                <li><a href="#">お問い合わせ</a></li>
                <li><a href="#">これまでの開催</a></li>
              </ul>
            <li><a href="#" class="ticket">チケット購入</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
  <div class="copy">
    <h2>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/copy.png" alt="発酵する地平" width="313">
      <span class="copy-english">fermenting perspectives</span>
    </h2>
    <p>自然豊かな糸島二丈松末地区で行われる、<br>国内外の作家が集まり作品を展示する芸術の祭典、今年もやります。</p>
    <p class="header-time">2016年10月&nbsp;開催。</p>
  </div>
  <div class="news">
    <h2>新着情報</h2>
    <?php get_template_part( 'latest-news-posts' ); ?>
  </div>
</div><!-- ./header -->
