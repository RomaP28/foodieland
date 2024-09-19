<?php get_header(); ?>


<main class="blogPage">
    <h1>Blog & Article</h1>
    <div class="container">
<?php

$query = new WP_Query( array(
  'post_type' => 'post',
  'posts_per_page' => 1,
) );

if ( $query->have_posts() ) :
  while ( $query->have_posts() ) : $query->the_post();?>
      <div class="singlePage__content">
        <h1 class="about__title--brown"><?php the_title()?></h1>
        <?php the_excerpt();?>
      </div>
  <?php endwhile; endif; ?>
    </div>
</main>




<?php get_footer(); ?>