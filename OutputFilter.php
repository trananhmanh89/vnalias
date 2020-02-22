<?php
/**
 * Joomla! Content Management System
 *
 * @copyright  Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Filter;

use \Joomla\CMS\Filter\_OutputFilter;

defined('JPATH_PLATFORM') or die;

/**
 * OutputFilter
 *
 * @since  1.7.0
 */
class OutputFilter extends _OutputFilter
{
	/**
	 * This method processes a string and replaces all accented UTF-8 characters by unaccented
	 * ASCII-7 "equivalents", whitespaces are replaced by hyphens and the string is lowercase.
	 *
	 * @param   string  $string    String to process
	 * @param   string  $language  Language to transilterate to
	 *
	 * @return  string  Processed string
	 *
	 * @since   1.7.0
	 */
	public static function stringURLSafe($string, $language = '')
	{
		$str = str_replace('-', ' ', $string);

		// start override core
		require_once __DIR__ .'/VietAliasHelper.php';
		
		$str = \VietAliasHelper::vt_safe_vietnamese($str);

		return parent::stringURLSafe($str, $language);
	}
}
