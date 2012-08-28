=== Achievements for BuddyPress ===
Contributors: DJPaul
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=P3K7Z7NHWZ5CL&lc=GB&item_name=B%2eY%2eO%2eT%2eO%2eS%20%2d%20BuddyPress%20plugins&currency_code=GBP&bn=PP%2dDon
Tags: buddypress,achievement,cubepoints,reward,points,score,rank,social,gaming,tokens,status,badge,WoW,Warcraft,games,challenges
License: General Public License version 3
Requires at least: WP 3.0.1, BuddyPress 1.5
Tested up to: WP 3.3.1, BuddyPress 1.6
Stable tag: 2.3

Achievements gives your BuddyPress community fresh impetus by promoting and rewarding social interaction with challenges, badges and points.

== Description ==
Inspired by [video game achievement systems](http://en.wikipedia.org/wiki/Achievement_(video_gaming)), Achievements for BuddyPress gives your community fresh impetus by promoting and rewarding social interaction with challenges, badges and points. For example, reward users for commenting on a blog post or uploading a picture to their profile.

For information, support, premium enhancements and developer documentation, visit http://achievementsapp.com/.

[vimeo http://vimeo.com/15782949]

(skip to the 6 minute mark to see the plugin in action)

== Installation ==
1. Make sure you're running [BuddyPress](http://buddypress.org/about/story/).
1. Install via WordPress Plugins administration page.
1. Activate the plugin.
1. To get started, visit your site, and select the "Achievements" in the main navigation.

== Changelog ==
= 2.3 =
* Improves compatibility with some themes.

= 2.2 =
* Fix error when unlocking achievement when not using any of achievements' widgets, and include up-to-date .pot file.

= 2.1 =
* Requires BuddyPress 1.5. Compatibility release. Huge thanks to r-a-y for contributing 99% of the work.

= 2.0.8 -
* Added a toggle to the all available achievements widget to optionally restore previous widget behaviour from pre-2.0.7 versions.
* Add Mexican translation, courtesy of jdeltoro1973 - thanks!
* Fixed malformed CSS class name.

= 2.0.7 =
* Fixed the "on this site" select box on the create/edit achievement screen so that it lists more than 20 sites.
* Updated points box on the create/edit achievement screen to accept negative values.
* Added another filter to the achievement unlock routine to allow developers to suppress activity stream updates and notification messages.
* Fixed the all available achievements widget on multisite.
* Fixed the all available achievements widget to also show non site-specific achievements.
* Added toggle to the member achievement available/unlocked widgets to force display of logged in user's details, instead of the display user.

= 2.0.6 =
* Compatibility with WordPress 3.1 multisite.

= 2.0.5 =
* Add new "on user log in" action.
* Add support for GenesisConnect, until BuddyPress gets better template filtering.
* Fixed using certain widgets on the "my achievements" page.
* Fixed leaderboard widget score display; now respects site's number format.
* Fixed "newest" ordering on the "my achievements" page.
* Updated Portuguese Brazilian and French translations. Thanks to Arthur Freitas and Marc-Olivier Ouellet, respectively.

= 2.0.4 =
* Add new 'appearance' option for the leaderboard widget; check it out! (New widget CSS styles.)
* Fix certain widgets use of achievement pictures on WordPress multisite.
* Modified CSS files formatted to meet WordPress CSS coding standards. No style changes.
* Modified how achievement data is sanitised and stored in the database. (Template changes in _addedit.php, achievements-loop.php.)

= 2.0.3 =
* Fix hidden/inactive achievements being listed on the directory when the filter is set to "event count."
* Fix where 'unlocked by' page would interfere with other uses of the member loop on the same page (i.e. BuddyPress' members widget).
* Fix inaccurate 'unlocked by' counts; properly remove all information when a user is marked as a spammer, or their account is deleted.
* Notifications are now cleared when visiting the directory as well as on an individual achievement's page.

= 2.0.2 =
* Add support for 'Jet Event System for BuddyPress' plugin.
* Add more support for 'BuddyPress Links' plugin.
* Add "event count" option to directory filters; this sorts the list by the Achievements' action count.
* Fix hidden Achievements not being unlocked.

= 2.0.1 =
* Add some support for 'BuddyPress Links'.
* Fix users' points and counters being removed on Achievement deletion. Oops.
* Fix "mystery man" avatar activity stream size.

= 2.0 =
* Everything is brand new for BuddyPress 1.2.6. For information, support, premium enhancements and developer documentation, visit http://achievementsapp.com/.

= Pre-2.0 =
* The historical release history has been moved to a better place.

== Upgrade Notice ==
= 2.3 =
* Improves compatibility with some themes.

== Frequently Asked Questions ==
For information, support, and developer documentation, visit http://achievementsapp.com/.

== License ==
"Achievements for BuddyPress"
Copyright (C) 2009-12 Paul Gibbs

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License version 2 as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see http://www.gnu.org/licenses/.

== Screenshots ==
1. Achievement detail page
2. A few of the many Achievement action types
3. Part of the create/edit Achievement page