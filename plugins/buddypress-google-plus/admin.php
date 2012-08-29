<?php



add_action('admin_menu', 'bp_googlepluscj_plugin_menu');

add_action( 'network_admin_menu', 'bp_googlepluscj_plugin_menu' );



function bp_googlepluscj_plugin_menu() {

	add_submenu_page( 'bp-general-settings', 'Bp Google Plus', 'BuddyPress Google Plus', 'manage_options', 'bp-googlepluscj', 'bpgooglepluscj_plugin_options');

	
	//call register settings function

	add_action( 'admin_init', 'bpgooglepluscj_register_settings' );

}



function bpgooglepluscj_register_settings() {

	//register our settings

	register_setting( 'bpgooglepluscj_plugin_options', 'googlepluscj-members' );

	register_setting( 'bpgooglepluscj_plugin_options', 'googlepluscj-groups' );
	
	register_setting( 'bpgooglepluscj_plugin_options', 'googlepluscj-groups-placement' );
	
	register_setting( 'bpgooglepluscj_plugin_options', 'googlepluscj-button-size' );


	//name to cerrelate to the members profile field label
	register_setting( 'bpgooglepluscj_plugin_options', 'googlepluscj_member_label' );


	//name to cerrelate to the gropus field label
	register_setting( 'bpgooglepluscj_plugin_options', 'googlepluscj_group_label' );
	}
	//Set Defaults
	$default_plus_button_size = '32';
			if(get_option('googlepluscj-button-size') == ''){ update_option('googlepluscj-button-size', $default_plus_button_size); }



