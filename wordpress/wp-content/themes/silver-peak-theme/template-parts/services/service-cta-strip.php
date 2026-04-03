<?php
/**
 * Service CTA strip.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
$contact = silver_peak_theme_get_contact_details();
$is_services_overview = is_page_template('template-services-overview.php');

$cta_eyebrow = $is_services_overview
    ? __('Need Help With a Home Project?', 'silver-peak-theme')
    : $service_data['cta_eyebrow'];

$cta_title = $is_services_overview
    ? __('Tell us what is on your repair or maintenance list', 'silver-peak-theme')
    : $service_data['cta_title'];

$cta_body = $is_services_overview
    ? __('If you are comparing service options or trying to prioritize a few projects, reach out and we will help you figure out the most practical next step.', 'silver-peak-theme')
    : $service_data['cta_body'];
?>
<section class="service-section section-spacing" aria-labelledby="service-cta-title">
    <div class="site-container">
        <div class="cta-panel cta-panel--service<?php echo $is_services_overview ? ' cta-panel--services-overview' : ''; ?>">
            <div class="cta-panel__content">
                <p class="eyebrow"><?php echo esc_html($cta_eyebrow); ?></p>
                <h2 id="service-cta-title"><?php echo esc_html($cta_title); ?></h2>
                <p><?php echo esc_html($cta_body); ?></p>
            </div>

            <div class="cta-panel__actions">
                <a class="button button--primary" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></a>
                <a class="button button--secondary" href="tel:<?php echo esc_attr($contact['phone_href']); ?>"><?php echo esc_html(sprintf(__('Call %s', 'silver-peak-theme'), $contact['phone_display'])); ?></a>
            </div>
        </div>
    </div>
</section>
