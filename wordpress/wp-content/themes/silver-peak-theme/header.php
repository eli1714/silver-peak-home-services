<?php
/**
 * Site header.
 *
 * @package SilverPeakTheme
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site-shell">
    <a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Skip to content', 'silver-peak-theme'); ?></a>

    <header class="site-header" aria-label="<?php esc_attr_e('Site header', 'silver-peak-theme'); ?>">
        <div class="site-container site-header__inner">
            <?php get_template_part('template-parts/layout/site', 'branding'); ?>
            <?php get_template_part('template-parts/layout/primary', 'navigation'); ?>
        </div>
    </header>

    <main id="main-content" class="site-main">
        <div class="site-content">
