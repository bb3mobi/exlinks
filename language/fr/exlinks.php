<?php
/**
*
* External Links [French]
* French translation by Galixte (http://www.galixte.com)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'HIDE_LINKS_GUESTS'		=> 'Vous devez être enregistré et connecté pour pouvoir afficher les liens.',
	'HIDE_LINKS_MIN_POSTS'	=> 'Vous devez avoir posté <strong>%s</strong> messages pour pouvoir afficher les liens.',
	'EXTERNAL_REDIRECT'		=> 'Vous allez être redirigé(e) vers un lien externe',
	'EXTERNAL_LINK_EXACT'	=> 'Le lien exact est',
	'EXTERNAL_MESSAGE_TEXT'	=> 'Vous avez choisi de vous rendre sur un lien externe au forum : <span class="error">%s</span><br /><br />Êtes-vous sûr(e) de vouloir continuer ?<br />Si le lien est suspecté, veuillez le signaler à l’un des membres de l’équipe forum.',
	'URL_LINK'				=> ' Se rendre sur le lien',
	'CLOSE_PAGE'			=> 'seconde(s) avant la redirection - Fermer cette page',
	'PAGE_BB3MOBI'			=> '<a href="http://bb3.mobi/forum/viewtopic.php?t=26" title="URL Edition">External Links</a> &copy; Anvar (apwa.ru)',
));
