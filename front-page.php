<?php get_header() ?>

<main>
    <section class="hero">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="featured">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/featured.webp'?>" alt="featured">
                    </div>
                    <div class="content">
                        <div class="cat">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/hot.webp'; ?>" alt="hot recipes">
                            <?php _e('Hot Recipes', 'foodieland'); ?>
                        </div>
                        <h2>
                          <?php _e('Spicy delicious and chicken wings', 'foodieland'); ?>
                        </h2>
                        <p class="subtitle">
                            Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim
                        </p>
                        <ul class="tags">
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="timer">
                                30 Minutes
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="fork knife">
                                Chicken
                            </li>
                        </ul>
                        <div class="bottom">
                            <div class="author">
                                <div class="img-wrap">
                                    <img src="<?php echo get_template_directory_uri() . '/src/app/img/author.webp'; ?>" alt="">
                                </div>
                                <div class="name">
                                    <h4>John Smith</h4>
                                    <p>15 March 2022</p>
                                </div>
                            </div>
                            <div class="video">
                                <a href="#" class="btn">View Recipes</a>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/poster.webp'; ?>" alt="poster">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/featured.webp'?>" alt="featured">
                    </div>
                    <div class="content">
                        <div class="cat">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/hot.webp'; ?>" alt="hot recipes">
                            Hot Recipes
                        </div>
                        <h2>
                            Spicy delicious chicken wings
                        </h2>
                        <p class="subtitle">
                            Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim
                        </p>
                        <ul class="tags">
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="timer">
                                30 Minutes
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="fork knife">
                                Chicken
                            </li>
                        </ul>
                        <div class="bottom">
                            <div class="author">
                                <div class="img-wrap">
                                    <img src="<?php echo get_template_directory_uri() . '/src/app/img/author.webp'; ?>" alt="">
                                </div>
                                <div class="name">
                                    <h4>John Smith</h4>
                                    <p>15 March 2022</p>
                                </div>
                            </div>
                            <div class="video">
                                <a href="#" class="btn">View Recipes</a>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/poster.webp'; ?>" alt="poster">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="featured">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/featured.webp'?>" alt="featured">
                    </div>
                    <div class="content">
                        <div class="cat">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/hot.webp'; ?>" alt="hot recipes">
                            Hot Recipes
                        </div>
                        <h2>
                            Spicy delicious chicken wings
                        </h2>
                        <p class="subtitle">
                            Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim
                        </p>
                        <ul class="tags">
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="timer">
                                30 Minutes
                            </li>
                            <li>
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="fork knife">
                                Chicken
                            </li>
                        </ul>
                        <div class="bottom">
                            <div class="author">
                                <div class="img-wrap">
                                    <img src="<?php echo get_template_directory_uri() . '/src/app/img/author.webp'; ?>" alt="">
                                </div>
                                <div class="name">
                                    <h4>John Smith</h4>
                                    <p>15 March 2022</p>
                                </div>
                            </div>
                            <div class="video">
                                <a href="#" class="btn">View Recipes</a>
                            </div>
                        </div>
                    </div>
                    <div class="poster">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/poster.webp'; ?>" alt="poster">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <div class="title">
                <h2> <?php _e('Categories', 'foodieland'); ?></h2>
                <a href="#" class="btn">View All Categories</a>
            </div>
        </div>
        <?php
        $categories = get_terms( array(
          'taxonomy'   => 'category',
          'post_type'  => 'recipes',
          'number' => 6,
          'hide_empty' => false,
        ) );

        if(!empty($categories)):
        ?>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($categories as $cat):
                      $cat_image = get_field('cat_image', 'category_'. $cat->term_id);
                      $term_link = get_term_link( $cat )
                    ?>
                        <a href="#" class="swiper-slide" style="background-image: linear-gradient(to bottom, rgba(112, 130, 70, 0), rgba(112, 130, 70,.10))">
                            <?php if(isset($cat_image['url']) && !empty($cat_image['url'])): ?>
                                <img src="<?php echo $cat_image['url']; ?>" alt="<?php echo $cat->name; ?>">
                                <img class="shadow" src="<?php echo $cat_image['url']; ?>" alt="<?php echo $cat->name; ?>">
                            <?php endif; ?>
                            <p class="cat-title"><?php echo $cat->name; ?></p>
                        </a>
                    <?php endforeach; ?>
