<?php
/**
 * The template for displaying all single post page
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
        // Start the loop.
        while (have_posts()): the_post();

            get_template_part('content', get_post_format());

            ?>

            <!-- post navigation -->
            <div class="post_navigation">
                <?php 
                if (get_previous_post()): ?>
                    <div class="alignleft"><?php previous_post_link('%link', '&laquo; %title'); ?></div>
                <?php 
                endif;
                
                if (get_next_post()): ?>
                    <div class="alignright"><?php next_post_link('%link', '%title &raquo;'); ?></div>
                <?php 
                endif; 
                ?>
            </div>
            <!-- /post navigation -->
        <?php
        endwhile;
    else :
        get_template_part('content', 'none');
    endif;
  ?>
  </div><!-- /container -->
<section>

<?php get_footer(); ?>
