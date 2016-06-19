<?php
add_theme_support('post-thumbnails');
add_image_size('thumbnail-600', 600, 400, true);

/**
 * get_the_custom_content
 * 記事本文の抜粋を取得
 * @param string $content
 * @param integer $length
 */
function get_the_custom_content( $content, $length = 80 ) {
    $str = strip_tags($content);
    $content = mb_substr($str, 0, $length);
    if ( mb_strlen($str) > $length ) $content = $content . '...';

    return $content;
}