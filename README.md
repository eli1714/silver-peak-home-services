# Silver Peak Home Services

Portfolio-ready custom WordPress project for a local business website. This repository is set up for local development with Lando and Git, with WordPress installed in `/wordpress` and custom project work tracked separately from core files.

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

- WordPress core is intended to live in `wordpress/`
- Custom theme development will happen in `wordpress/wp-content/themes/`
- The Git history is meant to reflect custom project work, not generated uploads, cache files, or WordPress core updates

## Basic Git Workflow

```bash
git status
git add .
git commit -m "Add initial project setup"
```

## Development Paths

- WordPress lives in `/wordpress`
- The custom theme will be developed in `/wordpress/wp-content/themes/silver-peak-theme`

Suggested workflow:

1. Create or update a feature branch.
2. Make focused changes.
3. Commit with clear, descriptive messages.
4. Push to GitHub regularly.

## Features

- Placeholder for planned site features
- Placeholder for custom WordPress functionality
- Placeholder for theme components and templates

## Screenshots

- Placeholder for homepage screenshot
- Placeholder for service page screenshot
- Placeholder for mobile layout screenshot
