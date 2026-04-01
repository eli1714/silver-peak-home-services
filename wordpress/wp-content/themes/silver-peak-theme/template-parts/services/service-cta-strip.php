<?php
/**
 * Service CTA strip.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
?>
<section class="service-section section-spacing" aria-labelledby="service-cta-title">
    <div class="site-container">
        <div class="cta-panel cta-panel--service">
            <div class="cta-panel__content">
                <p class="eyebrow"><?php echo esc_html($service_data['cta_eyebrow']); ?></p>
                <h2 id="service-cta-title"><?php echo esc_html($service_data['cta_title']); ?></h2>
                <p><?php echo esc_html($service_data['cta_body']); ?></p>
            </div>

            <div class="cta-panel__actions">
                <a class="button button--primary" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></a>
                <a class="button button--secondary" href="tel:5551234567"><?php esc_html_e('Call (555) 123-4567', 'silver-peak-theme'); ?></a>
            </div>
        </div>
    </div>
</section>
