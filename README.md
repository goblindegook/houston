# Houston

Korolyov is a child theme for [p2](http://p2theme.com/) based on [Houston](http://wordpress.org/themes/houston), as designed by the fine folks at [WooThemes](http://woothemes.com). It features a device-agnostic design so the layout responds to suit the browser, making it easy to stay up to date when you're on the go.

### Resources

Korolyov makes use of the following resources:

* [FontAwesome Icon font](http://fortawesome.github.io/Font-Awesome/). License: [SIL Open Font License (OFL)](http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL)

## Changelog

### Version 1.0.0 (2014-01-26)
* Removed leftmost column, moving the post box to the top.
* Removed the handy old widget region beneath the post box.
* Reinstated the title field, automatically switch between post and status formats.
* Reinstated the insert media button.
* [Theme My Login](http://wordpress.org/plugins/theme-my-login/) integration.
* Various style changes.

## Modified Templates

* header.php - Removed `get_sidebar()`. Added `.header-inner`.
* footer.php - Added `get_sidebar()`.
* post-form.php - Removed post types. Removed citation input. Changed gravatar size (retina love). Added `.inputs` wrapping div.
* sidebar.php - Just call the sidebar...
