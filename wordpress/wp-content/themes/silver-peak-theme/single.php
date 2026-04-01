<?php
/**
 * Single post template.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="single-post section-spacing">
    <div class="site-container content-narrow">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry-single entry-single--post'); ?>>
                <header class="entry-header entry-header--post">
                    <p class="eyebrow"><?php esc_html_e('From the Blog', 'silver-peak-theme'); ?></p>
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="entry-meta post-meta">
                        <?php echo wp_kses_post(silver_peak_theme_posted_on()); ?>
                    </div>

                    <?php $categories = silver_peak_theme_post_terms('category'); ?>
                    <?php if ($categories) : ?>
                        <?php echo wp_kses_post($categories); ?>
                    <?php endif; ?>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-media entry-media--post">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content entry-content--post">
                    <?php the_content(); ?>
                    <?php wp_link_pages(); ?>
                </div>

                <?php $tags = silver_peak_theme_post_terms('post_tag'); ?>
                <?php if ($tags) : ?>
                    <footer class="entry-footer entry-footer--post">
                        <?php echo wp_kses_post($tags); ?>
                    </footer>
                <?php endif; ?>
            </article>

            <?php get_template_part('template-parts/blog/related', 'posts'); ?>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
