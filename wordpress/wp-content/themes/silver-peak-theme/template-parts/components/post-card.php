<?php
/**
 * Reusable post card for archives.
 *
 * @package SilverPeakTheme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <a class="post-card__media" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
            <?php the_post_thumbnail('large'); ?>
        </a>
    <?php endif; ?>

    <div class="post-card__body">
        <div class="post-card__meta post-meta">
            <?php echo wp_kses_post(silver_peak_theme_posted_on()); ?>
        </div>

        <h2 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php $categories = silver_peak_theme_post_terms('category'); ?>
        <?php if ($categories) : ?>
            <?php echo wp_kses_post($categories); ?>
        <?php endif; ?>

        <div class="post-card__excerpt">
            <?php the_excerpt(); ?>
        </div>

        <a class="post-card__link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read article', 'silver-peak-theme'); ?></a>
    </div>
</article>
