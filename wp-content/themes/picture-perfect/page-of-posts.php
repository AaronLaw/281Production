<?php
/*
Template Name: PageOfPosts
*/
/*
Added 2012-01-03: by Aaron
Intent to display posts in a page (include posts in page)
ref: http://codex.wordpress.org/Pages
*/

get_header(); ?>

<?php
if (is_page()) {
  $cat=get_cat_ID($post->post_title); //use page title to get a category ID
  $posts = get_posts ("cat=$cat&showposts=5");
  if ($posts) {
    foreach ($posts as $post):
      setup_postdata($post); ?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <?php endforeach;
  }
}
?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>