<?php

/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/

	
	File: qa-plugin/qa-hide-registration/qa-plugin.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Hides the registration link


	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/*
	Plugin Name: Hide Registration
	Plugin URI: http://github.com/atavakoli/qa-hide-registration
	Plugin Description: Hides the registration link
	Plugin Version: 1.0.0
	Plugin Date: 2014-05-09
	Plugin Author: Ali Tavakoli
	Plugin Author URI: http://github.com/atavakoli/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.6
	Plugin Update Check URI: https://raw.githubusercontent.com/atavakoli/qa-hide-registration/master/qa-plugin.php
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}


	qa_register_plugin_layer('qa-hide-registration-layer.php', 'Hide Registration');
	qa_register_plugin_module('module', 'qa-hide-registration-admin-form.php', 'qa_hide_registration_admin_form', 'Hide Registration');

