<?php
/**
 * Front page template.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="home-hero section-spacing">
    <div class="site-container">
        <div class="page-intro">
            <p class="eyebrow"><?php esc_html_e('Silver Peak Home Services', 'silver-peak-theme'); ?></p>
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php esc_html_e('Homepage scaffold ready for hero, services, trust signals, and call-to-action sections.', 'silver-peak-theme'); ?></p>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/home/home', 'sections'); ?>
<?php
get_footer();
