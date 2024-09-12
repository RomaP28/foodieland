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


</main>



<?php

get_footer();

?>
