# Silver Peak Home Services

Custom WordPress project for a fictional local home services company.

This repo is mainly here to track the custom theme work. The site includes a custom homepage, services pages, blog templates, and a contact flow built to work with Contact Form 7.

## What’s in the project

- custom homepage templates and sections
- services overview page
- reusable service detail template
- contact page with a quote request layout
- blog archive and single post templates
- responsive navigation and basic front-end interactions

## Stack

- WordPress
- PHP
- custom theme templates
- custom CSS
- vanilla JavaScript
- Lando for local development

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

Third-party plugin code is not versioned in this repo. The goal is to keep the repository focused on the custom theme and project-specific work.

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

## Mail setup

For a real hosted version, the form should not rely on default PHP mail.

The simplest setup is:

- Contact Form 7
- WP Mail SMTP
- a provider like Brevo

## Notes

This project is meant to show custom WordPress theme work. The focus is on practical template structure, responsive front-end work, and a believable small-business site setup.
