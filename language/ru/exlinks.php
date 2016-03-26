<?php
/**
*
* External Links [Russian]
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
	'HIDE_LINKS_GUESTS'		=> 'Для просмотра ссылок Вы должны быть авторизованы на форуме.',
	'HIDE_LINKS_MIN_POSTS'	=> 'Для просмотра ссылок Вам необходимо разместить <strong>%s</strong> сообщений на форуме.',
	'EXTERNAL_REDIRECT'		=> 'Переход по внешней ссылке',
	'EXTERNAL_LINK_EXACT'	=> 'Точная ссылка',
	'EXTERNAL_MESSAGE_TEXT'	=> 'Вы переходите по внешней ссылке: <span class="error">%s</span><br /><br />Убедитесь, что данная ссылка полностью является доверенной и ограждена от вредоносных влияний.<br />Если же ссылка показалась вам подозрительной, убедительная просьба сообщить об этом администрации.',
	'URL_LINK'				=> 'Перейти по указанной ссылке',
	'CLOSE_PAGE'			=> 'Закрыть и вернуться на страницу',
	'PAGE_BB3MOBI'			=> '<a href="http://bb3.mobi/forum/viewtopic.php?t=26" title="URL Edition">External Links</a> &copy; Anvar (apwa.ru)',
));
