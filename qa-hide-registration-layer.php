<?php

	class qa_html_theme_layer extends qa_html_theme_base
	{
		function nav_list($navigation, $class, $level = NULL) // remove register links
		{
			error_log(print_r($navigation, true));
			error_log(print_r($class, true));
			if ($class == 'nav-user') {
				unset($navigation['register']);
			}
			
			qa_html_theme_base::nav_list($navigation, $class, $level);
		}
	}
