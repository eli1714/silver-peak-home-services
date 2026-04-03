# Silver Peak Home Services

Portfolio-ready custom WordPress project for a local business website. This repository is set up for local development with Lando and Git, with WordPress intended to live in `wordpress/` and custom project work tracked separately from core files.

## Project Overview

Silver Peak Home Services is a custom WordPress build intended to showcase a practical small-business website workflow. The goal is to keep the repository focused on project code, local development setup, and the custom theme rather than generated files or WordPress core.

## Project Structure

```text
silver-peak-home-services/
├── .lando.yml
├── .gitignore
├── README.md
└── wordpress/
```

## Local Setup

### Requirements

- [Docker](https://www.docker.com/)
- [Lando](https://lando.dev/)
- Git

### Initial Setup

1. Clone the repository.
2. Add a WordPress install inside the `wordpress/` directory.
3. From the project root, start Lando:

```bash
lando start
```

4. Open the local site URL provided by Lando.
5. Complete the standard WordPress setup in the browser if needed.

## Starting with Lando

This project uses a simple Lando configuration for local WordPress development.

- Start the environment:

```bash
lando start
```

- Stop the environment:

```bash
lando stop
```

- Get project info and local URLs:

```bash
lando info
```

- Run WP-CLI commands:

```bash
lando wp plugin list
```

## Development Notes

- WordPress core lives in `wordpress/`
- Custom theme development will happen in `wordpress/wp-content/themes/`
- The Git history is meant to reflect custom project work, not generated uploads, cache files, WordPress core updates, or third-party plugin code

## Required Plugin Setup

This theme currently expects one plugin for the contact workflow:

- [Contact Form 7](https://wordpress.org/plugins/contact-form-7/)

Plugin code is intentionally not versioned in this repository. The goal is to keep the project focused on custom theme work and make it easier to explain in a portfolio review.

### Contact Form 7 Setup

1. Install and activate Contact Form 7.
2. Create a form titled `Request a Quote`.
3. Add fields for:
   - Full Name
   - Phone Number
   - Email Address
   - Service Needed
   - Project Details
4. Paste the form shortcode into the content area of the `Contact` page.

The contact template includes fallback placeholder markup if Contact Form 7 is not active or no shortcode has been added yet, so the layout still renders cleanly during development.

### Mail Delivery Note

Contact Form 7 handles the form UI, but reliable email delivery usually requires SMTP or a transactional mail service on the final host. For a real deployment, configure mail delivery separately instead of relying on default PHP mail behavior.

## Basic Git Workflow

```bash
git status
git add .
git commit -m "Add initial project setup"
```

Suggested workflow:

1. Create or update a feature branch.
2. Make focused changes.
3. Commit with clear, descriptive messages.
4. Push to GitHub regularly.

## Features

- Custom homepage, services, contact, and blog templates
- Reusable service-detail page structure
- Responsive, custom-coded theme styles and lightweight JS enhancements
- Contact page layout ready for Contact Form 7 integration
