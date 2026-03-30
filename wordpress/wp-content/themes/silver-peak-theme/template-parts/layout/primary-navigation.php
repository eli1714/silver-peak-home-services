<?php
/**
 * Primary navigation block.
 *
 * @package SilverPeakTheme
 */
?>
<div class="site-header__actions">
    <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-menu-panel">
        <span class="screen-reader-text"><?php esc_html_e('Toggle navigation', 'silver-peak-theme'); ?></span>
        <span class="nav-toggle__label"><?php esc_html_e('Menu', 'silver-peak-theme'); ?></span>
    </button>

    <div id="primary-menu-panel" class="primary-nav-wrap">
        <nav class="primary-nav" aria-label="<?php esc_attr_e('Primary navigation', 'silver-peak-theme'); ?>">
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'primary-menu',
                'fallback_cb'    => 'silver_peak_theme_menu_fallback',
            ]);
            ?>
        </nav>

        <a class="button button--primary site-header__cta" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></a>
    </div>
</div>
