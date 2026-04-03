<?php
/**
 * Contact form section.
 *
 * @package SilverPeakTheme
 */
?>
<?php $form_content = trim((string) get_the_content()); ?>
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
                    <form class="quote-form-placeholder" aria-labelledby="quote-form-placeholder-title">
                        <h3 id="quote-form-placeholder-title"><?php esc_html_e('Request a Quote Form', 'silver-peak-theme'); ?></h3>

                        <div class="quote-form-grid">
                            <div class="form-field">
                                <label for="quote-name"><?php esc_html_e('Full Name', 'silver-peak-theme'); ?></label>
                                <input id="quote-name" name="quote-name" type="text" autocomplete="name" placeholder="<?php esc_attr_e('Your name', 'silver-peak-theme'); ?>">
                            </div>

                            <div class="form-field">
                                <label for="quote-phone"><?php esc_html_e('Phone Number', 'silver-peak-theme'); ?></label>
                                <input id="quote-phone" name="quote-phone" type="tel" autocomplete="tel" placeholder="<?php esc_attr_e('(555) 123-4567', 'silver-peak-theme'); ?>">
                            </div>

                            <div class="form-field">
                                <label for="quote-email"><?php esc_html_e('Email Address', 'silver-peak-theme'); ?></label>
                                <input id="quote-email" name="quote-email" type="email" autocomplete="email" placeholder="<?php esc_attr_e('you@example.com', 'silver-peak-theme'); ?>">
                            </div>

                            <div class="form-field">
                                <label for="quote-service"><?php esc_html_e('Service Needed', 'silver-peak-theme'); ?></label>
                                <select id="quote-service" name="quote-service">
                                    <option><?php esc_html_e('Select a service', 'silver-peak-theme'); ?></option>
                                    <option><?php esc_html_e('General Home Repairs', 'silver-peak-theme'); ?></option>
                                    <option><?php esc_html_e('Seasonal Maintenance', 'silver-peak-theme'); ?></option>
                                    <option><?php esc_html_e('Punch List Projects', 'silver-peak-theme'); ?></option>
                                </select>
                            </div>

                            <div class="form-field form-field--full">
                                <label for="quote-message"><?php esc_html_e('Project Details', 'silver-peak-theme'); ?></label>
                                <textarea id="quote-message" name="quote-message" rows="6" placeholder="<?php esc_attr_e('Tell us about the work you need done, your timeline, and anything else that would help.', 'silver-peak-theme'); ?>"></textarea>
                            </div>
                        </div>

                        <button class="button button--primary" type="button"><?php esc_html_e('Submit Request', 'silver-peak-theme'); ?></button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
