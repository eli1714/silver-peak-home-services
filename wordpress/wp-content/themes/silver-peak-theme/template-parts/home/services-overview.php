<?php
/**
 * Homepage services overview section.
 *
 * @package SilverPeakTheme
 */
?>
<section class="home-section section-spacing" aria-labelledby="services-overview-title">
    <div class="site-container">
        <div class="section-heading">
            <p class="eyebrow"><?php esc_html_e('Core Services', 'silver-peak-theme'); ?></p>
            <h2 id="services-overview-title"><?php esc_html_e('Practical help for the repairs and maintenance homeowners put off too long', 'silver-peak-theme'); ?></h2>
            <p><?php esc_html_e('From small repair calls to planned upkeep, Silver Peak Home Services helps homeowners stay ahead of the projects that keep a home running well.', 'silver-peak-theme'); ?></p>
        </div>

        <div class="service-grid">
            <article class="service-card">
                <div class="service-card__header">
                    <span class="service-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <path d="M6.5 15.5 15 7a2.12 2.12 0 1 1 3 3l-8.5 8.5-4 1 1-4Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.65"/>
                            <path d="m13.5 8.5 2 2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.65"/>
                        </svg>
                    </span>
                    <h3><?php esc_html_e('General Home Repairs', 'silver-peak-theme'); ?></h3>
                </div>
                <p><?php esc_html_e('Help with small-to-medium repair work that keeps your home safe, functional, and looking cared for.', 'silver-peak-theme'); ?></p>
                <a class="service-card__link" href="<?php echo esc_url(home_url('/services/general-home-repairs')); ?>"><span class="service-card__link-text"><?php esc_html_e('Explore services', 'silver-peak-theme'); ?></span></a>
            </article>

            <article class="service-card">
                <div class="service-card__header">
                    <span class="service-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <rect x="4.5" y="5.5" width="15" height="14" rx="2.5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.65"/>
                            <path d="M8 3.75v3.5M16 3.75v3.5M8 12.5h8M8 16h5" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.65"/>
                        </svg>
                    </span>
                    <h3><?php esc_html_e('Maintenance Services', 'silver-peak-theme'); ?></h3>
                </div>
                <p><?php esc_html_e('Seasonal upkeep and recurring maintenance to prevent wear, damage, and emergency repair costs.', 'silver-peak-theme'); ?></p>
                <a class="service-card__link" href="<?php echo esc_url(home_url('/services/seasonal-maintenance')); ?>"><span class="service-card__link-text"><?php esc_html_e('View maintenance options', 'silver-peak-theme'); ?></span></a>
            </article>

            <article class="service-card">
                <div class="service-card__header">
                    <span class="service-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" focusable="false">
                            <rect x="6" y="4.5" width="12" height="15" rx="2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.65"/>
                            <path d="M9 4.5h6M9 9.5h6M9 13h6M9 16.5h4" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.65"/>
                        </svg>
                    </span>
                    <h3><?php esc_html_e('Punch List Projects', 'silver-peak-theme'); ?></h3>
                </div>
                <p><?php esc_html_e('Great for homeowners getting ready to sell, move in, or finally finish a list of lingering fixes.', 'silver-peak-theme'); ?></p>
                <a class="service-card__link" href="<?php echo esc_url(home_url('/services/punch-list-projects')); ?>"><span class="service-card__link-text"><?php esc_html_e('Request a project quote', 'silver-peak-theme'); ?></span></a>
            </article>
        </div>
    </div>
</section>
