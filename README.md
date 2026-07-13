# Mohammed Machit (WordPress Theme)

This repository contains a custom WordPress theme located at:

- `wp-content/themes/mohammed-machit-theme/`

It registers two Custom Post Types (CPTs) and provides theme templates that render those CPTs using ACF (Advanced Custom Fields).

---

## Theme summary

### Custom Post Types (CPT)
Defined in `wp-content/themes/mohammed-machit-theme/functions.php`:

- **Services**
  - Post type key (slug): `services`
  - Supports: title, editor, thumbnail
- **Projects**
  - Post type key (slug): `projects`
  - Supports: title, editor, thumbnail

### ACF fields used by templates
Templates call the following ACF field names:

**Services template usage**
- `service_icon` (image field)
- `service_short` (text)
- `service_btn_link` (url)
- `service_btn_text` (text)

**Projects template usage**
- `project_image` (image field)
- `project_short` (text)
- `project_link` (url)

> Note: The admin-side ACF Field Group “Location” rules must match the post type keys actually registered in WordPress.

---

## Important theme files

### Registration / theme setup
- `wp-content/themes/mohammed-machit-theme/functions.php`
  - Theme setup hooks
  - CPT registrations
  - Menu registration
  - Theme stylesheet enqueue

### Templates
- `index.php`
- `front-page.php`
- `archive-services.php`
- `archive-projects.php`
- `single-services.php`
- `single-projects.php`

### Template parts (examples)
- `template-parts/services.php`
- `template-parts/projects.php`
- `template-parts/hero.php`

---

## Development / local setup

Because this is a WordPress project, the theme must be installed and activated in a WordPress site.

1. Ensure the theme is active in **Appearance → Themes**.
2. Install/activate **ACF** (and ACF Pro if you use Pro features).
3. Create ACF Field Groups for:
   - Services post type
   - Projects post type
4. Confirm ACF **Location rules** match the post type key used by WordPress.
5. Visit:
   - **Services → Edit**
   - **Projects → Edit**
   to verify the ACF meta boxes/fields appear.

---

## Common issue: ACF fields not showing on Edit screens

Symptoms: You don’t see any ACF fields when editing Services/Projects.

Causes (most common):
- ACF Field Group **Location** rule Post Type value doesn’t match the CPT post type key.

Fix:
- In **ACF → Field Groups**, edit the field group and ensure Location → Rule uses the exact post type key that WordPress registers.

---

## Assets
Theme stylesheets/assets are under:

- `wp-content/themes/mohammed-machit-theme/style.css`
- `wp-content/themes/mohammed-machit-theme/assets/`

---

## Files you can extend

- Add new ACF field usage by updating templates in `template-parts/` or the corresponding `single-*.php` / `archive-*.php` files.
- Add new CPTs in `functions.php`.

---

## License
No license included in this repository snapshot.
