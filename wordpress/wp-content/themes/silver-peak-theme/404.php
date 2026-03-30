<?php
/**
 * 404 template.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="content-area section-spacing">
    <div class="site-container content-narrow">
        <div class="page-intro">
            <p class="eyebrow"><?php esc_html_e('404', 'silver-peak-theme'); ?></p>
            <h1><?php esc_html_e('Page not found', 'silver-peak-theme'); ?></h1>
            <p><?php esc_html_e('The page you were looking for could not be found. Try searching or head back to the homepage.', 'silver-peak-theme'); ?></p>
        </div>

        <?php get_search_form(); ?>
    </div>
</section>
<?php
get_footer();
