<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodieland</title>

    <?php wp_head(); ?>

    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-Regular.woff'; ?>" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-Regular.woff2'; ?>" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-Medium.woff'; ?>" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-Medium.woff2'; ?>" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-SemiBold.woff'; ?>" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-SemiBold.woff2'; ?>" as="font" type="font/woff2" crossorigin="anonymous">


</head>


<body>
    <header>
        <div class="container">
            <nav>
                <a class="logo" href="/">
                    <img src="<?php echo get_field('logo', 'option'); ?>" alt="Foodieland">
                </a>
              <?php wp_nav_menu(array(
                    'theme_location' => 'header_menu'
              ));?>

            </nav>
        </div>
    </header>