<?php

/*
	Ali Tavakoli

	File: qa-plugin/qa-hide-registration/qa-hide-registration-admin-form.php
	Version: 1.0.0
	Date: 2014-05-09
	Description: Module class for showing this plugin's admin form
*/



class qa_hide_registration_admin_form
{
	function option_default($option)
	{
		if ($option == 'plugin_hideregistration_enabled')
			return true;
	}

	function admin_form(&$qa_content)
	{
		$saved = false;

		if (qa_clicked('plugin_hideregistration_save_button'))
		{
			qa_opt('plugin_hideregistration_enabled', (int)qa_post_text('plugin_hideregistration_enabled_field'));
			$saved = true;
		}


		return array(
			'ok' => $saved ? 'Settings saved' : null,

			'fields' => array(
				array(
					'label' => 'Hide the registration link',
					'type' => 'checkbox',
					'value' => qa_opt('plugin_hideregistration_enabled'),
					'tags' => 'NAME="plugin_hideregistration_enabled_field"',
				),
			),

			'buttons' => array(
				array(
					'label' => 'Save Changes',
					'tags' => 'NAME="plugin_hideregistration_save_button"',
				),
			),
		);
	}
};

