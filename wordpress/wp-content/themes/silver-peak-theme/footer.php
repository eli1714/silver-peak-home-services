<?php
/**
 * Site footer.
 *
 * @package SilverPeakTheme
 */
?>
    </main>

    <footer class="site-footer" aria-label="<?php esc_attr_e('Site footer', 'silver-peak-theme'); ?>">
        <div class="site-container site-footer__inner">
            <p class="site-footer__copy">
                &copy; <?php echo esc_html(wp_date('Y')); ?> <?php bloginfo('name'); ?>.
            </p>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
