<?php

get_header();

?>

<main>
    <div class="container">
        <div class="top">
            <h1>
              <?php the_title(); ?>
            </h1>
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
            </div>
        </div>

    </div>

</main>



<?php

get_footer();

?>
