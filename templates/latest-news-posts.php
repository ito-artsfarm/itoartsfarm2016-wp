<?php
/*
 * ニュース / トップページ
 */
$args = array(
  'posts_per_page' => 4,
  'post_type' => 'post',
  'category_name' => 'news'
);
$posts = get_posts($args);

if($posts):
  echo "<ul>";
  foreach ($posts as $post):
    setup_postdata($post);
    $title = get_the_title();
    ?>
    <li><?php echo get_the_date(); ?>&nbsp;<a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></li>
    <?php
  endforeach;
  echo "</ul>";
endif;

wp_reset_postdata();