<?php
/**
 * Service detail FAQ.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
?>
<section class="service-section section-spacing" aria-labelledby="service-faq-title">
    <div class="site-container content-narrow">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Service FAQ', 'silver-peak-theme'); ?></p>
            <h2 id="service-faq-title"><?php echo esc_html($service_data['faq_heading']); ?></h2>
        </div>

        <div class="faq-list">
            <?php foreach ($service_data['faq'] as $faq_item) : ?>
                <details class="faq-item">
                    <summary><?php echo esc_html($faq_item['question']); ?></summary>
                    <p><?php echo esc_html($faq_item['answer']); ?></p>
                </details>
            <?php endforeach; ?>
        </div>
    </div>
</section>
