<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>
</head>

<body>

    <header>
        <h1>
            🍋 Lemonade
        </h1>

        <nav>
            <?php
            wp_page_menu()
                ?>
        </nav>
    </header>