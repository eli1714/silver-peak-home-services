<?php
/**
 * Blog posts index.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="content-area section-spacing">
    <div class="site-container">
        <header class="page-intro archive-intro">
            <p class="eyebrow"><?php esc_html_e('Latest Updates', 'silver-peak-theme'); ?></p>
            <h1><?php single_post_title(); ?></h1>
        </header>

        <?php if (have_posts()) : ?>
            <div class="content-stack">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('entry-card'); ?>>
                        <h2 class="entry-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p class="entry-meta"><?php echo esc_html(get_the_date()); ?></p>
                        <div class="entry-card__content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>

            <?php the_posts_navigation(); ?>
        <?php else : ?>
            <?php get_template_part('template-parts/components/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
