<?php
/**
 * Single post template.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="single-post section-spacing">
    <div class="site-container">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry-single entry-single--post'); ?>>
                <header class="entry-header entry-header--post single-post__header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>

                    <div class="entry-meta post-meta post-meta--single">
                        <span class="post-meta__item">
                            <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
                        </span>
                    </div>

                </header>

                <div class="single-post__media-wrap">
                    <div class="entry-media entry-media--post">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog-placeholder.svg'); ?>" alt="" loading="lazy">
                        <?php endif; ?>
                    </div>
                </div>

                <div class="single-post__content-wrap">
                    <div class="entry-content entry-content--post">
                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>
                    </div>

                    <?php $tags = silver_peak_theme_post_terms('post_tag'); ?>
                    <?php if ($tags) : ?>
                        <footer class="entry-footer entry-footer--post">
                            <p class="entry-footer__label"><?php esc_html_e('Filed under', 'silver-peak-theme'); ?></p>
                            <?php echo wp_kses_post($tags); ?>
                        </footer>
                    <?php endif; ?>
                </div>
            </article>

            <?php get_template_part('template-parts/blog/related', 'posts'); ?>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
