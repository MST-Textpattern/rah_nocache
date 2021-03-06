<?php

/**
 * Rah_nocache plugin for Textpattern CMS
 *
 * @author  Jukka Svahn
 * @date    2009-
 * @license GNU GPLv2
 * @link    http://rahforum.biz/plugins/rah_nocache
 *
 * Copyright (C) 2013 Jukka Svahn http://rahforum.biz
 * Licensed under GNU Genral Public License version 2
 * http://www.gnu.org/licenses/gpl-2.0.html
 */

class rah_nocache
{
	/**
	 * Constructor.
	 */

	public function __construct()
	{
		$this->send_headers();
	}

	/**
	 * Send no-cache HTTP headers.
	 */

	public function send_headers()
	{
		header('Cache-Control: no-store, no-cache, must-revalidate, pre-check=0, post-check=0, max-age=0');
		header('Expires: Sat, 24 Jul 2003 05:00:00 GMT');
		header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
		header('Pragma: no-cache');
	}
}

new rah_nocache();