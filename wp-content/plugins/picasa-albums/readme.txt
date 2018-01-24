=== Picasa Albums ===
Contributors: MikhaikKozlov
Donate link: http://mikhailkozlov.com/
Tags: picasaweb, image hosting, picasa, albums, custom post type, CND, fancybox
Requires at least: 3.0.0
Tested up to: 3.2.1
Stable tag: trunk

Picasa Albums For WordPress helps to easily import, display and manage your public Picasa Web Albums right in your WordPress site.

== Description ==

Picasa Albums For WordPress gives you full control over how you Picasa Albums displayed in your blog by adding custom post type "Albums" to your WP 3.0. Once Picasa Albums imported, you can rearrange images, hide images and/or change album cover image. Users can add specific album description and control which albums to display on the site. Picasa Albums Settings page allows to set thumbnail size, max image size and cropping options for your images.

If you looking to ease the load on your PHP server by serving static content (images) from CDN or simply short on space on your hosting, Picasa Album is great solutions for you. All images are stored on Google's servers and served to users directly. Picasa Albums does not store any images on your server.

Picasa Albums allows you to import images from any number of Picasa accounts, so you can combine all of your family's pictures in one place. 

Once installed you control:

	* Which albums to show.
	* Album's title, url, description, thumbnail and thumbnail size
	* Which images in the albums to show, images order, thumbnail size and maximum images size
	* If own multiple Picasa accounts, you can import from all of them

Limitations:

    * WordPress 3 and newer
    * PHP 5 with CURL enabled (most web hosters have it)
    * mod_rewrite is required and you must use permalink.

This plugin includes Fancybox and uses it to display enlarged images.

Visit my blog for more great ideas on how you can take advantage of Google's free with Picasa Albums.

Report issues https://github.com/315design/Picasa-Albums-For-WordPress/issues


== Installation ==
1. Register @ http://picasaweb.google.com/ and get your Picasa Web Albums ID (it is free, usually is the same as your Google ID).
2. Get files from this repo and put them into "picasa-albums" folder (actually any folder will work).
3. Go to Plugins section of your WordPress and activate plugin "Picasa Albums" plugin.
4. Head over to "Picasa Albums" page in "Settings" section of the admin menu.
5. Enter you Picasa Web Albums ID and click import.
6. Head over to "Albums" section and publish albums that you like.
7. Make sure that permalinks are enabled.
8. Add link to Albums category to your main menu. You can use Menus section to add custom link "http://my_website.com/album/" or you can hard code it to your site.
9. Done.


== Licence ==

This plugin is distributed under GPLv2 (or later). You can and you should:

    * use the software for any purpose,
    * change the software to suit your needs,
    * share the software with your friends and neighbors, and
    * share the changes you make (please do).

== Change Log ==

v. 1.0.4

	* /admin/scripts.js - relative path for ajax requests per issue #5 in github. Thanks stephanvierkant. 
	* /plugin.php - simpleXml warning path not found possible fix. Thanks stephanvierkant.

v. 1.0.5

	* removed album update. now albums only imported. all updates are done manually. Closes #7
	* added the_excerpt() filter for better compatibility with custom themes	

v. 1.0.6
	* GPLv2 (or later) license
	* Updated Fancybox to the latest code. Added jQuery to the list of libs required during init
	* Updated image thumbnails to work as expected 
	* Custom url for picasa albums 
	* New hooks to overwrite defualt layout without changing plagin 
 