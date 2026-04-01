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
            <p><?php esc_html_e('This project is set up like a real local service homepage, with clear service categories and strong next steps for the user.', 'silver-peak-theme'); ?></p>
        </div>

        <div class="service-grid">
            <article class="service-card">
                <h3><?php esc_html_e('General Home Repairs', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Help with small-to-medium repair work that keeps your home safe, functional, and looking cared for.', 'silver-peak-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/services')); ?>"><?php esc_html_e('Explore services', 'silver-peak-theme'); ?></a>
            </article>

            <article class="service-card">
                <h3><?php esc_html_e('Maintenance Services', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Seasonal upkeep and recurring maintenance to prevent wear, damage, and emergency repair costs.', 'silver-peak-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/services')); ?>"><?php esc_html_e('View maintenance options', 'silver-peak-theme'); ?></a>
            </article>

            <article class="service-card">
                <h3><?php esc_html_e('Punch List Projects', 'silver-peak-theme'); ?></h3>
                <p><?php esc_html_e('Great for homeowners getting ready to sell, move in, or finally finish a list of lingering fixes.', 'silver-peak-theme'); ?></p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>"><?php esc_html_e('Request a project quote', 'silver-peak-theme'); ?></a>
            </article>
        </div>
    </div>
</section>
