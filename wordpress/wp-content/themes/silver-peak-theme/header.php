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
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>

                <div class="site-branding__text">
                    <?php if (is_front_page() && is_home()) : ?>
                        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <?php else : ?>
                        <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                    <?php endif; ?>

                    <?php $description = get_bloginfo('description', 'display'); ?>
                    <?php if ($description || is_customize_preview()) : ?>
                        <p class="site-description"><?php echo esc_html($description); ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <nav class="primary-nav" aria-label="<?php esc_attr_e('Primary navigation', 'silver-peak-theme'); ?>">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'primary-menu',
                    'fallback_cb'    => false,
                ]);
                ?>
            </nav>
        </div>
    </header>

    <main id="main-content" class="site-main">
