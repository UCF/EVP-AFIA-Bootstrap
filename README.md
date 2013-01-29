# EVP-AFIA Bootstrap Theme

Theme built off of the Provost Bootstrap theme.  Incorporates post types from the previous Thematic version for backward-compatibility.  Also uses file replace functionality from the new HR site theme.

## Installation

### Required Plugins
* (see Notes)

### Required Installation Settings
* Theme Options > Search > Enable Google Search: Off
* Theme Options > Styles > Enable Responsiveness: Off
* (From Network Admin) All Sites > /afia/ > Edit > Settings > Uploads Use Yearmonth Folders: 0 (removes month/year permalink structure for media library uploads)

## Deployment

This theme relies on Twitter's Bootstrap framework. The Boostrap project (http://github.com/twitter/bootstrap) is added as submodule in static/bootstrap. To compile bootstrap:

1. If this is a brand new clone, run `git submodule update --init static/bootstrap`
2. Install the depenencies in the Developers section of the Boostrap README
3. Checkout the latest tag of Bootstrap
4. Run `make bootstrap` from the static/bootstrap directory

## Development

### Bootstrap

If you are making significant changes to Bootstrap (i.e. updating variables.less), create a branch on our Bootstrap branch to store the changes.

### Custom Post Types

Custom post type definitions are located in custom-post-types.php. Each definition should inherit (eventually) from the abstract CustomPostType class. Register or unregister custom post types by modiyfing the $Config::custom_post_types array in function/config.php ~ line 114.

### Custom Taxonomies

Similar organization to custom post types. Register a custom taxonomy with a custom post type by modifying the taxonomies array on the custom post type object.

## Notes

* This theme comes packaged with code from the Enable Media Replace plugin v2.8.1 (http://wordpress.org/extend/plugins/enable-media-replace/). The code has been simplfied to remove the 'Replace the file, use new file name and update all links' functionality to prevent users from modifying existing attachment URI's; this functionality can be achieved via the Resource Link 'File' meta field by uploading a new file. The file modification time shortcode has also been removed as it isn't particularly necessary here. The plugin code has been included within the theme to prevent the actual plugin from having to be installed across the network, but be aware that it can not receive automatic updates like standard plugins as it is just an include in functions.php.