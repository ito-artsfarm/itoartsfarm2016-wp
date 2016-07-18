<?php
/**
 * Version    : 1.0.0
 * Author     : Balloonbros Keita Kawamoto, Shohei Yamasaki & Junji Manno
 * Author URI : http://ito-artsfarm.com/
 * Created    : July 18, 2016
 * Modified   : July 18, 2016
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
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
  <link rel="apple-touch-icon" sizes="57x57"   href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" sizes="72x72"   href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon-144x144-precomposed.png">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
  <![endif]-->

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/header-scroll.js"></script>
  <!-- drawer.css -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/drawer.min.css">
  <!-- jquery & iScroll -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/iscroll.min.js"></script>
  <!-- drawer.js -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/drawer.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/drawer.js"></script>
  <!-- ページ内リンク遷移時ヘッダーの高さ分ずらす・滑らかに動かす -->
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-top-header-hight.js"></script>

  <?php //wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if (is_front_page()): ?>

<div class="header header-fullscreen">
  <header>
    <div class="header-inner header-inner-hidden" id="header">
      <h1 class="header-inner-left">
        <a href="<?php echo home_url('/'); ?>">糸島国際芸術祭2016 糸島芸農<br><span class="english">Itoshima International Art Festival 2016 Itoshima Arts Farm</span></a>
      </h1>

      <div class="drawer drawer--right">
          <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
          </button>
          <nav class="drawer-nav" role="navigation">
            <ul class="drawer-menu">
              <li><a href="<?php echo home_url('/#ito-about'); ?>" class="drawer-menu-item">糸島芸農とは？</a></li>
              <li><a href="<?php echo home_url('/#ito-about'); ?>" class="drawer-menu-item">目的と概要</a></li>
              <li><a href="<?php echo home_url('/#ito-theme'); ?>" class="drawer-menu-item">「発酵する地平」とは</a></li>
              <li><a href="<?php echo home_url('/sample.pdf'); ?>" class="drawer-menu-item">プレスリリース</a></li>
              <li><a href="<?php echo home_url('/#ito-overview'); ?>" class="drawer-menu-item">開催概要</a></li>
              <li><a href="<?php echo home_url('/#ito-artist'); ?>" class="drawer-menu-item">アーティスト</a></li>
              <li><a href="<?php echo home_url('/#ito-schedule'); ?>" class="drawer-menu-item">イベント&nbsp;/&nbsp;スケジュール</a></li>
              <li><a href="<?php echo home_url('/#ito-project'); ?>" class="drawer-menu-item">プロジェクト</a></li>
              <li><a href="<?php echo home_url('/page.html'); ?>" class="drawer-menu-item">運営</a></li>
              <li><a href="<?php echo home_url('/member/'); ?>" class="drawer-menu-item">運営メンバー</a></li>
              <li><a href="<?php echo home_url('/blog/'); ?>" class="drawer-menu-item">スタッフブログ&nbsp;/&nbsp;ニュース</a></li>
              <li><a href="<?php echo home_url('/#ito-contact'); ?>" class="drawer-menu-item">お問い合わせ</a></li>
              <li><a href="<?php echo home_url('/#ito-history'); ?>" class="drawer-menu-item">これまでの開催</a></li>
              <li><a href="<?php echo home_url('/#ito-ticket'); ?>" class="drawer-menu-item">チケット購入</a></li>
          </nav>
      </div>

      <div class="navigation header-inner-right">
        <nav>
          <ul>
            <li>
              <a href="<?php echo home_url('/#ito-about'); ?>" class="root">糸島芸農とは？</a>
              <ul>
                <li><a href="<?php echo home_url('/#ito-about'); ?>">目的と概要</a></li>
                <li><a href="<?php echo home_url('/#ito-thema'); ?>">「発酵する地平」とは</a></li>
                <li><a href="<?php echo home_url('/sample.pdf'); ?>">プレスリリース</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo home_url('/#ito-overview'); ?>" class="root">開催概要</a>
              <ul>
                <li><a href="<?php echo home_url('/#ito-artist'); ?>">アーティスト</a></li>
                <li><a href="<?php echo home_url('/#ito-schedule'); ?>">イベント&nbsp;/&nbsp;スケジュール</a></li>
              </ul>
            </li>
            <li><a href="<?php echo home_url('/#ito-project'); ?>" class="root">プロジェクト</a></li>
            <li>
              <a href="<?php echo home_url('/page.html'); ?>" class="root">運営</a>
              <ul>
                <li><a href="<?php echo home_url('/member'); ?>">運営メンバー</a></li>
                <li><a href="<?php echo home_url('/blog/'); ?>">スタッフブログ&nbsp;/&nbsp;ニュース</a></li>
                <li><a href="<?php echo home_url('/#ito-contact'); ?>">お問い合わせ</a></li>
                <li><a href="<?php echo home_url('/#ito-history'); ?>">これまでの開催</a></li>
              </ul>
            <li><a href="#ito-ticket" class="ticket">チケット購入</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <div class="copy">
    <h2>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/copy.png" alt="発酵する地平" width="313">
      <span class="copy-english">fermenting perspectives</span>
    </h2>
    <p>自然豊かな糸島二丈松末地区で行われる、<br>国内外の作家が集まり作品を展示する芸術の祭典、今年もやります。</p>
    <p class="header-time">2016年10月&nbsp;開催。</p>
    <div class="header-scroll">
      <i class="fa fa-arrow-circle-down fa-1x entr-link-icon"></i>
      <a href="#ito-about">スクロールして詳細を見る</a>
    </div>
  </div>
  <div class="news">
    <h2>新着情報</h2>
    <?php get_template_part( 'templates/latest-news-posts' ); ?>
  </div>
</div><!-- ./header -->

<?php else: ?>

<div class="header-page">
  <div class="header-inner">
    <header>
      <h1 class="header-inner-left">
        <a href="<?php echo home_url('/'); ?>">糸島国際芸術祭2016 糸島芸農<br><span class="english">Itoshima International Art Festival 2016 Itoshima Arts Farm</span></a>
      </h1>
      <div class="navigation header-inner-right">
        <nav>
          <ul>
            <li>
              <a href="<?php echo home_url('/#ito-about'); ?>" class="root">糸島芸農とは？</a>
              <ul>
                <li><a href="<?php echo home_url('/#ito-about'); ?>">目的と概要</a></li>
                <li><a href="<?php echo home_url('/#ito-theme'); ?>">「発酵する地平」とは</a></li>
                <li><a href="<?php echo home_url('#'); ?>">プレスリリース</a></li>
              </ul>
            </li>
            <li>
              <a href="<?php echo home_url('/#ito-overview'); ?>" class="root">開催概要</a>
              <ul>
                <li><a href="<?php echo home_url('/#ito-artist'); ?>">アーティスト</a></li>
                <li><a href="<?php echo home_url('/#ito-schedule'); ?>">イベント&nbsp;/&nbsp;スケジュール</a></li>
              </ul>
            </li>
            <li><a href="<?php echo home_url('/#ito-project'); ?>" class="root">プロジェクト</a></li>
            <li>
              <a href="<?php echo home_url('#'); ?>" class="root">運営</a>
              <ul>
                <li><a href="<?php echo home_url('/member'); ?>">運営メンバー</a></li>
                <li><a href="<?php echo home_url('/blog/'); ?>">スタッフブログ&nbsp;/&nbsp;ニュース</a></li>
                <li><a href="<?php echo home_url('#'); ?>">お問い合わせ</a></li>
                <li><a href="<?php echo home_url('#'); ?>">これまでの開催</a></li>
              </ul>
            <li><a href="<?php echo home_url('#'); ?>" class="ticket">チケット購入</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </div>
</div><!-- ./header -->

<?php endif; ?>