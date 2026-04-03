<?php
/**
 * Services overview grid.
 *
 * @package SilverPeakTheme
 */
?>
<section class="services-overview section-spacing" aria-labelledby="services-grid-title">
    <div class="site-container">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Popular Services', 'silver-peak-theme'); ?></p>
            <h2 id="services-grid-title"><?php esc_html_e('Support for the repairs, upkeep, and project lists homeowners deal with every season', 'silver-peak-theme'); ?></h2>
        </div>

        <div class="services-grid">
            <article class="service-summary-card">
                <h3><?php esc_html_e('General Home Repairs', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Ideal for drywall touchups, trim repairs, hardware swaps, caulking, and the smaller fixes that keep adding up.', 'silver-peak-theme'); ?></p>
                <a class="service-summary-card__link" href="<?php echo esc_url(home_url('/services/general-home-repairs')); ?>"><span class="service-summary-card__link-text"><?php esc_html_e('View service details', 'silver-peak-theme'); ?></span></a>
            </article>

            <article class="service-summary-card">
                <h3><?php esc_html_e('Seasonal Maintenance', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Preventive maintenance for busy homeowners who want to stay ahead of wear, weather, and avoidable repairs.', 'silver-peak-theme'); ?></p>
                <a class="service-summary-card__link" href="<?php echo esc_url(home_url('/services/seasonal-maintenance')); ?>"><span class="service-summary-card__link-text"><?php esc_html_e('Explore maintenance service', 'silver-peak-theme'); ?></span></a>
            </article>

            <article class="service-summary-card">
                <h3><?php esc_html_e('Move-In and Punch List Work', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Perfect for getting a new home ready, tackling pre-sale fixes, or finally clearing a backlog of unfinished items.', 'silver-peak-theme'); ?></p>
                <a class="service-summary-card__link" href="<?php echo esc_url(home_url('/services/punch-list-projects')); ?>"><span class="service-summary-card__link-text"><?php esc_html_e('See project support', 'silver-peak-theme'); ?></span></a>
            </article>
        </div>
    </div>
</section>
