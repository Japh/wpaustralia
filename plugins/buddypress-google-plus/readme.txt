=== BuddyPress Google Plus ===
Contributors: CJ Kruger
Donate link:
Tags: buddypress, buddypress member, buddypress google plus, google plus, google plus profile
Requires at least: 3.2.1
Tested up to: 3.3.1
BuddyPress: 1.5.1
Stable tag: 1.1

== Description ==

Let your members and groups show their google plus profile button allowing other users to follow them. Using the google's profile widget, the plugin fetches your members and/or groups profile ID and displays their profile button in the member's/group's header.

If your BuddyPress community is active on Google Plus, this plugin is a great tool for boosting communication both on and off your website.

It's really easy to setup, even if you have an existing community:

Members: Once you ( the site admin ) have set up the members component, all your members have to do is enter in their Google Profile ID upon registration and existing members via editing their profile settings.

Groups: Once you ( the site admin ) have set up the groups component, all your group admins have to do is enter in their associated Google Profile ID when they create a group and existing groups via editing their group's details.

== Installation ==

= Automatic Installation =

1. From inside your WordPress administration panel, visit 'Plugins -> Add New'
2. Search for `BuddyPress Google Plus` and find this plugin in the results
3. Click 'Install'
4. Once installed, activate via the 'Plugins -> Installed' page
5. From your admin panel, navigate to 'Buddypress' -> 'Profile fields'
6. Click 'Add New Field' and give the field a title
7. From your admin panel, navigate to 'Buddypress' -> 'Buddypress Google Plus'
8. Enable the 'Members' option and save
9. Name 'Mirror Profile Field Title' the same as your title from step 6

= Manual Installation =

1. Upload `buddypress-google-plus` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. From your admin panel, navigate to 'Buddypress' -> 'Profile fields'
4. Click 'Add New Field' and give the field a title
5. From your admin panel, navigate to 'Buddypress' -> 'Buddypress Google Plus'
6. Enable the 'Members' option and save
7. Name 'Mirror Profile Field Title' the same as your title from step 6

== Notes ==
License.txt - contains the licensing details for this component.

== Roadmap ==

= 1.2 =
* Open to suggestions

== Frequently Asked Questions ==

= What is the 'Group Field Title' for? =

The group field title is the title that will be displayed right above the text box where the group will enter in their Google Profile ID.

= Will the 'Mirror Profile Field Title' also be displayed above the text box where the member will enter in their Google Profile ID? =

No, the text box will use the title you gave your Xprofile field as described in step 6 of the plugin installation instructions. The 'Mirror Profile Field Title' is used to fetch the members meta ( attached data ) though if the two differ, no data will be returned thus no button will display.

= Where can I get support or request a feature? =

I will only respond to the [Buddypress Twitter Forum](http://buddypress.org/community/groups/buddypress-google-plus/forum/ �Buddypress Twitter Support�) or on my Blog ( I am working on my blog so its abit of a mess, best you use the Forum )

== Screenshots ==

1. Members can display their Google Plus Profile button
2. Groups can display their Google Plus Profile button
3. Large Button of members profile
4. Button size

== Changelog ==

= 1.1 =
* Added variable button sizes
* Added option to display the group button before or after the group description.
* Fixed a shared function with BP Twitter

= 1.0 =
* initial release