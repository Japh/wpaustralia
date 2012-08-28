<?php

/* include the buddypress google plus admin extension */
require ( dirname( __FILE__ ) . '/admin.php' );

/* Only include the working extensions dependant on admin options ( 'members' and 'groups' ) */

/* only include the member extension if enabled */

	if ( !$googlepluscj_members_extension_check ) {
		if ( !$googlepluscj_members_extension_check = get_option('googlepluscj-members') )
			$googlepluscj_members_extension_check = ''; // the default
	}
	if ( $googlepluscj_members_extension_check == '1' ) {

require( dirname( __FILE__ ) . '/includes/google-plus-members-extension.php' );
	}


/* only include the group extension if enabled */

	if ( !$googlepluscj_group_extension_check ) {
		if ( !$googlepluscj_group_extension_check = get_option('googlepluscj-groups') )
			$googlepluscj_group_extension_check = ''; // the default
	}
	if ( $googlepluscj_group_extension_check == '1' ) {



require( dirname( __FILE__ ) . '/includes/google-plus-groups-extension.php' );
	}

/* Include the css to fix the button alignment. */

function bp_googlepluscj_insert_head() {
?>
<link href="<?php bloginfo('wpurl'); ?>/wp-content/plugins/buddypress-google-plus/includes/style.css" media="screen" rel="stylesheet" type="text/css"/>
<?php	
}
add_action('wp_head', 'bp_googlepluscj_insert_head');

?>