<?php
/**
 * Service area note.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
?>
<section class="service-section section-spacing" aria-labelledby="service-area-note-title">
    <div class="site-container">
        <div class="service-area-note">
            <p class="eyebrow"><?php esc_html_e('Service Area', 'silver-peak-theme'); ?></p>
            <h2 id="service-area-note-title"><?php echo esc_html($service_data['area_heading']); ?></h2>
            <p><?php echo esc_html($service_data['area_body']); ?></p>
        </div>
    </div>
</section>
