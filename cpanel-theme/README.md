# cPanel Theme Deploy

This folder exists so the WordPress theme can be pulled from GitHub and copied to cPanel without using the zip package.

The deployable theme folder is:

- `cpanel-theme/kolseg-design-services`

Suggested cPanel workflow:

1. Clone this repo somewhere outside `public_html`.
2. Run `git pull` whenever updates are pushed.
3. Run `bash cpanel-theme/deploy-theme.sh /home/USERNAME/public_html/wp-content/themes`

That command will sync `cpanel-theme/kolseg-design-services` into:

- `/home/USERNAME/public_html/wp-content/themes/kolseg-design-services`

Notes:

- `wp-theme/kolseg-design-services` is the source theme used for packaging.
- `cpanel-theme/kolseg-design-services` is the pull-friendly copy for cPanel terminal deploys.
- After deployment in WordPress admin, go to `Appearance > Kolseg Setup` and use the setup actions if the site is still showing old content.
