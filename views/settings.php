<?php
function wpatt_plugin_options()	{
	if (!current_user_can('manage_options')) {
		wp_die(__('You do not have sufficient permissions to access this page.'));
	}

	if (isset($_POST['Submit'])) {
		$wpatt_option_localization_get = $_POST["wpatt_option_localization_n"];

		update_option('wpatt_option_localization', $wpatt_option_localization_get);
		
		if (isset($_POST['wpatt_option_showdate_n'])) {
			update_option('wpatt_option_showdate', '1');
		} else {
			update_option('wpatt_option_showdate', '0');
		}
	   
		if (isset($_POST['wpatt_option_includeimages_n'])) {
			update_option('wpatt_option_includeimages', '1');
		} else {
			update_option('wpatt_option_includeimages', '0');
		}
		
		if (isset($_POST['wpatt_option_targetblank_n'])) {
			update_option('wpatt_option_targetblank', '1');
		} else {
			update_option('wpatt_option_targetblank', '0');
		}
	}

	$context = Timber::get_context(); 
	$context["version"] = get_option('wpa_version_number');
	$context["wpatt_option_localization_n"] = get_option('wpatt_option_localization');

	$context["wpatt_option_showdate_n"] = get_option('wpatt_option_showdate') == 1 ? 'checked' : '';
	$context["wpatt_option_includeimages_n"] = get_option('wpatt_option_includeimages') == 1 ? 'checked' : '';
	$context["wpatt_option_targetblank_n"] = get_option('wpatt_option_targetblank') == 1 ? 'checked' : '';

	Timber::render('templates/settings.twig', $context );
}
?>