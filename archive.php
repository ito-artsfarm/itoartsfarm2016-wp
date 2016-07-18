<?php
/**
 * The template for displaying archive page
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage ItoArtsFarm2016
 * @since ItoArtsFarm2016 1.0
 */
get_header();
echo __FILE__;
?>
<!-- container -->
<div class="container">
<?php 
    if (have_posts()) : // WordPress ループ
        while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                <h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
                
                <?php the_content(); ?>
                
                <?php 
                $args = array(
                    'before' => '<div class="page-link">',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                );
                wp_link_pages($args); ?>
                
            </div>
        <?php 
        endwhile;
    else :
        get_template_part('content', 'none');
    endif;
?>
</div>
<!-- /container -->

<?php get_footer(); ?>
