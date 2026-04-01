<?php
/**
 * Template Name: Contact / Request a Quote
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/contact/hero'); ?>
    <?php get_template_part('template-parts/contact/info'); ?>
    <?php get_template_part('template-parts/contact/form'); ?>
    <?php get_template_part('template-parts/contact/hours-areas'); ?>
    <?php get_template_part('template-parts/contact/faq'); ?>
    <?php get_template_part('template-parts/contact/reassurance'); ?>
<?php endwhile; ?>
<?php
get_footer();
