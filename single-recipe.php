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
    </section>

</main>



<?php

get_footer();

?>
