<?php

// Twitter Members Extension for Buddypress by Charl Kruger

// $show_googlepluscj_in_header - Display the twitter widget using our xprofile data and return it in the members header

function show_googlepluscj_in_header() {

$googlepluscj_username= xprofile_get_field_data(get_option('googlepluscj_member_label')); //fetch the location field for the displayed user

	if ( $googlepluscj_username != "" ) { // check to see the twitter field has data
?>

<a rel="author" href="https://profiles.google.com/<?php echo $googlepluscj_username; ?>" target="_blank">
  <img src="http://www.google.com/images/icons/ui/<?php plus_button_size_image_url_members() ?>" width="<?php get_option('googlepluscj-button-size') ?>" height="<?php get_option('googlepluscj-button-size') ?>" style="display:block">
</a>

<?php
	}

}
add_filter( 'bp_before_member_header_meta', 'show_googlepluscj_in_header' );

function plus_button_size_image_url_members() {
	
	if (get_option('googlepluscj-button-size')==16) {
		?>gprofile_button-16.png<?
	} elseif (get_option('googlepluscj-button-size')==32) {
		?>gprofile_button-32.png<?
	} elseif (get_option('googlepluscj-button-size')==44) {
		?>gprofile_button-44.png<?
	} elseif (get_option('googlepluscj-button-size')==64) {
		?>gprofile_button-64.png<?
	}
	
}
?>