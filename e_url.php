<?php
/*
 * Wrapper - an e107 plugin by Tijn Kuyper
 *
 * Copyright (C) 2016-2017 Tijn Kuyper (http://www.tijnkuyper.nl)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if(!defined('e107_INIT'))
{
	exit;
}

class wrapper_url
{

	function config()
	{
		$config = array();

		// Wrapper with title or ID
		$config['wrapper_id'] = array(
			// Matched against url, and if true, redirected to 'redirect' below.
			'regex'    => '^wrapper/(.*)$',
			// {wrapper_id} is substituted with database value when parsed by e107::url();
			'sef'      => 'wrapper/{wrapper_id}/{wrapper_name}',
			// File-path of what to load when the regex returns true.
			'redirect' => '{e_PLUGIN}wrapper/wrapper.php?$1'
		);

		return $config;
	}
}