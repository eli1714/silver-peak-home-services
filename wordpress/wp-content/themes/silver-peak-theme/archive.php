<?php
/**
 * Archive template.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="blog-archive section-spacing" aria-labelledby="archive-title">
    <div class="site-container">
        <header class="blog-archive__hero" aria-labelledby="archive-title">
            <div class="blog-archive__intro">
                <p class="eyebrow"><?php esc_html_e('Archive', 'silver-peak-theme'); ?></p>
                <h1 id="archive-title"><?php the_archive_title(); ?></h1>
                <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
            </div>
        </header>

        <?php if (have_posts()) : ?>
            <div class="post-grid post-grid--archive" role="list">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="post-grid__item" role="listitem">
                        <?php get_template_part('template-parts/components/post', 'card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <nav class="posts-navigation posts-navigation--archive" aria-label="<?php esc_attr_e('Archive pagination', 'silver-peak-theme'); ?>">
                <?php the_posts_navigation(); ?>
            </nav>
        <?php else : ?>
            <?php get_template_part('template-parts/components/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
