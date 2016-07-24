<?php
/**
 * The template for displaying all static page
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage ItoArtsFarm2016
 * @since ItoArtsFarm2016 1.0
 */
get_header();
//echo __FILE__;
?>
<section>
<div class="container">

<?php 
if (have_posts()):

    while (have_posts()) : the_post();
        ?>
        <?php the_title('<h2 class="title">', '</h2>'); ?>

        <?php the_content(); ?>
        
        <?php 
        $args = array(
            'before' => '<div class="page-link">',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
        );
        wp_link_pages($args);
        ?>

    <?php 
    endwhile;
else :
    get_template_part('content', 'none');
endif;
?>

</div><!-- /container -->
</section>

<?php get_footer(); ?>
