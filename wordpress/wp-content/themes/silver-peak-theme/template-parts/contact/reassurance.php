<?php
/**
 * Contact page reassurance section.
 *
 * @package SilverPeakTheme
 */

$contact = silver_peak_theme_get_contact_details();
?>
<section class="contact-reassurance section-spacing" aria-labelledby="contact-reassurance-title">
    <div class="site-container">
        <div class="cta-panel cta-panel--contact">
            <div class="cta-panel__content">
                <p class="eyebrow"><?php esc_html_e('Need a Straightforward Next Step?', 'silver-peak-theme'); ?></p>
                <h2 id="contact-reassurance-title"><?php esc_html_e('Clear communication, practical recommendations, and a service process built around real homeowner needs', 'silver-peak-theme'); ?></h2>
                <p><?php esc_html_e('Whether you have one repair or a longer project list, the goal is to make the process feel organized, helpful, and easy to move forward with.', 'silver-peak-theme'); ?></p>
            </div>

            <div class="cta-panel__actions">
                <a class="button button--primary" href="#request-a-quote"><?php esc_html_e('Start Your Request', 'silver-peak-theme'); ?></a>
                <a class="button button--secondary" href="tel:<?php echo esc_attr($contact['phone_href']); ?>"><?php esc_html_e('Call During Business Hours', 'silver-peak-theme'); ?></a>
            </div>
        </div>
    </div>
</section>