<!--                    <a href="#" class="swiper-slide" style="background-image: linear-gradient(to bottom, rgba(108, 198, 63, 0), rgba(108, 198, 63,.10))">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/src/app/img/vegan.webp' ?><!--" alt="vegan">-->
<!--                        <img class="shadow" src="--><?php //echo get_template_directory_uri() . '/src/app/img/vegan.webp' ?><!--" alt="breakfast">-->
<!--                        <p class="cat-title">Vegan</p>-->
<!--                    </a>-->
<!--                    <a href="#" class="swiper-slide" style="background-image: linear-gradient(to bottom, rgba(204, 38, 27, 0), rgba(204, 38, 27,.10))">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/src/app/img/meat.webp' ?><!--" alt="meat">-->
<!--                        <img class="shadow" src="--><?php //echo get_template_directory_uri() . '/src/app/img/meat.webp' ?><!--" alt="breakfast">-->
<!--                        <p class="cat-title">Meat</p>-->
<!--                    </a>-->
<!--                    <a href="#" class="swiper-slide" style="background-image: linear-gradient(to bottom, rgba(240, 158, 0, 0), rgba(240, 158, 0,.10))">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/src/app/img/dessert.webp' ?><!--" alt="dessert">-->
<!--                        <img class="shadow" src="--><?php //echo get_template_directory_uri() . '/src/app/img/dessert.webp' ?><!--" alt="breakfast">-->
<!--                        <p class="cat-title">Dessert</p>-->
<!--                    </a>-->
<!--                    <a href="#" class="swiper-slide" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, .05))">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/src/app/img/lunch.webp' ?><!--" alt="lunch">-->
<!--                        <img class="shadow" src="--><?php //echo get_template_directory_uri() . '/src/app/img/lunch.webp' ?><!--" alt="breakfast">-->
<!--                        <p class="cat-title">Lunch</p>-->
<!--                    </a>-->
<!--                    <a href="#" class="swiper-slide" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, .05))">-->
<!--                        <img src="--><?php //echo get_template_directory_uri() . '/src/app/img/chocolate.webp' ?><!--" alt="chocolate">-->
<!--                        <img class="shadow" src="--><?php //echo get_template_directory_uri() . '/src/app/img/chocolate.webp' ?><!--" alt="breakfast">-->
<!--                        <p class="cat-title">Chocolate</p>-->
<!--                    </a>-->
                </div>
            </div>

        <?php endif; ?>
    </section>
    <section class="recipes">
        <div class="container">
            <h2>Simple and tasty 4.8</h2>
            <p class="subtitle">Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim </p>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe1.webp'?>" alt="recipe">
                        </div>
                        <h3>
                            <a href="#">Big and Juicy Wagyu Beef Cheeseburger</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Snack
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe2.webp'?>" alt="">
                        </div>
                        <h3>
                            <a href="#">Fresh Lime Roasted Salmon with Ginger Sauce</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Fish
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe3.webp'?>" alt="">
                        </div>
                        <h3>
                            <a href="#">Strawberry Oatmeal Pancake with Honey Syrup</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Breakfast
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe4.webp'?>" alt="">
                        </div>
                        <h3>
                            <a href="#">Fresh and Healthy Mixed Mayonnaise Salad</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Healthy
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe5.webp'?>" alt="">
                        </div>
                        <h3>
                            <a href="#">Chicken Meatballs with Cream Cheese</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Meat
                            </div>
                        </div>
                    </div>
                    <a href="#" target="_blank" rel="noopener noreferrer" class="swiper-slide commercial">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/ads.webp'; ?>" alt="">
                    </a>
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe6.webp'?>" alt="">
                        </div>
                        <h3>
                            <a href="#">Fruity Pancake with Orange & Blueberry</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Sweet
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe7.webp'?>" alt="">
                        </div>
                        <h3>
                            <a href="#">The Best Easy One Pot Chicken and Rice</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Snack
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri(). '/src/app/img/recipe8.webp'?>" alt="">
                        </div>
                        <h3>
                            <a href="#">The Creamiest Creamy Chicken and Bacon Pasta</a>
                        </h3>
                        <div class="bottom">
                            <div class="time">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                30 Minutes
                            </div>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                Noodles
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="chef">
        <div class="container">
            <div class="info">
                <h2>
                    Everyone can be a<br>
                    chef in their own kitchen
                </h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim
                </p>
                <a href="#" class="btn">Learn More</a>
            </div>
            <div class="img-wrap">
                <img src="<?php echo get_template_directory_uri() . '/src/app/img/chef.webp'; ?>" alt="chef">
            </div>
        </div>
    </section>
    <section class="instagram-section">
        <h2>
            Check out @foodieland on Instagram
        </h2>
        <div class="subtitle">
            Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim
        </div>
        <div class="container">
            <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="item">
                <img src="<?php echo get_template_directory_uri().'/src/app/img/Post.webp';?>" alt="">
            </a>
            <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="item">
                <img src="<?php echo get_template_directory_uri().'/src/app/img/Post-1.webp';?>" alt="">
            </a>
            <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="item">
                <img src="<?php echo get_template_directory_uri().'/src/app/img/Post-2.webp';?>" alt="">
            </a>
            <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="item">
                <img src="<?php echo get_template_directory_uri().'/src/app/img/Post-3.webp';?>" alt="">
            </a>
        </div>
        <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" class="btn">Visit Our Instagram</a>
    </section>
    <section class="day-recipes">
        <div class="container">
            <div class="title">
                <h2>
                    Try this delicious recipe<br>
                    to make your day
                </h2>
                <p class="subtitle">
                    Lorem ipsum dolor sit amet, consectetuipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqut enim ad minim
                </p>
            </div>

          <?php $the_query = new WP_Query( array(
            'orderby' =>'date',
            'order' =>'DESC',
            'posts_per_page'=> -1,
            'post_type' => 'recipe',
            )
          ) ?>

            <div class="swiper">
                <div class="swiper-wrapper">
                  <?php while ($the_query -> have_posts()) : $the_query -> the_post();
                  $time = get_field('time', get_the_ID());  ?>

                    <div class="swiper-slide">
                        <div class="add-to-favorite"></div>
                        <div class="img-wrap">
                            <?php the_post_thumbnail(); ?> </div>
                        <h3>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="bottom">
                            <?php if(!empty($time)): ?>
                                <div class="time">
                                    <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="time">
                                    <?php echo $time; ?>
                                </div>
                            <?php endif; ?>
                            <div class="cat">
                                <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="category">
                                <?php the_category(); ?>
                            </div>
                        </div>
                    </div>

                  <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
   <?php echo get_template_part('template-parts/subscribe-form');?>
</main>



<?php get_footer(); ?>
