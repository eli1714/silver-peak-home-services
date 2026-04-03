<?php
/**
 * Site footer.
 *
 * @package SilverPeakTheme
 */

$contact = silver_peak_theme_get_contact_details();
?>
        </div>
    </main>

    <footer class="site-footer" aria-label="<?php esc_attr_e('Site footer', 'silver-peak-theme'); ?>">
        <div class="site-container">
            <div class="site-footer__grid">
                <section class="site-footer__section site-footer__section--summary" aria-labelledby="footer-summary-title">
                    <h2 id="footer-summary-title" class="site-footer__title"><?php bloginfo('name'); ?></h2>
                    <p class="site-footer__text"><?php esc_html_e('Reliable home services for busy homeowners, with a focus on clear communication, quality work, and dependable scheduling.', 'silver-peak-theme'); ?></p>
                </section>

                <nav class="site-footer__section" aria-labelledby="footer-links-title">
                    <h2 id="footer-links-title" class="site-footer__title"><?php esc_html_e('Quick Links', 'silver-peak-theme'); ?></h2>
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'footer-menu',
                        'fallback_cb'    => 'silver_peak_theme_menu_fallback',
                    ]);
                    ?>
                </nav>

                <section class="site-footer__section" aria-labelledby="footer-contact-title">
                    <h2 id="footer-contact-title" class="site-footer__title"><?php esc_html_e('Contact', 'silver-peak-theme'); ?></h2>
                    <ul class="site-footer__list">
                        <li><a href="tel:<?php echo esc_attr($contact['phone_href']); ?>"><?php echo esc_html($contact['phone_display']); ?></a></li>
                        <li><a href="mailto:<?php echo esc_attr($contact['email']); ?>"><?php echo esc_html($contact['email']); ?></a></li>
                        <li><?php esc_html_e('Serving the greater Silver Peak area', 'silver-peak-theme'); ?></li>
                    </ul>
                </section>
            </div>

            <div class="site-footer__bottom">
                <p class="site-footer__copy">&copy; <?php echo esc_html(wp_date('Y')); ?> <?php bloginfo('name'); ?>.</p>
                <p class="site-footer__credit"><?php esc_html_e('Built with WordPress.', 'silver-peak-theme'); ?></p>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
