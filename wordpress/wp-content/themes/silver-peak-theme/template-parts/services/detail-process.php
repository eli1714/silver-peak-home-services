<?php
/**
 * Service detail process.
 *
 * @package SilverPeakTheme
 */

$service_data = silver_peak_theme_get_service_page_data();
?>
<section class="service-section section-spacing" aria-labelledby="service-process-title">
    <div class="site-container">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Process', 'silver-peak-theme'); ?></p>
            <h2 id="service-process-title"><?php echo esc_html($service_data['process_heading']); ?></h2>
        </div>

        <ol class="process-list">
            <?php foreach ($service_data['process_steps'] as $step) : ?>
                <li class="process-step">
                    <h3><?php echo esc_html($step['title']); ?></h3>
                    <p><?php echo esc_html($step['body']); ?></p>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</section>
