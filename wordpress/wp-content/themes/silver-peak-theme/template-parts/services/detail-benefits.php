<?php
/**
 * Service detail benefits.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
?>
<section class="service-section section-spacing" aria-labelledby="service-benefits-title">
    <div class="site-container">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Benefits', 'silver-peak-theme'); ?></p>
            <h2 id="service-benefits-title"><?php echo esc_html($service_data['benefits_heading']); ?></h2>
        </div>

        <div class="service-detail-grid" role="list">
            <?php foreach ($service_data['benefits'] as $benefit) : ?>
                <article class="service-detail-card" role="listitem">
                    <h3><?php echo esc_html($benefit['title']); ?></h3>
                    <p><?php echo esc_html($benefit['body']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
