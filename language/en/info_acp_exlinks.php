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
	'ACP_MODED_LINKS_TITLE'			=> 'External Links',

	'ACP_MODED_LINKS'				=> 'Manager links',
	'ACP_MODED_LINKS_EXPLAIN'		=> 'Ken F. Innes IV <a href="http://www.absoluteanime.com/admin/mods.htm#links">Prime Links phpBB3.0</a><br />Converting to extension phpBB3.1: Anvar <a href="http://bb3.mobi">BB3.Mobi</a>',
	'ACP_MODED_LINKS_DESCRIPTION'	=> 'Here you can customize the display of all the external links posted in the forum.',

	'ACP_MODED_LINKS_SETTINGS'		=> 'Basic Settings link',
	'ACP_TARGET_ATTRIBUTE'			=> 'Use the «target» attribute?',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'	=> 'If switched off, will be used to OnClick JavaScript.',
	'ACP_HIDE_LINKS_GUESTS'			=> 'Hide external links from guests?',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'	=> 'Enter the text, and names of the links will be replaced by them.',
	'ACP_EXTERNAL_LINK_PREFIX'		=> 'Prefix before the link',
	'ACP_EXTERNAL_LINK_REDIRECT'	=> 'Redirect time',
	'ACP_EXTERNAL_LINK_EXACT'		=> 'The exact link is:',

	'ACP_INTERNAL_LINK_DOMAINS'		=> 'List of domains that are not covered by the above maintenance used ";" (semicolon to separate)',
	'ACP_FORBIDDEN_DOMAINS'			=> 'List of domains that are not links are displayed, use the ";" (semicolon to separate)',
	'ACP_FORBIDDEN_DOMAINS_TEXT'	=> 'Text instead of blocked url',
	'ACP_FORBIDDEN_NEW_URL'			=> 'URL instead of any remote links',

	'ACP_MODED_LINKS_ATTRIBUTES'	=> 'Attributes links',
	'ACP_INTERNAL_LINK_REL'			=> 'The rel attribute of internal links',
	'ACP_EXTERNAL_LINK_REL'			=> 'The rel attribute of external links',
	'ACP_INTERNAL_LINK_TARGET'		=> 'Type target of internal links',
	'ACP_EXTERNAL_LINK_TARGET'		=> 'Type target external links',
	'ACP_INTERNAL_LINK_CLASS'		=> 'class of internal links',
	'ACP_EXTERNAL_LINK_CLASS'		=> 'class of external links',
	'ACP_EXTERNAL_LINK_NOINDEX'		=> 'Close to noindex external links?',
/* New lang */
	'ACP_MODED_LINKS_TYPES'			=> 'Link file types',
	'ACP_PDF_LINK_TYPES'			=> 'PDF Link types',
	'ACP_IMG_LINK_TYPES'			=> 'IMG Link types',
	'ACP_ZIP_LINK_TYPES'			=> 'ZIP Link types',
	'ACP_SKIP_LINK_TYPES'			=> 'Don\'t process links to these file types',
	'ACP_SKIP_PREFIX_TYPES'			=> 'Don\'t add an external link prefix for these file types',
	'ACP_LINK_TYPES_EXPLAIN'		=> 'Link file types (separate file extensions with a vertical bar "|").',
	'ACP_EXTERNAL_LINK_TYPES'		=> 'External Link types',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Will be treated as internal references.<br />Example: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'		=> 'Internal Link types',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Will be treated as internal references.<br />Example: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',

	'MESSAGE_TEXT'	=> '<strong>You have chosen to visit an external link at: <span class="error">%s</span></strong><p>Are you sure you wish to proceed?<br />If the link is suspicious, please let the Admin or Moderator team know.</p>',
	'URL_LINK'		=> '%sGo to the link%s',
	'CLOSE_PAGE'	=> '%sClose this page%s',
));
