===  Update Scheduled Post Dates ===
Contributors: seojacky
Tags: scheduled posts, publication date, modification date, future posts
Requires at least: 5.0
Tested up to: 6.2
Requires PHP: 7.4
Stable tag: 1.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Updates the post publication and modification dates to the actual publication date.

== Description ==

The "Update Scheduled Post Dates" plugin ensures that scheduled posts have their publication and modification dates updated to the actual publication date when they are published. By default, WordPress keeps the publication date of scheduled posts as the date they were initially scheduled, even after they are published. This can be misleading for users who expect the publication date to reflect when the post actually goes live.

With this plugin activated, scheduled posts will have their publication and modification dates automatically updated to the current time when they are published. This ensures that the post dates accurately reflect when the content becomes available to viewers, improving clarity and transparency for both content creators and site visitors.

== Installation ==

1. Upload the `update-scheduled-post-dates` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Frequently Asked Questions ==

= Why do I need this plugin? =

By default, WordPress retains the original scheduled date of posts even after they are published. This can be confusing for users who expect the publication date to reflect when the post actually goes live. This plugin automatically updates the publication and modification dates of scheduled posts to the actual publication date, providing a more accurate representation of when the content becomes available.

= Will this plugin affect already published posts? =

No, this plugin only affects scheduled posts that are published after it's activated. It does not retroactively update the dates of posts that have already been published.

== Changelog ==
= 1.1 - 02.04.2024 =
* Initial release of the plugin
