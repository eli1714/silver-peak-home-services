<?php
/**
 * Service detail problems solved.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
?>
<section class="service-section section-spacing" aria-labelledby="service-problems-title">
    <div class="site-container">
        <div class="split-section">
            <div class="split-section__content">
                <p class="eyebrow"><?php esc_html_e('Problems We Solve', 'silver-peak-theme'); ?></p>
                <h2 id="service-problems-title"><?php echo esc_html($service_data['problems_title']); ?></h2>
                <p><?php echo esc_html($service_data['problems_intro']); ?></p>
            </div>

            <ul class="service-problem-list">
                <?php foreach ($service_data['problems'] as $problem) : ?>
                    <li><?php echo esc_html($problem); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
