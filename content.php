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
//echo __FILE__;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php
    $title = get_the_title();

    if (is_single()) :
        the_title('<h2 class="post-title">', '</h1>');
    else :
        the_title(sprintf('<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
    endif;

    if (has_post_thumbnail()) :
        the_post_thumbnail('thumbnail-800', array('alt' => $title));
    else :
        ?><img src="<?php bloginfo('template_directory'); ?>/images/thumbnail-dammy.png" alt="<?php echo $title ?>" class="entry-image"><?php
    endif;

    ?>

    <p class="post-data data">
        <i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date(); ?>
        <i class="fa fa-user data-margin" aria-hidden="true"></i><?php the_author(); ?>
        <i class="fa fa-tags data-margin" aria-hidden="true"></i><?php the_tags('Tag : ',', '); ?>
    </p>

    <?php the_content('続きを読む &raquo;'); ?>

    <?php
    wp_link_pages(array(
        'before'      => '<div class="page-link">',
        'after'       => '</div>',
        'link_before' => '<span>',
        'link_after'  => '</span>',
    ));
    ?>
</article><!-- #post-## -->
