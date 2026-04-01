<?php
/**
 * Theme setup and asset loading for Silver Peak Theme.
 *
 * @package SilverPeakTheme
 */

if (! defined('ABSPATH')) {
    exit;
}

function silver_peak_theme_setup(): void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'silver-peak-theme'),
        'footer'  => __('Footer Menu', 'silver-peak-theme'),
    ]);
}
add_action('after_setup_theme', 'silver_peak_theme_setup');

function silver_peak_theme_scripts(): void
{
    $theme_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'silver-peak-theme-main',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        $theme_version
    );

    wp_enqueue_script(
        'silver-peak-theme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        $theme_version,
        true
    );
}
add_action('wp_enqueue_scripts', 'silver_peak_theme_scripts');

function silver_peak_theme_body_classes(array $classes): array
{
    if (is_front_page()) {
        $classes[] = 'is-front-page';
    }

    if (is_singular()) {
        $classes[] = 'is-singular-view';
    }

    return $classes;
}
add_filter('body_class', 'silver_peak_theme_body_classes');

function silver_peak_theme_posted_on(): string
{
    $published = get_the_date();
    $published_iso = get_the_date('c');
    $author_url = get_author_posts_url((int) get_the_author_meta('ID'));
    $author_name = get_the_author();

    return sprintf(
        '<span class="post-meta__item"><time datetime="%1$s">%2$s</time></span><span class="post-meta__item"><a href="%3$s">%4$s</a></span>',
        esc_attr($published_iso),
        esc_html($published),
        esc_url($author_url),
        esc_html($author_name)
    );
}

function silver_peak_theme_post_terms(string $taxonomy): string
{
    $terms = get_the_terms(get_the_ID(), $taxonomy);

    if (! $terms || is_wp_error($terms)) {
        return '';
    }

    $links = [];

    foreach ($terms as $term) {
        $term_link = get_term_link($term);

        if (is_wp_error($term_link)) {
            continue;
        }

        $links[] = sprintf(
            '<a href="%1$s">%2$s</a>',
            esc_url($term_link),
            esc_html($term->name)
        );
    }

    if (! $links) {
        return '';
    }

    return sprintf(
        '<div class="post-terms post-terms--%1$s"><span class="screen-reader-text">%2$s</span>%3$s</div>',
        esc_attr($taxonomy),
        esc_html($taxonomy === 'category' ? __('Categories', 'silver-peak-theme') : __('Tags', 'silver-peak-theme')),
        implode('', $links)
    );
}

