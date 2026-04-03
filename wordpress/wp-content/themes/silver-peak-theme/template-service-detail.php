<?php
/**
 * Template Name: Service Detail
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<?php while (have_posts()) : the_post(); ?>
    <?php
    $service_data = silver_peak_theme_get_service_page_data();
    $should_render_intro = trim((string) get_the_content()) !== '';
    ?>
    <section class="service-page-hero section-spacing" aria-labelledby="service-page-title">
        <div class="site-container">
            <article id="post-<?php the_ID(); ?>" <?php post_class('service-page service-page--hero'); ?>>
                <div class="service-page__hero-layout">
                    <div class="service-page__hero-content">
                        <p class="eyebrow"><?php echo esc_html($service_data['hero_eyebrow']); ?></p>
                        <h1 id="service-page-title"><?php the_title(); ?></h1>
                        <p class="service-page__hero-lead"><?php echo esc_html($service_data['hero_lead']); ?></p>
                    </div>

                    <aside class="service-page__hero-card" aria-label="<?php esc_attr_e('Quick service contact details', 'silver-peak-theme'); ?>">
                        <h2><?php echo esc_html($service_data['hero_card_title']); ?></h2>
                        <p><?php echo esc_html($service_data['hero_card_body']); ?></p>
                        <a class="button button--primary" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></a>
                    </aside>
                </div>

                <?php if ($should_render_intro) : ?>
                    <div class="service-page__intro">
                        <?php the_content(); ?>
                    </div>
                <?php endif; ?>
            </article>
        </div>
    </section>

    <?php get_template_part('template-parts/services/detail', 'benefits'); ?>
    <?php get_template_part('template-parts/services/detail', 'problems'); ?>
    <?php get_template_part('template-parts/services/detail', 'process'); ?>
    <?php get_template_part('template-parts/services/detail', 'faq'); ?>
    <?php get_template_part('template-parts/services/service', 'area-note'); ?>
    <?php get_template_part('template-parts/services/service', 'cta-strip'); ?>
<?php endwhile; ?>
<?php
get_footer();
