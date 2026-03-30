<?php
/**
 * Archive template.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="content-area section-spacing">
    <div class="site-container">
        <header class="page-intro archive-intro">
            <p class="eyebrow"><?php esc_html_e('Archive', 'silver-peak-theme'); ?></p>
            <h1><?php the_archive_title(); ?></h1>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>
        </header>

        <?php if (have_posts()) : ?>
            <div class="content-stack">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('entry-card'); ?>>
                        <h2 class="entry-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