function silver_peak_theme_get_service_page_data(): array
{
    $defaults = [
        'hero_eyebrow' => __('Home Services in Las Vegas', 'silver-peak-theme'),
        'hero_lead' => __('Practical service for homeowners who want clear communication, dependable scheduling, and quality work from start to finish.', 'silver-peak-theme'),
        'hero_card_title' => __('Request service', 'silver-peak-theme'),
        'hero_card_body' => __('Tell us what you need and we will follow up with availability and next steps.', 'silver-peak-theme'),
        'benefits_heading' => __('Why homeowners book this service', 'silver-peak-theme'),
        'benefits' => [
            [
                'title' => __('Less stress and less guesswork', 'silver-peak-theme'),
                'body'  => __('You get a clear explanation of what the work involves and what the next step looks like.', 'silver-peak-theme'),
            ],
            [
                'title' => __('One reliable point of contact', 'silver-peak-theme'),
                'body'  => __('Straightforward help for practical home needs without bouncing between multiple contractors.', 'silver-peak-theme'),
            ],
            [
                'title' => __('Work that supports long-term upkeep', 'silver-peak-theme'),
                'body'  => __('The focus is not only on the immediate issue, but on helping homeowners stay ahead of future problems too.', 'silver-peak-theme'),
            ],
        ],
        'problems_title' => __('Common homeowner issues this service is built to handle', 'silver-peak-theme'),
        'problems_intro' => __('This service is designed around the kinds of repair and upkeep needs homeowners run into every week.', 'silver-peak-theme'),
        'problems' => [
            __('A repair list that keeps getting pushed back because life is busy', 'silver-peak-theme'),
            __('Small issues starting to affect comfort, appearance, or peace of mind', 'silver-peak-theme'),
            __('Need for a practical service partner who can explain scope clearly', 'silver-peak-theme'),
            __('A project that is too small for a large contractor but still important to the homeowner', 'silver-peak-theme'),
        ],
        'process_heading' => __('A clear service process from first contact to finished work', 'silver-peak-theme'),
        'process_steps' => [
            [
                'title' => __('Reach out with the details', 'silver-peak-theme'),
                'body'  => __('Share the issue, your timeline, and any helpful photos or notes about the job.', 'silver-peak-theme'),
            ],
            [
                'title' => __('Get a clear plan', 'silver-peak-theme'),
                'body'  => __('We confirm scope, scheduling, and what to expect before the work is booked.', 'silver-peak-theme'),
            ],
            [
                'title' => __('Complete the work professionally', 'silver-peak-theme'),
                'body'  => __('The service is carried out with communication, reliability, and respect for the home.', 'silver-peak-theme'),
            ],
        ],
        'faq_heading' => __('Questions homeowners often ask before booking', 'silver-peak-theme'),
        'faq' => [
            [
                'question' => __('How quickly can service usually be scheduled?', 'silver-peak-theme'),
                'answer'   => __('Scheduling depends on the job scope and season, but the goal is always to respond quickly and set clear expectations.', 'silver-peak-theme'),
            ],
            [
                'question' => __('Can this service be combined with other repairs?', 'silver-peak-theme'),
                'answer'   => __('In many cases, yes. Bundling smaller tasks into one visit is often the most practical option for the homeowner.', 'silver-peak-theme'),
            ],
            [
                'question' => __('Do you serve my part of Las Vegas?', 'silver-peak-theme'),
                'answer'   => __('Service is centered around Las Vegas and nearby communities, with scheduling based on the size and location of the project.', 'silver-peak-theme'),
            ],
        ],
        'area_heading' => __('Serving Las Vegas homeowners and nearby communities', 'silver-peak-theme'),
        'area_body' => __('Appointments are available across Las Vegas, Henderson, Summerlin, and nearby neighborhoods depending on scope and scheduling.', 'silver-peak-theme'),
        'cta_eyebrow' => __('Need Help With a Project?', 'silver-peak-theme'),
        'cta_title' => __('Request a quote for your next home service need', 'silver-peak-theme'),
        'cta_body' => __('Reach out with a short description of the job and we will follow up with next steps.', 'silver-peak-theme'),
    ];

    $services = [
        'general-home-repairs' => [
            'hero_eyebrow' => __('General Home Repairs', 'silver-peak-theme'),
            'hero_lead' => __('From drywall touchups to trim repairs and hardware swaps, this service is built for the everyday fixes that keep a home functional and looking cared for.', 'silver-peak-theme'),
            'hero_card_title' => __('Talk through your repair list', 'silver-peak-theme'),
            'hero_card_body' => __('Share the repairs you have been putting off and we can help you prioritize the work and plan the visit.', 'silver-peak-theme'),
            'benefits_heading' => __('Why homeowners book general repair help', 'silver-peak-theme'),
            'benefits' => [
                [
                    'title' => __('One visit for multiple small fixes', 'silver-peak-theme'),
                    'body'  => __('A grouped repair visit helps clear the list without scheduling a different specialist for every small job.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('A cleaner, more finished home', 'silver-peak-theme'),
                    'body'  => __('Addressing worn trim, damaged drywall, loose hardware, and similar issues helps the home feel maintained again.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Practical recommendations when more work is needed', 'silver-peak-theme'),
                    'body'  => __('If a repair points to a larger issue, you get a straightforward explanation instead of guessing at the next step.', 'silver-peak-theme'),
                ],
            ],
            'problems_title' => __('Everyday repair issues that homeowners are ready to knock out', 'silver-peak-theme'),
            'problems_intro' => __('General repair work is a good fit when the home has a handful of nagging issues that are easy to live with until they start adding up.', 'silver-peak-theme'),
            'problems' => [
                __('Nail pops, scuffed drywall, or trim damage that makes rooms feel unfinished', 'silver-peak-theme'),
                __('Loose cabinet hardware, sticking doors, or worn caulking in high-use areas', 'silver-peak-theme'),
                __('Minor exterior or interior repairs that keep getting pushed to next weekend', 'silver-peak-theme'),
                __('A small repair list that needs one reliable person to work through it efficiently', 'silver-peak-theme'),
            ],
            'process_heading' => __('A simple process for getting repairs checked off', 'silver-peak-theme'),
            'process_steps' => [
                [
                    'title' => __('Send over your repair list', 'silver-peak-theme'),
                    'body'  => __('Let us know which items need attention and include photos if that helps explain the issue.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Review scope and schedule the visit', 'silver-peak-theme'),
                    'body'  => __('We sort through the list, confirm what can be handled together, and set a plan for the appointment.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Complete the repairs and tidy the work area', 'silver-peak-theme'),
                    'body'  => __('The visit focuses on practical, quality repair work and leaving the space in good shape when the job is done.', 'silver-peak-theme'),
                ],
            ],
            'faq' => [
                [
                    'question' => __('What kinds of repairs are a good fit for this service?', 'silver-peak-theme'),
                    'answer'   => __('This service works well for drywall touchups, trim repairs, hardware swaps, caulking, fixture adjustments, and similar small-to-medium repair items.', 'silver-peak-theme'),
                ],
                [
                    'question' => __('Can I bundle several repairs into one appointment?', 'silver-peak-theme'),
                    'answer'   => __('Yes. Grouping multiple small repairs into one visit is often the best way to make progress and save time.', 'silver-peak-theme'),
                ],
                [
                    'question' => __('What if one repair turns into a larger issue?', 'silver-peak-theme'),
                    'answer'   => __('If something needs a different specialist or a larger scope, you will get a clear recommendation before moving forward.', 'silver-peak-theme'),
                ],
            ],
            'area_body' => __('General repair appointments are available throughout Las Vegas, Henderson, Summerlin, and nearby neighborhoods based on the size of the repair list.', 'silver-peak-theme'),
            'cta_title' => __('Ready to take care of your home repair list?', 'silver-peak-theme'),
            'cta_body' => __('Send over the items you want handled and we will help you plan the most practical next step.', 'silver-peak-theme'),
        ],
        'seasonal-maintenance' => [
            'hero_eyebrow' => __('Seasonal Maintenance', 'silver-peak-theme'),
            'hero_lead' => __('Routine maintenance helps Las Vegas homeowners stay ahead of wear, weather, and the small issues that become expensive repairs when ignored.', 'silver-peak-theme'),
            'hero_card_title' => __('Plan seasonal upkeep', 'silver-peak-theme'),
            'hero_card_body' => __('If you want a practical maintenance partner, we can help you plan the most important items for the season.', 'silver-peak-theme'),
            'benefits_heading' => __('Why homeowners stay ahead with seasonal maintenance', 'silver-peak-theme'),
            'benefits' => [
                [
                    'title' => __('Fewer surprise repairs', 'silver-peak-theme'),
                    'body'  => __('Regular checkups help catch wear, failing sealants, and early problem areas before they lead to bigger damage.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('A home that stays safer and more efficient', 'silver-peak-theme'),
                    'body'  => __('Small maintenance tasks support comfort, energy performance, and the day-to-day condition of the property.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('A realistic plan for the season ahead', 'silver-peak-theme'),
                    'body'  => __('Instead of guessing what matters most, homeowners get a clearer picture of what should be addressed now and what can wait.', 'silver-peak-theme'),
                ],
            ],
            'problems_title' => __('Maintenance concerns that are easier to handle before they grow', 'silver-peak-theme'),
            'problems_intro' => __('Seasonal upkeep is most useful when you want to avoid the rush of reactive repairs and keep the house in better shape year-round.', 'silver-peak-theme'),
            'problems' => [
                __('Caulking, seals, and weather-exposed areas starting to show wear', 'silver-peak-theme'),
                __('Minor exterior or interior upkeep tasks that never seem urgent enough on their own', 'silver-peak-theme'),
                __('A home that needs a seasonal once-over before summer heat or cooler weather', 'silver-peak-theme'),
                __('Uncertainty about which maintenance items matter most right now', 'silver-peak-theme'),
            ],
            'process_heading' => __('A straightforward maintenance process built around the season', 'silver-peak-theme'),
            'process_steps' => [
                [
                    'title' => __('Review your home and priorities', 'silver-peak-theme'),
                    'body'  => __('We start with the areas you are concerned about and talk through the seasonal needs of the property.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Build a focused maintenance list', 'silver-peak-theme'),
                    'body'  => __('The visit is organized around the most useful maintenance tasks for comfort, appearance, and prevention.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Handle the work and flag future watch points', 'silver-peak-theme'),
                    'body'  => __('You get the maintenance completed along with a clear idea of anything that should be monitored later.', 'silver-peak-theme'),
                ],
            ],
            'faq' => [
                [
                    'question' => __('What does seasonal maintenance usually include?', 'silver-peak-theme'),
                    'answer'   => __('It can include sealant checks, minor exterior touchups, hardware adjustments, inspection of wear-prone areas, and other seasonal upkeep items based on the home.', 'silver-peak-theme'),
                ],
                [
                    'question' => __('Is this only for older homes?', 'silver-peak-theme'),
                    'answer'   => __('No. Newer homes benefit from regular upkeep too, especially in high-use or weather-exposed areas.', 'silver-peak-theme'),
                ],
                [
                    'question' => __('Can I book this once or on a recurring basis?', 'silver-peak-theme'),
                    'answer'   => __('Either approach can work. Some homeowners want a seasonal visit, while others just want help getting caught up before a busy stretch.', 'silver-peak-theme'),
                ],
            ],
            'area_body' => __('Seasonal maintenance visits are available across Las Vegas, Henderson, Summerlin, and nearby communities depending on schedule and property needs.', 'silver-peak-theme'),
            'cta_title' => __('Want to stay ahead of seasonal wear and repairs?', 'silver-peak-theme'),
            'cta_body' => __('Reach out with a few details about your home and we can recommend a practical maintenance starting point.', 'silver-peak-theme'),
        ],
        'punch-list-projects' => [
            'hero_eyebrow' => __('Punch List Projects', 'silver-peak-theme'),
            'hero_lead' => __('This service is built for homeowners who want to wrap up a backlog of loose ends, move-in tasks, or pre-listing fixes without dragging the process out for months.', 'silver-peak-theme'),
            'hero_card_title' => __('Organize your project list', 'silver-peak-theme'),
            'hero_card_body' => __('If you have several unfinished items around the house, we can help group the work into a practical plan.', 'silver-peak-theme'),
            'benefits_heading' => __('Why homeowners use punch list support', 'silver-peak-theme'),
            'benefits' => [
                [
                    'title' => __('Momentum on unfinished projects', 'silver-peak-theme'),
                    'body'  => __('A punch list visit helps move stalled items forward so the house feels more complete and functional.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Better preparation for move-in or resale', 'silver-peak-theme'),
                    'body'  => __('Small updates and repairs can make a home feel more polished before settling in or putting it on the market.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('One plan for a mixed list of tasks', 'silver-peak-theme'),
                    'body'  => __('This works well when the list includes a range of small repairs, touchups, adjustments, and finishing items.', 'silver-peak-theme'),
                ],
            ],
            'problems_title' => __('The kinds of project lists this service helps finish', 'silver-peak-theme'),
            'problems_intro' => __('Punch list work is a good fit when there are several important items, but none of them are large enough to justify managing multiple separate jobs.', 'silver-peak-theme'),
            'problems' => [
                __('A move-in checklist with repairs, installs, and finishing details still hanging over the house', 'silver-peak-theme'),
                __('Pre-sale fixes that would help the property show better without a full renovation', 'silver-peak-theme'),
                __('A mix of touchups, adjustments, and minor improvements spread across different rooms', 'silver-peak-theme'),
                __('Projects that stalled after the main work was finished and now need a final push', 'silver-peak-theme'),
            ],
            'process_heading' => __('A practical way to turn a backlog into a finished list', 'silver-peak-theme'),
            'process_steps' => [
                [
                    'title' => __('Walk through the full punch list', 'silver-peak-theme'),
                    'body'  => __('We review the items you want handled and identify what can be grouped into one scope of work.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Prioritize the most useful tasks first', 'silver-peak-theme'),
                    'body'  => __('The plan focuses on the repairs and finishing items that will make the biggest difference right away.', 'silver-peak-theme'),
                ],
                [
                    'title' => __('Work through the list with steady progress', 'silver-peak-theme'),
                    'body'  => __('The goal is to bring order to a scattered list and get meaningful items completed in a clean, organized way.', 'silver-peak-theme'),
                ],
            ],
            'faq' => [
                [
                    'question' => __('What is a punch list project?', 'silver-peak-theme'),
                    'answer'   => __('It is a grouped list of smaller repairs, finishing details, adjustments, or move-in tasks that are better handled together than as separate appointments.', 'silver-peak-theme'),
                ],
                [
                    'question' => __('Can this help with move-in preparation?', 'silver-peak-theme'),
                    'answer'   => __('Yes. It is a good fit for homeowners who want to handle repairs, touchups, and practical updates before fully settling in.', 'silver-peak-theme'),
                ],
                [
                    'question' => __('Is this useful before putting a home on the market?', 'silver-peak-theme'),
                    'answer'   => __('Absolutely. Taking care of visible repair items and unfinished details can help the property feel more maintained and ready to show.', 'silver-peak-theme'),
                ],
            ],
            'area_body' => __('Punch list and move-in project appointments are available throughout Las Vegas, Henderson, Summerlin, and nearby neighborhoods depending on scope and timing.', 'silver-peak-theme'),
            'cta_title' => __('Need help finishing a backlog of home projects?', 'silver-peak-theme'),
            'cta_body' => __('Send over your list and we can help you turn it into a manageable plan with clear next steps.', 'silver-peak-theme'),
        ],
    ];

    $slug = '';

    if (is_singular('page')) {
        $slug = get_post_field('post_name', get_queried_object_id());
    }

    if (isset($services[$slug])) {
        return array_replace_recursive($defaults, $services[$slug]);
    }

    return $defaults;
}

function silver_peak_theme_menu_fallback(): void
{
    echo '<ul class="primary-menu primary-menu--fallback">';
    echo '<li><a href="' . esc_url(home_url('/')) . '">' . esc_html__('Home', 'silver-peak-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/services')) . '">' . esc_html__('Services', 'silver-peak-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/blog')) . '">' . esc_html__('Blog', 'silver-peak-theme') . '</a></li>';
    echo '<li><a href="' . esc_url(home_url('/contact')) . '">' . esc_html__('Contact', 'silver-peak-theme') . '</a></li>';
    echo '</ul>';
}
