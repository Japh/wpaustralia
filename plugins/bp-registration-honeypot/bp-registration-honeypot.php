<?php
/*
Plugin Name: BuddyPress Registration Honeypot
Plugin URI: http://www.wpaustralia.org
Description: This BuddyPress plugin adds an input field on the registration that is hidden for normal users and will be filled out by bots. If the field contains data then the registration will fail. If it's empty then the registration will continue. This plugin has no options because options are overrated!
Version: 0.1
Author: Bronson Quick
Author URI: http://www.sennza.com.au/
License: GPL2
*/
/*
 * Note: If this proves to be successful then I will put this into a class of course and I will actually format my
 * code in the WordPress way :P
 */
function bq_buddypress_registration_honeypot() { ?>
	<?php //Lets wrap this and hide it with CSS ?>
	<div id="basic-details-honeypot-section" class="honeypot_container register-section">
		<?php //Lets give it a dummy label that spam bots will think is real ?>
		<label for="signup_honeypot"><?php _e( 'Phone', 'wpaustralia' ); ?></label>
		<?php //I can't see us needing to output errors but I'll add an action here in case accessibility issues come up! ?>
		<?php do_action( 'bq_bq_buddypress_registration_honeypot_errors' ); ?>
		<input type="text" name="signup_honeypot" id="signup_honeypot" value="" />
		<p>This field is for validation purposes and should be left blank.</p>
	</div>
<?php
}
add_action( 'bp_after_account_details_fields', 'bq_buddypress_registration_honeypot' );

function bq_buddypress_registration_honeypot_validation() {
	global $bp;
	if ( !empty($_POST['signup_honeypot']) )
		$bp->signup->errors['signup_honeypot'] = __( 'Looks like you are a spammer', 'wpaustralia' );
}
add_action( 'bp_signup_validate', 'bq_buddypress_registration_honeypot_validation' );

function bq_buddypress_registration_honeypot_css() {
	wp_register_style( 'honeypot-css',
		plugins_url('/css/bp-honeypot.css',
			__FILE__),
			 array(),
			'0.1');
	wp_enqueue_style( 'honeypot-css' );
}
add_action( 'wp_enqueue_scripts', 'bq_buddypress_registration_honeypot_css' );