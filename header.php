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
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-Medium.woff'; ?>" as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri() . '/src/app/fonts/Inter_24pt-SemiBold.woff'; ?>" as="font" type="font/woff" crossorigin="anonymous">


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

                <ul class="social-links">
                    <?php $facebook = get_field('facebook', 'option');
                    if(isset($facebook) && !empty($facebook)): ?>
                        <li class="facebook"><a href="<?php echo $facebook; ?>"></a></li>
                    <?php endif; $twitter = get_field('twitter', 'option');
                    if(isset($twitter) && !empty($twitter)): ?>
                         <li class="twitter"><a href="<?php echo $twitter; ?>"></a></li>
                    <?php endif; $instagram = get_field('instagram', 'option');
                    if(isset($instagram) && !empty($instagram)): ?>
                         <li class="instagram"><a href="<?php echo $instagram; ?>"></a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>