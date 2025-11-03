// ...existing code...
# ftp-yyc-wp
// ...existing code...
# ftp-yyc-wp

This repository contains the WordPress theme development files for the ftp-yyc project. It is intended for local theme development, testing, and deployment to the WordPress site running in this project workspace.

## Contents
- Theme source (this directory or subdirectories)
- Assets: CSS, JS, images
- Template files: PHP theme templates, partials, and functions
- Build tooling (if present): package.json, webpack/gulp configuration

## Requirements
- Local WordPress environment (Local by Flywheel, MAMP, Valet, Docker, etc.)
- PHP compatible with your WordPress install
- Node.js + npm (only if build tooling is used)

## Setup (local)
1. Make sure WordPress is running in the local site.
2. Place this theme folder in wp-content/themes/ or create a symlink:
   - ln -s /path/to/repo /path/to/site/wp-content/themes/ftp-yyc
3. Activate the theme from WordPress Admin -> Appearance -> Themes.

If there is a package.json:
4. From the theme folder run:
   - npm install
   - npm run dev (or the appropriate script) to start watcher/build

## Development
- Edit template files (PHP) and assets under the theme folder.
- Use browser dev tools and error logs (WP_DEBUG) to troubleshoot.
- Follow WordPress Coding Standards for PHP, HTML, CSS, and JS.

## Build & Deployment
- If build scripts exist, run the production build (e.g., npm run build).
- Deploy the theme folder to the production wp-content/themes/ directory or use your deployment pipeline.

## Structure (example)
- style.css — theme header and main stylesheet
- functions.php — theme setup and enqueueing scripts/styles
- index.php, header.php, footer.php, single.php, page.php — templates
- as