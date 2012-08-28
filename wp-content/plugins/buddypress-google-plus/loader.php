<?php 
/**
Plugin Name: BuddyPress Google Plus
Plugin URI: http://buddypress.org/community/groups/buddypress-google-plus
Description: Let your members and groups show their google plus profile button allowing other users to follow them. Using the google's profile widget, the plugin fetches your members and/or groups profile ID and displays their profile button in the member's/group's header. 
Version: 1.1
Author: Charl Kruger
Author URI: Charlkruger.com
License:GPL2
**/

function bp_googlepluscj_init() {
	require( dirname( __FILE__ ) . '/buddypress-google-plus.php' );
}
add_action( 'bp_include', 'bp_googlepluscj_init' );

?>