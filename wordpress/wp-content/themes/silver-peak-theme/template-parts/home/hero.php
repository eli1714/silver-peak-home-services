<?php
/**
 * Homepage hero section.
 *
 * @package SilverPeakTheme
 */

$contact = silver_peak_theme_get_contact_details();
?>
<section class="home-section home-hero section-spacing" aria-labelledby="home-hero-title">
    <div class="site-container">
        <div class="home-hero__layout">
            <div class="home-hero__content">
                <p class="eyebrow"><?php esc_html_e('Las Vegas Home Services', 'silver-peak-theme'); ?></p>
                <h1 id="home-hero-title"><?php esc_html_e('Reliable home services for busy Las Vegas homeowners', 'silver-peak-theme'); ?></h1>
                <p class="home-hero__lead"><?php esc_html_e('From routine repairs to larger home projects, Silver Peak Home Services helps homeowners stay ahead of the little issues before they become expensive headaches.', 'silver-peak-theme'); ?></p>

                <div class="home-hero__actions">
                    <a class="button button--primary" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></a>
                    <a class="button button--secondary" href="tel:<?php echo esc_attr($contact['phone_href']); ?>"><?php echo esc_html(sprintf(__('Call %s', 'silver-peak-theme'), $contact['phone_display'])); ?></a>
                </div>

                <ul class="home-hero__highlights" aria-label="<?php esc_attr_e('Key service highlights', 'silver-peak-theme'); ?>">
                    <li><?php esc_html_e('Responsive scheduling', 'silver-peak-theme'); ?></li>
                    <li><?php esc_html_e('Clear upfront communication', 'silver-peak-theme'); ?></li>
                    <li><?php esc_html_e('Trusted local service', 'silver-peak-theme'); ?></li>
                </ul>
            </div>

            <aside class="home-hero__card" aria-label="<?php esc_attr_e('Quick contact details', 'silver-peak-theme'); ?>">
                <p class="eyebrow"><?php esc_html_e('Need help fast?', 'silver-peak-theme'); ?></p>
                <h2><?php esc_html_e('Book a home service consultation', 'silver-peak-theme'); ?></h2>
                <p><?php esc_html_e('Tell us what you need, and we will follow up with the next available appointment window.', 'silver-peak-theme'); ?></p>
                <ul class="contact-list">
                    <li><strong><?php esc_html_e('Phone:', 'silver-peak-theme'); ?></strong> <a href="tel:<?php echo esc_attr($contact['phone_href']); ?>"><?php echo esc_html($contact['phone_display']); ?></a></li>
                    <li><strong><?php esc_html_e('Hours:', 'silver-peak-theme'); ?></strong> <?php echo esc_html($contact['hours']); ?></li>
                    <li><strong><?php esc_html_e('Service Area:', 'silver-peak-theme'); ?></strong> <?php echo esc_html($contact['service_area']); ?></li>
                </ul>
            </aside>
        </div>
    </div>
</section>
