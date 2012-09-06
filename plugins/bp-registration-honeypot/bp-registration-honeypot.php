<?php
/**
.* Plugin Name: BuddyPress Registration Honeypot
.* Plugin URI: http://www.wpaustralia.org
.* Description: This BuddyPress plugin adds an input field on the registration that is hidden for normal users and will be filled out by bots. If the field contains data then the registration will fail. If it's empty then the registration will continue. This plugin has no options because options are overrated!
.* Version: 0.2
.* Author: Bronson Quick
.* Author URI: http://www.sennza.com.au/
.* License: GPL2
.* @package WordPress
.* @since 0.2
 */

/**
 * Constant for the plugins version number
 * @since 0.2
 * @constant BUDDYPRESS_HONEYPOT_REGISTRATION_VERSION The current plugin version number
 */
define( 'BUDDYPRESS_HONEYPOT_REGISTRATION_VERSION', '0.2' );

$sennza_buddypress_registration_honeypot = new Sennza_BuddyPress_Registration_HoneyPot();

/**
 * Where all the awesome happens of course :)
 * @since 0.2
 */
class Sennza_BuddyPress_Registration_HoneyPot {

	/**
	 * Setup all the magic for our honeypot
	 * @since 0.2
	 */
	public function __construct(){
		add_action( 'wp_enqueue_scripts', array( $this, 'sennza_buddypress_registration_honeypot_css' ) );
		add_action( 'bp_after_account_details_fields', array( $this , 'sennza_buddypress_registration_honeypot') );
		add_action( 'bp_signup_validate', array( $this , 'sennza_buddypress_registration_honeypot_validation' ) );
	}

	/**
	 * This function adds the honeypot field after the account details in BuddyPress
	 * @since 0.2
	 */
	public function sennza_buddypress_registration_honeypot() {
		?>
	<?php //Lets wrap this and hide it with CSS ?>
	<div id="basic-details-honeypot-section" class="honeypot_container register-section">
		<?php //Lets give it a dummy label that spam bots will think is real ?>
		<label for="signup_honeypot"><?php _e( 'Phone' ); ?></label>
		<?php //I can't see us needing to output errors but I'll add an action here in case accessibility issues come up! ?>
		<?php do_action( 'sennza_buddypress_registration_honeypot_errors' ); ?>
		<input type="text" name="signup_honeypot" id="signup_honeypot" value="" />
		<?php $sennza_honeypot_warning = apply_filters( 'sennza_honeypot_warning', 'This field is for validation purposes and should be left blank.' );?>
		<p><?php esc_html_e( $sennza_honeypot_warning ); ?></p>
	</div>
	<?php
	}

	/*
	 * We need to add a signup error to the $bp global so that the registration process fails
	 * @since 0.2
	 * @global array $bp
	 */
	public function sennza_buddypress_registration_honeypot_validation() {
		global $bp;
		if ( ! empty( $_POST['signup_honeypot'] ) )
			$bp->signup->errors['signup_honeypot'] = apply_filters( 'sennza_honeypot_error', __( 'Looks like you are a spammer' ) );
	}

	/*
	 * We need to enqueue the CSS for this plugin.
	 * @since 0.2
	 */
	public function sennza_buddypress_registration_honeypot_css() {
		wp_register_style(
		'honeypot-css',
		plugins_url( '/css/bp-honeypot.css',__FILE__ ),
		false,
		BUDDYPRESS_HONEYPOT_REGISTRATION_VERSION
		);
		wp_enqueue_style( 'honeypot-css' );
	}
}