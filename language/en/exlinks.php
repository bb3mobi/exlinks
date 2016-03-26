<?php
/**
*
* External Links [English]
*
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
	'HIDE_LINKS_GUESTS'		=> 'To view links you must be logged in.',
	'HIDE_LINKS_MIN_POSTS'	=> 'To view links you must first <strong>%s</strong> posts.',
	'EXTERNAL_REDIRECT'		=> 'Transition to an external link',
	'EXTERNAL_LINK_EXACT'	=> 'The exact link is',
	'EXTERNAL_MESSAGE_TEXT'	=> 'You have chosen to visit an external link at: <span class="error">%s</span><br /><br />Are you sure you wish to proceed?<br />If the link is suspicious, please let the Admin or Moderator team know.',
	'URL_LINK'				=> '%sGo to the link%s',
	'CLOSE_PAGE'			=> '%sClose this page%s',
	'PAGE_BB3MOBI'			=> '<a href="http://bb3.mobi/forum/viewtopic.php?t=26" title="URL Edition">External Links</a> &copy; Anvar (stepnyak.kz)',
));
