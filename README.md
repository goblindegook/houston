# Houston
Korolyov is a child theme for [p2](http://p2theme.com/) based on Houston, as designed by the fine folks at [WooThemes](http://woothemes.com). It features a device-agnostic design so the layout responds to suit the browser, making it easy to stay up to date when you're on the go.

### Resourses
Korolyov makes use of the following resources:

* [FontAwesome Icon font](http://fortawesome.github.io/Font-Awesome/). License: [SIL Open Font License (OFL)](http://scripts.sil.org/cms/scripts/page.php?site_id=nrsi&id=OFL)

## Changelog

### Version 1.3.0 - 2014.01.26
* Removed leftmost column, moving the post box to the top.
* Removed the handy old widget region beneath the post box.
* Reinstated the title field, automatically switch between post and status formats.
* Theme My Login integration.
* Various style changes.

## Modified Templates
* header.php - Removed `get_sidebar()`. Added `.header-inner`.
* footer.php - Added `get_sidebar()`.
* post-form.php - Removed post types. Removed citation input. Changed gravatar size (retina love). Added `.inputs` wrapping div.
* sidebar.php - Just call the sidebar...
