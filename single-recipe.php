<?php

get_header();

?>

<main>
    <section class="title-section">
        <div class="container">
            <div class="left">
                <h1>
                  <?php the_title(); ?>
                </h1>
                <div class="bottom">
                    <div class="author">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/author.webp'; ?>" alt="author">
                        </div>
                        <div class="name">
                            <h4>John Smith</h4>
                            <p>15 March 2022</p>
                        </div>
                    </div>
                    <div class="time-box">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="timer">
                        </div>
                        <div class="info">
                            <p>PREP TIME</p>
                            <p class="time">15 Minutes</p>
                        </div>
                    </div>
                    <div class="time-box">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/timer.webp'; ?>" alt="timer">
                        </div>
                        <div class="info">
                            <p>COOK TIME</p>
                            <p class="time">15 Minutes</p>
                        </div>
                    </div>
                    <div class="time-box">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/forkknife.webp'; ?>" alt="timer">
                        </div>
                        <p class="time">Chicken</p>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="print">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/print.svg' ?>" alt="print">
                    </a>
                    <p>PRINT</p>
                </div>
                <div class="share">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/share.svg' ?>" alt="share">
                    </a>
                    <p>SHARE</p>
                </div>
            </div>
        </div>
    </section>
    <section class="info-section">
        <div class="container">
            <div class="video-block">
                <div class="video">
                    <img class="play" src="<?php echo get_template_directory_uri() . '/src/app/img/play.svg'; ?>" alt="play">
                    <img class="preview" src="<?php echo get_template_directory_uri() . '/src/app/img/preview.webp'; ?>" alt="preview">
                    <video controls muted playsinline autoplay>
                        <source src="<?php echo get_template_directory_uri() . '/src/app/img/video.mp4'; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="nutrition">
                    <h3>Nutrition Information</h3>
                    <div class="row">
                        <p class="name">Calories</p>
                        <p class="val">219.9 kcal</p>
                    </div>
                    <div class="row">
                        <p class="name">Total Fat</p>
                        <p class="val">10.7 g</p>
                    </div>
                    <div class="row">
                        <p class="name">Protein</p>
                        <p class="val">7.9 g</p>
                    </div>
                    <div class="row">
                        <p class="name">Carbohydrate</p>
                        <p class="val">22.3 g</p>
                    </div>
                    <div class="row">
                        <p class="name">Cholesterol</p>
                        <p class="val">37.4 mg</p>
                    </div>
                    <p class="note">
                        adipiscing elit, sed do eiusmod tempor<br>
                        incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
            <p class="bottom">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </section>
    <section class="ingredients">
        <div class="container">
            <div class="left">
                <h3>Ingredients</h3>
                <h4>For main dish</h4>
                <ul>
                    <li class="crossed"><img src="<?php echo get_template_directory_uri(). '/src/app/img/check.png'; ?>" alt="checked">Lorem ipsum dolor sit amet</li>
                    <li><img src="<?php echo get_template_directory_uri(). '/src/app/img/unchecked.svg'; ?>" alt="unchecked">Lorem ipsum dolor sit amet</li>
                    <li><img src="<?php echo get_template_directory_uri(). '/src/app/img/unchecked.svg'; ?>" alt="unchecked">Lorem ipsum dolor sit amet</li>
                    <li><img src="<?php echo get_template_directory_uri(). '/src/app/img/unchecked.svg'; ?>" alt="unchecked">Lorem ipsum dolor sit amet</li>
                    <li><img src="<?php echo get_template_directory_uri(). '/src/app/img/unchecked.svg'; ?>" alt="unchecked">Lorem ipsum dolor sit amet</li>
                </ul>
                <h4 class="sauce">For the sauce</h4>
                <ul>
                    <li><img src="<?php echo get_template_directory_uri(). '/src/app/img/unchecked.svg'; ?>" alt="unchecked">Lorem ipsum dolor sit amet</li>
                    <li><img src="<?php echo get_template_directory_uri(). '/src/app/img/unchecked.svg'; ?>" alt="unchecked">Lorem ipsum dolor sit amet</li>
                </ul>
            </div>
            <div class="other-recipe">
                <h3>Other Recipe</h3>
                <div class="items">
                    <div class="item">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/recipe5.webp'; ?>" alt="preview">
                        </div>
                        <div class="info">
                            <h5>Chicken Meatball with Creamy Chees...</h5>
                            <p>By Andreas Paula</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/recipe8.webp'; ?>" alt="preview">
                        </div>
                        <div class="info">
                            <h5>The Creamiest Creamy Chicken an...</h5>
                            <p>By Andreas Paula</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img-wrap">
                            <img src="<?php echo get_template_directory_uri() . '/src/app/img/recipe7.webp'; ?>" alt="preview">
                        </div>
                        <div class="info">
                            <h5>The Best Easy One Pot Chicken and Rice</h5>
                            <p>By Andreas Paula</p>
                        </div>
                    </div>
                    <a href="#" class="item commercial">
                        <img src="<?php echo get_template_directory_uri() . '/src/app/img/ads.webp'; ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="directions">
        <div class="container">
            <h3>Directions</h3>
        </div>

    </section>
</main>



<?php

get_footer();

?>
