<?php

// Twitter Group Extension for Buddypress by Charl Kruger

// Add the form

add_filter( 'groups_custom_group_fields_editable', 'group_header_googlepluscj_markup' );
add_action( 'groups_group_details_edited', 'group_header_googlepluscj_save' );
add_action( 'groups_created_group',  'group_header_googlepluscj_save' );

// Retrieve the meta specific to the group

function plus_field_one_pluscj() {
	global $bp, $wpdb;
	$field_onecj = groups_get_groupmeta( $bp->groups->current_group->id, 'group_plus_header_field-one-pluscj' );
	return $field_onecj;
}

// Create the form to save the meta for the group

function group_header_googlepluscj_markup() {
global $bp, $wpdb;

 ?>
	<label for="group-field-one-pluscj"><?php echo get_option('googlepluscj_group_label'); ?></label>
	<input type="text" name="group-field-one-pluscj" id="group-field-one-pluscj" value="<?php echo plus_field_one_pluscj(); ?>" />
    <?php

}

// show the group googlepluscj score in group header - after the description
function show_plus_field_in_headercj( $plus_field_meta ) {
	if ( plus_field_one_pluscj() != '' && get_option('googlepluscj-groups-placement') != '') { // check to see the googlepluscj field has data

		$plus_field_meta .= '<a rel="author" href="https://profiles.google.com/'. plus_field_one_pluscj() .'" target="_blank">
  <img src="http://www.google.com/images/icons/ui/'. plus_button_size_image_url_groups_after() .'" width="'. get_option('googlepluscj-button-size') .'" height="'. get_option('googlepluscj-button-size') .'" style="display:block">
</a>';

		}
	
	return $plus_field_meta;
}
add_filter( 'bp_get_group_description', 'show_plus_field_in_headercj' );

// show the group googlepluscj score in group header - after the description
function show_plus_field_before_metacj() {
	if ( plus_field_one_pluscj() != '' && get_option('googlepluscj-groups-placement') == '') { // check to see the googlepluscj field has data

?>

<a rel="author" href="https://profiles.google.com/<?php plus_field_one_pluscj(); ?>" target="_blank">
  <img src="http://www.google.com/images/icons/ui/<?php plus_button_size_image_url_groups() ?>" width="<?php get_option('googlepluscj-button-size') ?>" height="<?php get_option('googlepluscj-button-size') ?>" style="display:block">
</a>

<?php

		}
}
add_filter( 'bp_before_group_header_meta', 'show_plus_field_before_metacj' );

function plus_button_size_image_url_groups() {
	
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

function plus_button_size_image_url_groups_after() {
	
	if (get_option('googlepluscj-button-size')==16) {
		return 'gprofile_button-16.png';
	} elseif (get_option('googlepluscj-button-size')==32) {
		return 'gprofile_button-32.png';
	} elseif (get_option('googlepluscj-button-size')==44) {
		return 'gprofile_button-44.png';
	} elseif (get_option('googlepluscj-button-size')==64) {
		return 'gprofile_button-64.png';
	}
	
}

// save the group header meta
function group_header_googlepluscj_save( $group_id ) {
	global $bp, $wpdb;

	$plain_fields = array(
		'field-one-pluscj'
	);
	foreach( $plain_fields as $field ) {
		$key = 'group-' . $field;
		if ( isset( $_POST[$key] ) ) {
			$value = $_POST[$key];
			groups_update_groupmeta( $group_id, 'group_plus_header_' . $field, $value );
		}
	}
}



?>