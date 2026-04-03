<?php
/**
 * Service area note.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
$is_services_overview = is_page_template('template-services-overview.php');

$area_heading = $is_services_overview
    ? __('Serving Las Vegas homeowners and nearby communities', 'silver-peak-theme')
    : $service_data['area_heading'];

$area_body = $is_services_overview
    ? __('Service is available across Las Vegas, Henderson, Summerlin, Spring Valley, Enterprise, and nearby neighborhoods depending on project scope and scheduling.', 'silver-peak-theme')
    : $service_data['area_body'];
?>
<section class="service-section section-spacing" aria-labelledby="service-area-note-title">
    <div class="site-container">
        <div class="service-area-note<?php echo $is_services_overview ? ' service-area-note--overview' : ''; ?>">
            <p class="eyebrow"><?php esc_html_e('Service Area', 'silver-peak-theme'); ?></p>
            <h2 id="service-area-note-title"><?php echo esc_html($area_heading); ?></h2>
            <p><?php echo esc_html($area_body); ?></p>
        </div>
    </div>
</section>
