<?php
/**
 * The main template file
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
    <!-- main -->
    <div id="main">
    <?php 
        if (have_posts()):
            if (is_home() && !is_front_page()) :
            ?>
                <header>
                    <h1 class=""><?php single_post_title(); ?></h1>
                </header>
            <?php
            endif;
            // Start the loop.
            while (have_posts()): the_post();
                get_template_part( 'content', get_post_format() );
            // End the loop.
            endwhile;
            // Previous/next page navigation.
            if ($wp_query -> max_num_pages > 1) : ?>
                <div class="navigation">
                    <div class="alignleft"><?php next_posts_link('&laquo; PREV'); ?></div>
                    <div class="alignright"><?php previous_posts_link('NEXT &raquo;'); ?></div>
                </div>
            <?php 
            endif;
        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'templates/content', 'none' );
        endif;
    ?>
    </div>
    <!-- /main -->
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>