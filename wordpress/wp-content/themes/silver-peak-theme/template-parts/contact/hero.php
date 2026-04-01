<?php
/**
 * Contact page hero.
 *
 * @package SilverPeakTheme
 */
?>
<section class="contact-hero section-spacing" aria-labelledby="contact-page-title">
    <div class="site-container">
        <div class="contact-hero__layout">
            <div class="contact-hero__content page-intro">
                <p class="eyebrow"><?php esc_html_e('Contact Us', 'silver-peak-theme'); ?></p>
                <h1 id="contact-page-title"><?php the_title(); ?></h1>
                <p><?php esc_html_e('Tell us a little about the project, repair, or maintenance work you need help with. We will follow up with the next step, availability, and any details needed to move things forward.', 'silver-peak-theme'); ?></p>
            </div>

            <aside class="contact-hero__card" aria-label="<?php esc_attr_e('Quick contact details', 'silver-peak-theme'); ?>">
                <h2><?php esc_html_e('Fastest way to get started', 'silver-peak-theme'); ?></h2>
                <p><?php esc_html_e('Send a quick project summary through the form below or call during business hours for immediate questions.', 'silver-peak-theme'); ?></p>
                <div class="contact-hero__actions">
                    <a class="button button--primary" href="#request-a-quote"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></a>
                    <a class="button button--secondary" href="tel:5551234567"><?php esc_html_e('Call (555) 123-4567', 'silver-peak-theme'); ?></a>
                </div>
            </aside>
        </div>
    </div>
</section>
