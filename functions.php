<?php
// RSS2 の feed リンクを出力
add_theme_support( 'automatic-feed-links' );
// カスタムメニューを有効化
add_theme_support( 'menus' );
// カスタムメニューの「場所」を設定
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
// wp_head 情報
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'feed_links_extra', 3);

add_theme_support('post-thumbnails');
add_image_size('thumbnail-600', 600, 400, true);
add_image_size('thumbnail-800', 800, 600, true);

/**
 * get_the_custom_content
 * 記事本文の抜粋を取得
 * @param string $content
 * @param integer $length
 */
function get_the_custom_content( $content, $length = 100 ) {
    $str = strip_tags($content);
    $content = mb_substr($str, 0, $length);
    if ( mb_strlen($str) > $length ) $content = $content . '...';

    return $content;
}