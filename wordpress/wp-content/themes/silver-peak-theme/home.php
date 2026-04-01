<?php
/**
 * Blog posts index.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="blog-archive section-spacing" aria-labelledby="blog-archive-title">
    <div class="site-container">
        <header class="page-intro archive-intro blog-archive__intro">
            <p class="eyebrow"><?php esc_html_e('Homeowner Tips', 'silver-peak-theme'); ?></p>
            <h1 id="blog-archive-title"><?php single_post_title(); ?></h1>
            <p><?php esc_html_e('Practical articles for Las Vegas homeowners covering repairs, upkeep, seasonal maintenance, and ways to keep projects from piling up.', 'silver-peak-theme'); ?></p>
        </header>

        <?php if (have_posts()) : ?>
            <div class="post-grid" role="list">
                <?php while (have_posts()) : the_post(); ?>
                    <div role="listitem">
                        <?php get_template_part('template-parts/components/post', 'card'); ?>
                    </div>
                <?php endwhile; ?>
            </div>

            <nav class="posts-navigation posts-navigation--archive" aria-label="<?php esc_attr_e('Blog pagination', 'silver-peak-theme'); ?>">
                <?php the_posts_navigation(); ?>
            </nav>
        <?php else : ?>
            <?php get_template_part('template-parts/components/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
