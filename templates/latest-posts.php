<?php
/*
 * ブログ / トップページ
 */
$args = array(
  'posts_per_page' => 6,
  'post_type' => 'post'
);
$posts = get_posts($args);

if($posts):
  echo "<ul>";
  foreach ($posts as $post):
    setup_postdata($post);
    $title = get_the_title();
    ?>
    <li>
      <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) :
          $image_id = get_post_thumbnail_id();
          $image_url = wp_get_attachment_image_src($image_id, 'thumbnail-600'); ?>
          <div class="image" style="background-image: url(<?php echo $image_url[0]; ?>);">
        <?php else : ?>
          <img class="image" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/common/thumbnail_dummy.png);">
        <?php endif; ?>
          <div class="gradation">
            <p><?php echo get_the_date(); ?><br><?php echo $title; ?></p>
          </div>
        </div><!-- ./image -->
      </a>
    </li>
    <?php
  endforeach;
  echo "</ul>";
endif;

wp_reset_postdata();