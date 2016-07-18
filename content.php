<?php
/**
 * The default template for displaying content
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage ItoArtsFarm2016
 * @since ItoArtsFarm2016 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php
    if (is_single()) :
        the_title('<h1 class="entry-title mb20">', '</h1>');
    else :
        the_title(sprintf('<h2 class="entry-title mb20"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
    endif;

    $title = get_the_title();
    if (has_post_thumbnail()) :
        the_post_thumbnail('thumbnail', array('alt' => $title));
    else :
        ?><img src="<?php bloginfo('template_directory'); ?>/images/thumbnail-dammy.png" alt="<?php echo $title ?>" class="entry-image"><?php
    endif;

    ?>

    <p class="post-meta">
        <span class="post-date"><?php echo get_the_date(); ?></span>
        <span class="category">Category - <?php the_category(', ') ?></span>
        <span class="comment-num"><?php comments_popup_link('Comment : 0', 'Comment : 1', 'Comments : %'); ?></span>
    </p>

    <?php
    the_content('続きを読む &raquo;');

    wp_link_pages(array(
        'before'      => '<div class="page-link">',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
    ));

    // Author bio.
    if (is_single()): ?>
        <p class="footer-post-meta">
            <?php the_tags('Tag : ',', '); ?>
            <?php if (is_multi_author()): ?> 
            <span class="post-author">作成者 : <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a></span>
            <?php
            endif;
            ?>
        </p>
    <?php
    endif;
    ?>

</article><!-- #post-## -->
