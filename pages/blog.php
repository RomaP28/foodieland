<?php
/* Template Name: Blog */

get_header(); ?>

    <main class="blogPage">
        <div class="container">
            <h1>Blog & Article</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <div class="wrapper">
                    <label>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search article, news or recipe &hellip;', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="btn search-submit"><?php echo esc_attr_x( 'Search', 'submit button' ); ?></button>
                </div>
            </form>

            <div class="main-content">
                <div class="posts">
                  <?php $query = new WP_Query( array(
                    'post_type' => 'post',
                    'posts_per_page' => 1,
                  ));

                  if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post();?>
                        <div class="post">
                            <div class="img-wrap">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>">
                            </div>
                            <div class="info">
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
                                <?php the_excerpt();?>
                                <div class="bottom">
                                    <div class="author">
                                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/wade-warren.webp'; ?>" alt="Wade Warren">
                                        <span>Wade Warren</span>
                                    </div>
                                    <time>
                                        <?php echo the_date('d F Y'); ?>
                                    </time>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
              <?php echo get_template_part('template-parts/side-recipes');?>
            </div>

        </div>
      <?php echo get_template_part('template-parts/subscribe-form');?>
    </main>

<?php get_footer(); ?>