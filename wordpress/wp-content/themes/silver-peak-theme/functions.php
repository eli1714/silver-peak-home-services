<?php
/**
 * Theme setup and asset loading for Silver Peak Theme.
 *
 * @package SilverPeakTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

function silver_peak_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'silver-peak-theme'),
        'footer'  => __('Footer Menu', 'silver-peak-theme'),
    ]);
}
add_action('after_setup_theme', 'silver_peak_theme_setup');

function silver_peak_theme_scripts(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'silver-peak-theme-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $theme_version
    );

    wp_enqueue_script(
        'silver-peak-theme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'silver_peak_theme_scripts');

function silver_peak_theme_body_classes(array $classes): array
{
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }

    if (is_singular()) {
        $classes[] = 'is-singular-view';
    }

    return $classes;
}
add_filter('body_class', 'silver_peak_theme_body_classes');

function silver_peak_theme_menu_fallback(): void
{
    echo '<ul class="primary-menu primary-menu--fallback">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'silver-peak-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services')) . '">' . esc_html__('Services', 'silver-peak-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/about')) . '">' . esc_html__('About', 'silver-peak-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">' . esc_html__('Contact', 'silver-peak-theme') . '</a></li>';
    echo '</ul>';
}
