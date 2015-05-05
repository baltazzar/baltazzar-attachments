<div class="wrap">
    <h2>BaltazZar Attachments <?php  get_option('wpa_version_number'); ?> <a href="http://wordpress.org/support/view/plugin-reviews/wp-attachments" target="_blank" class="add-new-h2"><em>Rate this plugin!</em></a><a href="http://wordpress.org/plugins/wp-attachments/changelog/" target="_blank" class="add-new-h2"><em>Changelog</em></a></h2>
	
	<h3>
	<?php _e('Options','wp-attachments'); ?>
	</h3>
    
    <div id="welcome-panel" class="welcome-panel">
    
    <form method="post" name="options" target="_self">
    
    <?php settings_fields('wpatt_option_group'); ?>
    
	<table class="form-table">
        <tr valign="top">
        <th scope="row"><?php _e('List Title','wp-attachments'); ?></th>
        <td><input type="text" name="wpatt_option_localization_n" value="<?php    echo get_option('wpatt_option_localization');?>"/>
        &nbsp;<?php _e('Insert here the title you want for the attachments list','wp-attachments'); ?></td></tr>
    
        <tr><th scope="row"><?php _e('Include images','wp-attachments'); ?></th>
        <td><input type="checkbox" name="wpatt_option_includeimages_n" 
        <?php 
            $wpatt_option_includeimages_get = get_option('wpatt_option_includeimages');
            if ($wpatt_option_includeimages_get == '1') {
        		echo 'checked';
        	}
        ?>/>&nbsp;<?php _e('Check this option if you want to include images (.jpg, .jpeg, .gif, .png) in the attachments list','wp-attachments'); ?>
        </td>
    </tr>

    <tr><th scope="row"><?php _e('Show date','wp-attachments') ?></th>
        <td><input type="checkbox" name="wpatt_option_showdate_n" 
        <?php
            $wpatt_option_showdate_get = get_option('wpatt_option_showdate');
            if ($wpatt_option_showdate_get == '1') {
        		echo 'checked';
        	}
        ?>/>&nbsp;<?php _e('Check this if you want to show the date of file upload','wp-attachments'); ?>
        </td>
    </tr>
	
	<tr><th scope="row">' . __('Open in new tab','wp-attachments') . '</th>
        <td><input type="checkbox" name="wpatt_option_targetblank_n" 
    $wpatt_option_targetblank_get = get_option('wpatt_option_targetblank');
    if ($wpatt_option_targetblank_get == '1') {
		checked=\'checked\'
	}
    />&nbsp;' . __('Check this option if you want to add target="_blank" to every file listed in order to open it in a new tab','wp-attachments') . '</td>
    </tr></table>
    
    
    
    </table><p class="submit"><input type="submit" class="button-primary" name="Submit" value="' . __('Save') . '" /></p>
    
    </form></div>
</div>