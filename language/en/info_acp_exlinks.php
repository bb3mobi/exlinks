<?php
/**
*
* External Links [English]
* @Thanks Volksdevil )))
* @package info_acp_exlinks.php
* @copyright (c) 2014 Anvar http://bb3.mobi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_MODED_LINKS_TITLE'				=> 'External Links',
	'ACP_MODED_LINKS'					=> 'Manager links',
	'ACP_MODED_LINKS_EXPLAIN'			=> 'Ken F. Innes IV <a href="http://www.absoluteanime.com/admin/mods.htm#links">Prime Links phpBB3.0</a> | Anvar S. <a href="http://bb3.mobi">External Links for phpBB3.1</a>',
	'ACP_MODED_LINKS_DESCRIPTION'		=> 'Here you can customize the display of all the external links posted in the forum.',
	'ACP_MODED_LINKS_SETTINGS'			=> 'Basic Settings link',
	'ACP_TARGET_ATTRIBUTE'				=> 'Use the «target» attribute?',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'		=> 'If switched off, will be used to OnClick JavaScript.',
	'ACP_HIDE_LINKS_GUESTS'				=> 'Hide external links from guests?',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'		=> 'Enter the text, and names of the links will be replaced by them.',
	'ACP_HIDE_LINKS_MIN_POSTS'			=> 'Hide from registered',
	'ACP_HIDE_LINKS_MIN_POSTS_EXPLAIN'	=> 'Minimum posts to view links registered users.',
	'ACP_EXTERNAL_LINK_PREFIX'			=> 'Prefix before the link',
	'ACP_EXTERNAL_LINK_PREFIX_EXPLAIN'	=> 'Leave blank for standard confirmation page.',
	'ACP_EXTERNAL_LINK_PREFIX_LEVEL'	=> 'Prefix/Confirmation Page',
	'LINK_PREFIX_LEVEL'	=> array(
		0	=> 'Do not use the prefix',
		1	=> 'Only for anonymous',
		2	=> 'Registered',
		3	=> 'Apply to all',
	),
	'ACP_EXTERNAL_LINK_REDIRECT'		=> 'Redirect time',
	'ACP_INTERNAL_LINK_DOMAINS'			=> 'White list',
	'ACP_INTERNAL_LINK_DOMAINS_EXPLAIN'	=> 'List of domains that are not to be subject to the above. Enter each on a new line.',
	'ACP_FORBIDDEN_DOMAINS'				=> 'Blocked domains',
	'ACP_FORBIDDEN_DOMAINS_EXPLAIN'		=> 'List of domains, which have links will not be displayed. Enter each on a new line.',
	'ACP_FORBIDDEN_DOMAINS_TEXT'		=> 'Text instead of blocked url',
	'ACP_FORBIDDEN_NEW_URL'				=> 'URL instead of any remote links',
	'ACP_MODED_LINKS_ATTRIBUTES'		=> 'Attributes links',
	'ACP_INTERNAL_LINK_REL'				=> 'The rel attribute of internal links',
	'ACP_EXTERNAL_LINK_REL'				=> 'The rel attribute of external links',
	'ACP_INTERNAL_LINK_TARGET'			=> 'Type target of internal links',
	'ACP_EXTERNAL_LINK_TARGET'			=> 'Type target external links',
	'ACP_INTERNAL_LINK_CLASS'			=> 'class of internal links',
	'ACP_EXTERNAL_LINK_CLASS'			=> 'class of external links',
	'ACP_EXTERNAL_LINK_NOINDEX'			=> 'Close to noindex external links?',
	'ACP_MODED_LINKS_TYPES'				=> 'Link file types',
	'ACP_PDF_LINK_TYPES'				=> 'PDF Link types',
	'ACP_IMG_LINK_TYPES'				=> 'IMG Link types',
	'ACP_ZIP_LINK_TYPES'				=> 'ZIP Link types',
	'ACP_SKIP_LINK_TYPES'				=> 'Do not process links to these file types',
	'ACP_SKIP_PREFIX_TYPES'				=> 'Do not add an external link prefix for these file types',
	'ACP_LINK_TYPES_EXPLAIN'			=> 'Link file types (separate file extensions with a vertical bar "|").',
	'ACP_EXTERNAL_LINK_TYPES'			=> 'External Link types',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Will be treated as internal references.<br />Example: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'		=> 'Internal Link types',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Will be treated as internal references.<br />Example: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
));
