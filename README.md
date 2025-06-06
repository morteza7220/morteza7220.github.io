# Custom Mobile Nav Theme

A WordPress block theme with a custom mobile navigation menu.

**Version:** 1.0
**Author:** AI Developer
**License:** GNU General Public License v2 or later
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

## Description

This theme is a block-based WordPress theme designed to provide a clean foundation and includes a custom-configured mobile navigation menu. The primary navigation will be visible on desktop screens, and a dedicated mobile-friendly menu will appear on smaller screens (782px width and below).

## Installation

1.  Download the theme as a ZIP file.
2.  In your WordPress admin panel, go to **Appearance > Themes**.
3.  Click **Add New** and then **Upload Theme**.
4.  Choose the downloaded ZIP file and click **Install Now**.
5.  Once installed, click **Activate**.

## Features

*   **Block-Based Theme:** Fully compatible with the WordPress Site Editor.
*   **Responsive Design:** Adapts to different screen sizes.
*   **Custom Mobile Navigation:**
    *   A dedicated "Mobile Menu" location is available under **Appearance > Menus**.
    *   Assign a menu to the "Mobile Menu" location to populate the mobile navigation.
    *   The mobile menu is designed as an overlay that opens when the menu icon is clicked on screens 782px wide or smaller.
    *   The primary menu (assigned to "Primary Menu" location) will be hidden on these smaller screens.
*   **Basic Theme Supports:** Includes support for title tags, post thumbnails, and automatic feed links.

## Theme Structure

*   **`/parts`**: Contains HTML template parts like the header, footer, and mobile navigation.
*   **`/patterns`**: Intended for block patterns (currently empty).
*   **`/templates`**: Contains the main HTML templates like `index.html`.
*   **`functions.php`**: Handles theme setup, script/style enqueuing, and menu registration.
*   **`index.php`**: The main PHP fallback file for WordPress.
*   **`style.css`**: Contains theme information and CSS styles, including those for the mobile navigation.

## Using the Mobile Navigation

1.  Go to **Appearance > Menus** in your WordPress admin.
2.  Create a new menu or edit an existing one.
3.  In the "Menu Settings" at the bottom of the menu editor, check the box for **Mobile Menu** under "Display location".
4.  Save your menu.
5.  The theme will automatically use this menu for the mobile navigation experience. The mobile menu icon (hamburger icon) and the slide-out overlay are handled by the WordPress navigation block.

## Customization

*   **Site Editor:** Customize templates, template parts, and global styles via **Appearance > Editor**.
*   **CSS:** Additional CSS can be added to `style.css` or via the Customizer (**Appearance > Customize > Additional CSS**).

This theme, like WordPress, is licensed under the GPL. Use it to make something cool, have fun, and share what you've learned with others.
