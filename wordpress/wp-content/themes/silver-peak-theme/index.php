<?php
/**
 * Fallback template.
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="content-area section-spacing">
    <div class="site-container site-grid">
        <?php if (have_posts()) : ?>
            <div class="content-stack">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('entry-card'); ?>>
                        <header class="entry-card__header">
                            <h2 class="entry-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>
                        <div class="entry-card__content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>
            </div>
        <?php else : ?>
            <?php get_template_part('template-parts/components/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
