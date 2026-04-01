<?php
/**
 * Contact information section.
 *
 * @package SilverPeakTheme
 */
?>
<section class="contact-info section-spacing" aria-labelledby="contact-info-title">
    <div class="site-container">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Contact Information', 'silver-peak-theme'); ?></p>
            <h2 id="contact-info-title"><?php esc_html_e('Reach out in the way that works best for you', 'silver-peak-theme'); ?></h2>
        </div>

        <div class="contact-info__grid" role="list">
            <article class="contact-card" role="listitem">
                <h3><?php esc_html_e('Phone', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Call for scheduling questions, repair requests, or project details.', 'silver-peak-theme'); ?></p>
                <a href="tel:5551234567"><?php esc_html_e('(555) 123-4567', 'silver-peak-theme'); ?></a>
            </article>

            <article class="contact-card" role="listitem">
                <h3><?php esc_html_e('Email', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Prefer email? Send over the basics and we will follow up with next steps.', 'silver-peak-theme'); ?></p>
                <a href="mailto:hello@silverpeakhomeservices.com"><?php esc_html_e('hello@silverpeakhomeservices.com', 'silver-peak-theme'); ?></a>
            </article>

            <article class="contact-card" role="listitem">
                <h3><?php esc_html_e('Service Requests', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('For the fastest response, include your neighborhood, project type, and a short description of the work needed.', 'silver-peak-theme'); ?></p>
                <span class="contact-card__note"><?php esc_html_e('Photos can be helpful for repair and quote requests.', 'silver-peak-theme'); ?></span>
            </article>
        </div>
    </div>
</section>
