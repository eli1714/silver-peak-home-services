<?php
/**
 * Homepage final CTA section.
 *
 * @package SilverPeakTheme
 */

$contact = silver_peak_theme_get_contact_details();
?>
<section class="home-section section-spacing" aria-labelledby="final-cta-title">
    <div class="site-container">
        <div class="cta-panel">
            <div class="cta-panel__content">
                <p class="eyebrow"><?php esc_html_e('Ready to Get Started?', 'silver-peak-theme'); ?></p>
                <h2 id="final-cta-title"><?php esc_html_e('Book your next home service with a team that values clear communication', 'silver-peak-theme'); ?></h2>
                <p><?php esc_html_e('Use this area later for a contact form, scheduling widget, or a short trust-building closing statement.', 'silver-peak-theme'); ?></p>
            </div>

            <div class="cta-panel__actions">
                <a class="button button--primary" href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></a>
                <a class="button button--secondary" href="tel:<?php echo esc_attr($contact['phone_href']); ?>"><?php esc_html_e('Call for Service', 'silver-peak-theme'); ?></a>
            </div>
        </div>
    </div>
</section>
