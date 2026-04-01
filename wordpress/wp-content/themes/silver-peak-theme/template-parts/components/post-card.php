<?php
/**
 * Reusable post card for archives.
 *
 * @package SilverPeakTheme
 */

$post_slug = get_post_field('post_name', get_the_ID());
$post_classes = 'post-card';

if ('hello-world' === $post_slug) {
    $post_classes .= ' post-card--starter';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
    <a class="post-card__media" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog-placeholder.svg'); ?>" alt="" loading="lazy">
        <?php endif; ?>
    </a>

    <div class="post-card__body">
        <div class="post-card__meta post-meta">
            <?php echo wp_kses_post(silver_peak_theme_posted_on()); ?>
        </div>

        <?php $categories = silver_peak_theme_post_terms('category'); ?>
        <?php if ($categories) : ?>
            <?php echo wp_kses_post($categories); ?>
        <?php endif; ?>

        <h2 class="post-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="post-card__excerpt">
            <?php the_excerpt(); ?>
        </div>

        <a class="post-card__link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read article', 'silver-peak-theme'); ?></a>
    </div>
</article>
