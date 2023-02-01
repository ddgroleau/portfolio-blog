<?php
/**
 * Contains Header
 */
?>
<!DOCTYPE html>
<html <?= language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="<?= bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= the_title() . ' | Dan Groleau - Software Engineer' ?></title>
    <?= wp_head(); ?>
</head>
<body <?= body_class();?>>
<header>
    <h1>Blog</h1>
</header>
