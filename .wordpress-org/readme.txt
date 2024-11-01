=== Plugin Name ===
Contributors: bradmkjr
Donate link: http://iphods.com/
Tags: word count, dashboard, wordcount pro
Requires at least: 3.8.1
Tested up to: 3.9
Stable tag: 1.25
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Displays wordcount below posts on front end of wordpress site.

== Description ==

Do you feel the need to know how many words in a blog post or page, but don't want to have to log into the post editor to find out? Then this is the plugin for you. It adds a trailing div after post content to show you total word count for the post. Yes, I see the word count is visible on the editor screen, but this is for situations where you don't want to have to visit the dashboard to find out the exact word count.

== Installation ==

1. Upload `wordcount-pro.php` to the `/wp-content/plugins/wordcount-pro` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. View website, logged in as an administrator

== Frequently Asked Questions ==

= Can I display word count for all users? =

Yes, change false on line 17 to true

`  $all_users = false;`

to 

`  $all_users = true;`

== Screenshots ==

1. This screen shot showing the wordcount below a sample lipsum blog post of 123 words

== Changelog ==

= 1.25 =
* added all users flag, to easily show word count to all users

= 1.0 =
* initial public version

= 0.5 =
* initial beta version

== Upgrade Notice ==

= 1.25 =
no upgrade issues are known at this time.