function bpgooglepluscj_plugin_options() {

	if (!current_user_can('manage_options'))  {

		wp_die( __('You do not have sufficient permissions to access this page.') );

				
	}
	

?>



			<?php if ( !empty( $_GET['settings-updated'] ) ) : ?>
				<div id="message" class="updated">
					<p><strong><?php _e('Buddypress Google Plus Settings have been saved.' ); ?></strong></p>
				</div>
			<?php endif; ?>






<div class="wrap">

<h2>
<?php _e('BuddyPress Google Plus Settings', 'bpgooglepluscj') ?>
</h2>


<h3><?php _e('Member and Group Components.', 'bpgooglepluscj') ?></h3>


<p><?php _e('The plugin uses Buddypress XProfile Fields and requires you to name the "Mirror Profile Field Title" below the same as your custom Profile Field Title - Please read the <a href="http://wordpress.org/extend/plugins/buddypress-google-plus/installation/" target="_blank" title="Opens in a new tab">plugin installation instructions</a> if you are not sure what to do.', 'bpgooglepluscj') ?></p>

<form method="post" action="<?php echo admin_url('options.php');?>">

<?php wp_nonce_field('update-options'); ?>


<table class="form-table">



<hr></hr>


































<?php // members admin options ?>



<table class="form-table">


	<tr valign="top">

		<th scope="row"><b>Members</b></th>

			<td>
				<input type="checkbox" name="googlepluscj-members" value="1" <?php if (get_option('googlepluscj-members')==1) echo 'checked="checked"'; ?>/>
				Let your members display their google plus profile button on their profile page.
			</td>

	</tr>

	<tr valign="top">
		<th scope="row"><colored-text style="color: red;">Mirror</colored-text> Profile Field Title</th>
            		<td>
				<input <?php if ( get_option('googlepluscj-members') == '' ) {?>disabled="disabled"<?php }?> name="googlepluscj_member_label" value="<?php echo get_option('googlepluscj_member_label') ?>"/><?php if ( get_option('googlepluscj-members') == '' ) {?><br /><i><colored-text style="color: orange;">Disabled</colored-text> - Tick the check-box above and save to enable this feature</i><?php }?>
                <p><colored-text style="color: green;">Quick links:</colored-text> Visit <a href="<?php echo home_url(); ?>/wp-admin/admin.php?page=bp-profile-setup&group_id=1&mode=add_field" target="_blank" title="opens in a new tab">Add Field</a> to set up a new XProfile field or <a href="<?php echo home_url(); ?>/wp-admin/admin.php?page=bp-profile-setup" target="_blank" title="opens in a new tab">Extended Profile Fields</a> to edit a existing field</p>
			</td>
		</tr>
</table>

<?php // groups admin options ?>

<table class="form-table">


	<tr valign="top">

		<th scope="row"><b>Groups</b></th>

			<td>
				<input type="checkbox" name="googlepluscj-groups" value="1" <?php if (get_option('googlepluscj-groups')==1) echo 'checked="checked"'; ?>/>
				Let your groups display their google plus profile button on the group's home page.
			</td>

	</tr>
    
	<tr valign="top">
		<th scope="row">Group Field Title</th>
            		<td>
				<input <?php if ( get_option('googlepluscj-groups') == '' ) {?>disabled="disabled"<?php }?> name="googlepluscj_group_label" value="<?php echo get_option('googlepluscj_group_label') ?>"/><?php if ( get_option('googlepluscj-groups') == '' ) {?><br /><i><colored-text style="color: orange;">Disabled</colored-text> - Tick the check-box above and save to enable this feature</i><?php }?>  
			</td>
		</tr>
</table>





<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="googlepluscj-members,googlepluscj-groups,googlepluscj_member_label,googlepluscj_group_label" />



<p class="submit">

	<input type="submit" class="button-primary" value="<?php _e('Save Component Changes') ?>" />

</p>


</form>











<h3><?php _e('Display Settings.', 'bptwittercj') ?></h3>


<p><?php _e('Alter the size of the Google Plus Button - note that the sizw will be the same for members and for groups. Click the save button to preview the changes.', 'bptwittercj') ?></p>

<form method="post" action="<?php echo admin_url('options.php');?>">

<?php wp_nonce_field('update-options'); ?>


<table class="form-table">
<hr></hr>




	<tr valign="top">

		<th scope="row"><b>Groups Button Position</b></th>

			<td>
				 <label>
    				<input <?php if ( get_option('googlepluscj-groups') == '' ) {?>disabled="disabled"<?php }?> type="radio" name="googlepluscj-groups-placement" value="" <?php if (get_option('googlepluscj-groups-placement')=='') echo 'checked="checked"'; ?> />
    			Before the group description</label>
  			<br />
  				<label>
   					<input <?php if ( get_option('googlepluscj-groups') == '' ) {?>disabled="disabled"<?php }?> type="radio" name="googlepluscj-groups-placement" value="1" <?php if (get_option('googlepluscj-groups-placement')==1) echo 'checked="checked"'; ?> />
    			After the group description</label>
                <?php if ( get_option('googlepluscj-groups') == '' ) {?><br /><i><colored-text style="color: orange;">Disabled</colored-text> - This feature requires the groups component to be enable above.</i><?php }?>
			</td>

	</tr>

	<tr valign="top">

		<th scope="row"><b>Button Size</b></th>

			<td>
				 <label>
    				<input type="radio" name="googlepluscj-button-size" value="16" <?php if (get_option('googlepluscj-button-size')==16) echo 'checked="checked"'; ?> />
    			Small (16px)</label>
  			<br />
  				<label>
   					<input type="radio" name="googlepluscj-button-size" value="32" <?php if (get_option('googlepluscj-button-size')==32) echo 'checked="checked"'; ?> />
    			Standard (32px)</label>
                  			<br />
  				<label>
   					<input type="radio" name="googlepluscj-button-size" value="44" <?php if (get_option('googlepluscj-button-size')==44) echo 'checked="checked"'; ?> />
    			Medium (44px)</label>
                  			<br />
  				<label>
   					<input type="radio" name="googlepluscj-button-size" value="64" <?php if (get_option('googlepluscj-button-size')==64) echo 'checked="checked"'; ?> />
    			Tall (64px)</label>
			</td>

	</tr>






</table>

<?php

function plus_button_size_image_url() {
	
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

<div id="bp-plus-button-preview" style="padding:0 10px 10px;margin-top:20px;border: 1px solid #CCC;">

<p><colored-text style="color: green;">Button Preview</colored-text></p>


<a rel="author" href="https://profiles.google.com/117452600842368746804" target="_blank">
  <img src="http://www.google.com/images/icons/ui/<?php plus_button_size_image_url() ?>" width="<?php get_option('googlepluscj-button-size') ?>" height="<?php get_option('googlepluscj-button-size') ?>" style="display:block">
</a>


</div>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="googlepluscj-groups-placement,googlepluscj-button-size" />



<p class="submit">

	<input type="submit" class="button-primary" value="<?php _e('Save Display Settings') ?>" />

</p>


</form>




















<p>If you enjoy the plugin and would like to keep up to speed on future releases and updates, follow me on twitter or check out my blog - <a href="http://charlkruger.com" target="_blank">CharlKruger.com</a></p>
<p>Feel free to retweet the plugin to let your followers know by using the button below and don't forget to give me a +K on <a href="http://klout.com/#/itsCharlkruger" target="_blank" title="Charl Kruger's Klout - opens in a new tab">Klout.com</a></p>
<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://buddypress.org/community/groups/buddypress-google-plus/home/" data-text="Google Plus for #Buddypress members and groups" data-via="itsCharlKruger">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<a href="https://twitter.com/itsCharlKruger" class="twitter-follow-button" data-show-count="false">Follow @itsCharlKruger</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

<iframe src="http://widgets.klout.com/badge/itsCharlkruger?size=s" style="margin-top:10px;border:0" scrolling="no" allowTransparency="true" frameBorder="0" width="120px" height="59px"></iframe>


<?php

}


?>