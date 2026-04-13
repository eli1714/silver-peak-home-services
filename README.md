# Silver Peak Home Services

Custom WordPress project built to simulate a real-world home services client site.

This project focuses on building a practical, production-style WordPress theme with reusable templates, responsive layouts, and a clean structure that could realistically be handed off to a client or team.

## What I Built

- Custom homepage with modular sections for flexible content updates
- Services overview page with reusable service detail templates
- Blog archive and single post templates
- Contact page with a quote request flow using Contact Form 7
- Responsive navigation and basic front-end interactions

## Tech Stack

- WordPress
- PHP (custom theme development)
- HTML / CSS (custom styling)
- Vanilla JavaScript
- Lando (local development)

## Key Focus Areas

- Building reusable and maintainable WordPress templates
- Structuring theme files in a clean, scalable way
- Creating a responsive layout that works across devices
- Simulating a real client workflow (services, blog, contact flow)
- Keeping the repo focused on custom theme work (not WordPress core)

## Project structure

```text
silver-peak-home-services/
├── .lando.yml
├── .gitignore
├── README.md
└── wordpress/
    └── wp-content/
        ├── plugins/
        └── themes/
            └── silver-peak-theme/
```

The custom theme lives in:

`wordpress/wp-content/themes/silver-peak-theme/`

## Local development

### Requirements

- Docker
- [Lando](https://lando.dev/)
- Git

### Setup

1. Clone the repository.
2. Make sure WordPress is available inside `wordpress/`.
3. Start the environment:

```bash
lando start
```

4. Check the local URLs:

```bash
lando info
```

5. If you’re using a fresh database, log into WordPress and assign the page templates as needed.

### Useful commands

Start:

```bash
lando start
```

Stop:

```bash
lando stop
```

Project info:

```bash
lando info
```

WP-CLI:

```bash
lando wp plugin list
```

## Plugin setup

The contact page is set up to work with:

- [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)

### Contact Form 7

1. Install and activate Contact Form 7.
2. Create a form called `Request a Quote`.
3. Add these fields:
   - Full Name
   - Phone Number
   - Email Address
   - Service Needed
   - Project Details
4. Paste the shortcode into the `Contact` page content.

The contact template includes fallback form markup, so the page layout still works even before the plugin is configured.

## Mail setup (Production Note)

For a real hosted version, the form should not rely on default PHP mail.

Recommended setup:

- Contact Form 7
- WP Mail SMTP
- a provider like Brevo

## Notes

This project is meant to showcase practical WordPress theme development.
The focus is on clean structure, reusable components, and a realistic small-business website setup.
