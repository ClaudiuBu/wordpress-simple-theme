<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header >
    <div class="container">
        <h1><?php bloginfo(); ?></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>
    </header>