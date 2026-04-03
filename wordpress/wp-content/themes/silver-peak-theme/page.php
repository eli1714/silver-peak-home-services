<?php
/**
 * Page template.
 *
 * Keeps the content area simple so it works well with the block editor
 *
 * @package SilverPeakTheme
 */

get_header();
?>
<section class="content-area section-spacing">
    <div class="site-container content-narrow">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('entry-single'); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</section>
<?php
get_footer();
