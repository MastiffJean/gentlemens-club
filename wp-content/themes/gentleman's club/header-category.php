<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/page_logo.png" type="image/png">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/logo.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/category.css" />

    <title><?php bloginfo('name'); ?> <?php wp_title(" | "); ?></title>

</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <div id="header">
        <div id="logo" class="logo">
            <a href="<?php echo site_url('/main'); ?>">
                <img id="logo-img" src="<?php echo get_template_directory_uri(); ?>/img/temp_w_s.png" alt="" style="width: 250px;">
            </a>
            <div id="logo-text">
                <p>
                    <?php
                    $str = get_bloginfo('description');
                    $res = wordwrap($str, 15, "<br>\n", false);
                    echo $res;
                    ?>
                </p>
                <br>
                <p>
                    <?php
                    $str = wp_title("", false);
                    $res = wordwrap($str, 21, "<br>\n", false);
                    echo $res;
                    ?>
                </p>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="container">
            <div class="stick stick-1"></div>
            <div class="stick stick-2"></div>
            <div class="stick stick-3"></div>
        </div>
    </div>