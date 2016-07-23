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
//echo __FILE__;
?>

<section>
  <div class="container">

    <?php
    if (have_posts()) :
        if (is_archive()) : ?>
            <h2 class="title"><?php single_tag_title( ); ?>アーカイブ</h2>
        <?php endif; ?>

        <div class="entry-longitudina post-list">
          <ul>
            <?php
            while (have_posts()) : the_post();
                $title = get_the_title();
                ?>
                <li>
                    <a href="<?php echo esc_url(get_permalink()); ?>" class="image">
                    <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail('medium', array('alt' => $title, 'class' => 'image' ));
                    else :
                        ?><img src="<?php bloginfo('template_directory'); ?>/images/thumbnail_dummy_small.png" alt="<?php echo $title ?>" class="image"><?php
                    endif;
                    ?>
                    </a>
                    <div class="description">
                        <?php the_title('<h3>', '</h3>'); ?>
                        <p class="multiple-lines"><?php echo get_the_custom_content(get_the_excerpt(), 120); ?></p>
                        <p><a href="<?php echo esc_url(get_permalink()); ?>">詳しく見る</a></p>
                        <p class="data data-margin-top">
                            <i class="fa fa-calendar" aria-hidden="true"></i><?php echo get_the_date(); ?>
                            <i class="fa fa-user data-margin" aria-hidden="true"></i><?php the_author(); ?>
                            <i class="fa fa-tags data-margin" aria-hidden="true"></i><?php the_tags('Tag : ',', '); ?>
                        </p>
                    </div>
                </li>
            <?php endwhile; ?>
          </ul>
        </div>

        <?php
        if ($wp_query -> max_num_pages > 1) : ?>
            <div class="navigation">
                <div class="alignleft"><?php next_posts_link('&laquo; PREV'); ?></div>
                <div class="alignright"><?php previous_posts_link('NEXT &raquo;'); ?></div>
            </div>
        <?php 
        endif;
    else :
        get_template_part( 'templates/content', 'none' );
    endif;

    ?>
  </div><!-- /container -->
<section>

<?php get_footer(); ?>
