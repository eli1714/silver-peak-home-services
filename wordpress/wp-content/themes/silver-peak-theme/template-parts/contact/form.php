<?php
/**
 * Contact form section.
 *
 * @package SilverPeakTheme
 */
?>
<?php
$contact = silver_peak_theme_get_contact_details();
$form_content = trim((string) get_the_content());
?>
<section id="request-a-quote" class="quote-request section-spacing" aria-labelledby="quote-request-title">
    <div class="site-container">
        <div class="quote-request__layout">
            <div class="quote-request__content">
                <p class="eyebrow"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></p>
                <h2 id="quote-request-title"><?php esc_html_e('Share a few project details', 'silver-peak-theme'); ?></h2>
                <p><?php esc_html_e('Share a few details about the work you need, where you are located, and the best way to reach you. We will follow up with the next step for your project.', 'silver-peak-theme'); ?></p>
                <ul class="quote-request__list">
                    <li><?php esc_html_e('What type of service do you need?', 'silver-peak-theme'); ?></li>
                    <li><?php esc_html_e('Which part of the Las Vegas area are you in?', 'silver-peak-theme'); ?></li>
                    <li><?php esc_html_e('Is this a small repair, a maintenance visit, or a longer punch list?', 'silver-peak-theme'); ?></li>
                </ul>
            </div>

            <div class="quote-form-shell">
                <?php if ($form_content !== '') : ?>
                    <div class="quote-form-shell__plugin-content">
                        <?php the_content(); ?>
                    </div>
                <?php else : ?>
                    <div class="quote-form-fallback" aria-labelledby="quote-form-fallback-title">
                        <h3 id="quote-form-fallback-title"><?php esc_html_e('Request a Quote', 'silver-peak-theme'); ?></h3>
                        <p><?php esc_html_e('For the hosted demo, the quickest way to get started is to call or email with a short summary of the work you need.', 'silver-peak-theme'); ?></p>
                        <div class="quote-form-fallback__actions">
                            <a class="button button--primary" href="mailto:<?php echo esc_attr($contact['email']); ?>"><?php esc_html_e('Email Your Project Details', 'silver-peak-theme'); ?></a>
                            <a class="button button--secondary" href="tel:<?php echo esc_attr($contact['phone_href']); ?>"><?php echo esc_html(sprintf(__('Call %s', 'silver-peak-theme'), $contact['phone_display'])); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
