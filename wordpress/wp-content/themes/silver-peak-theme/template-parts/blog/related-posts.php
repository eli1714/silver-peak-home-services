<?php
/**
 * Related posts section.
 *
 * @package SilverPeakTheme
 */

$category_ids = wp_get_post_categories(get_the_ID());

$related_query = new WP_Query([
    'post_type'           => 'post',
    'posts_per_page'      => 3,
    'post__not_in'        => [get_the_ID()],
    'ignore_sticky_posts' => true,
    'category__in'        => $category_ids,
]);

if (! $related_query->have_posts()) {
    $related_query = new WP_Query([
        'post_type'           => 'post',
        'posts_per_page'      => 3,
        'post__not_in'        => [get_the_ID()],
        'ignore_sticky_posts' => true,
    ]);
}
?>
<?php if ($related_query->have_posts()) : ?>
    <section class="related-posts section-spacing" aria-labelledby="related-posts-title">
        <div class="site-container">
            <div class="section-heading">
                <p class="eyebrow"><?php esc_html_e('From the Blog', 'silver-peak-theme'); ?></p>
                <h2 id="related-posts-title"><?php esc_html_e('More homeowner tips and practical updates', 'silver-peak-theme'); ?></h2>
            </div>

            <div class="post-grid" role="list">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                    <div role="listitem">
                        <?php get_template_part('template-parts/components/post', 'card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
