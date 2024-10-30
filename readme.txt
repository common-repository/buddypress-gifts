=== Plugin Name ===
Contributors: warut
Tags: buddypress, gifts
Requires at least: WordPress 2.9.1, BuddyPress 1.2.1
Tested up to: WordPress 2.9.2 / BuddyPress 1.2.3
Stable tag: 1.1

Send a gift image and message to user in BuddyPress profile using activity stream function.

== Description ==

This plugin make user can send gifts image to other members in BuddyPress. It use activity stream to keep the gifts sent information.
Member can choose a gift from gift box in others member gifts tab and type a message to receiver member.
Receiver member can delete or reply message using activity stream function in own profile.
Administrator can upload delete and edit gifts item in backend admin dashboard

== Installation ==

1. Upload buddypress-gifts to the /wp-content/plugins/ directory or use automatic installation from wp plugin panel
2. Activate the plugin through the 'Plugins' menu in WordPress
* upload 64*64px image to buddypress-gifts/includes/images before activate if want to use own gifts image or add one by one in admin dashboard

== Changelog ==
= 1.1 =
* fix name and loging name not match
* fix user can click multiple time
* fix activate load image multiple time
* fix incorrect add admin image
* fix user can send empty gift
* cleanup code and file

= 1.0 =
* first beta release version 
* no clean uninstall. have to manual delete bp_gifts table and activity stream after uninstall 