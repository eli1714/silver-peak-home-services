<?php
/**
 * Blog posts index.
 *
 * @package SilverPeakTheme
 */

$blog_posts = [];

if (have_posts()) {
    while (have_posts()) {
        the_post();

        if ('hello-world' === get_post_field('post_name', get_the_ID())) {
            continue;
        }

        $blog_posts[] = get_post();
    }

    wp_reset_postdata();
}

$featured_post = $blog_posts[0] ?? null;
$secondary_posts = array_slice($blog_posts, 1);

get_header();
?>
<section class="blog-archive section-spacing" aria-labelledby="blog-archive-title">
    <div class="site-container">
        <header class="blog-archive__hero" aria-labelledby="blog-archive-title">
            <div class="blog-archive__intro">
                <p class="eyebrow"><?php esc_html_e('Homeowner Tips', 'silver-peak-theme'); ?></p>
                <h1 id="blog-archive-title"><?php single_post_title(); ?></h1>
                <p><?php esc_html_e('Practical guidance for Las Vegas homeowners covering repairs, seasonal upkeep, and the smaller projects that help a home stay functional, comfortable, and cared for.', 'silver-peak-theme'); ?></p>
            </div>
        </header>

        <?php if ($featured_post) : ?>
            <?php setup_postdata($featured_post); ?>
            <section class="blog-featured" aria-labelledby="featured-post-title">
                <article id="post-<?php the_ID(); ?>" <?php post_class('blog-featured__card'); ?>>
                    <a class="blog-featured__media" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/blog-placeholder.svg'); ?>" alt="" loading="lazy">
                        <?php endif; ?>
                    </a>

                    <div class="blog-featured__content">
                        <div class="blog-featured__meta post-meta">
                            <?php echo wp_kses_post(silver_peak_theme_posted_on()); ?>
                        </div>

                        <?php $featured_categories = silver_peak_theme_post_terms('category'); ?>
                        <?php if ($featured_categories) : ?>
                            <?php echo wp_kses_post($featured_categories); ?>
                        <?php endif; ?>

                        <h2 id="featured-post-title" class="blog-featured__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                        <div class="blog-featured__excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a class="button button--primary blog-featured__link" href="<?php the_permalink(); ?>"><?php esc_html_e('Read Featured Article', 'silver-peak-theme'); ?></a>
                    </div>
                </article>
            </section>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        <?php if ($secondary_posts) : ?>
            <section class="blog-secondary" aria-labelledby="more-articles-title">
                <div class="blog-secondary__header">
                    <h2 id="more-articles-title"><?php esc_html_e('More Articles', 'silver-peak-theme'); ?></h2>
                </div>

                <div class="post-grid post-grid--archive" role="list">
                    <?php foreach ($secondary_posts as $post) : ?>
                        <?php setup_postdata($post); ?>
                        <div class="post-grid__item" role="listitem">
                            <?php get_template_part('template-parts/components/post', 'card'); ?>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </section>

            <nav class="posts-navigation posts-navigation--archive" aria-label="<?php esc_attr_e('Blog pagination', 'silver-peak-theme'); ?>">
                <?php the_posts_navigation(); ?>
            </nav>
        <?php elseif (! $featured_post) : ?>
            <?php get_template_part('template-parts/components/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
