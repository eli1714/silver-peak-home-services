<?php
/**
 * Template Name: Services Overview
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<?php get_template_part('template-parts/services/overview', 'hero'); ?>
<?php get_template_part('template-parts/services/overview', 'grid'); ?>
<?php get_template_part('template-parts/services/service', 'area-note'); ?>
<?php get_template_part('template-parts/services/service', 'cta-strip'); ?>
<?php
get_footer();
