<?php
/**
*
* External Links [French]
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
	'ACP_MODED_LINKS_TITLE'			=> 'Liens externes',

	'ACP_MODED_LINKS'				=> 'Gestion des liens',
	'ACP_MODED_LINKS_EXPLAIN'		=> 'Anvar (c) <a href="http://bb3.mobi">BB3.Mobi</a>',
	'ACP_MODED_LINKS_DESCRIPTION'	=> 'Cette page permet de personnaliser l’affichage et la gestion des liens externes postés sur votre forum.',

	'ACP_MODED_LINKS_SETTINGS'		=> 'Paramètres des liens',
	'ACP_TARGET_ATTRIBUTE'			=> 'Utiliser l’attribut «&nbsp;target&nbsp;»&nbsp;?',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'	=> 'Si désactivé, les liens seront traité par le JavaScript «&nbsp;OnClick&nbsp;».',
	'ACP_HIDE_LINKS_GUESTS'			=> 'Masquer les liens externes aux visiteurs&nbsp;?',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'	=> 'Saisir un texte remplacera les liens par ce texte pour les visiteurs.',
	'ACP_EXTERNAL_LINK_PREFIX'		=> 'Préfixe des liens',
	'ACP_EXTERNAL_LINK_REDIRECT'	=> 'Redirect time',

	'ACP_INTERNAL_LINK_DOMAINS'		=> 'Liste des domaines non couverts par les paramètres ci-dessus. Utilisez le «&nbsp;;&nbsp;» (point-virgule) comme séparateur.',
	'ACP_FORBIDDEN_DOMAINS'			=> 'Liste des domaines qui ne seront pas traités comme liens, mais seront affichés. Utilisez le «&nbsp;;&nbsp;» (point-virgule) comme séparateur.',
	'ACP_FORBIDDEN_DOMAINS_TEXT'	=> 'Texte à la place de l’URL bloqué',
	'ACP_FORBIDDEN_NEW_URL'			=> 'URL de base à ne pas traiter',

	'ACP_MODED_LINKS_ATTRIBUTES'	=> 'Attributs des liens',
	'ACP_INTERNAL_LINK_REL'			=> 'Attribut «&nbsp;rel&nbsp;» des liens internes',
	'ACP_EXTERNAL_LINK_REL'			=> 'Attribut «&nbsp;rel&nbsp;» des liens externes',
	'ACP_INTERNAL_LINK_TARGET'		=> 'Cible des liens internes',
	'ACP_EXTERNAL_LINK_TARGET'		=> 'Cible des liens externes',
	'ACP_INTERNAL_LINK_CLASS'		=> 'Classe des liens internes',
	'ACP_EXTERNAL_LINK_CLASS'		=> 'Classe des liens externes',
	'ACP_EXTERNAL_LINK_NOINDEX'		=> 'Près de noindex liens externes?',
/* New lang en*/
	'ACP_MODED_LINKS_TYPES'			=> 'Link file types',
	'ACP_PDF_LINK_TYPES'			=> 'PDF Link types',
	'ACP_IMG_LINK_TYPES'			=> 'IMG Link types',
	'ACP_ZIP_LINK_TYPES'			=> 'ZIP Link types',
	'ACP_SKIP_LINK_TYPES'			=> 'Don\'t process links to these file types',
	'ACP_SKIP_PREFIX_TYPES'			=> 'Don\'t add an external link prefix for these file types',
	'ACP_LINK_TYPES_EXPLAIN'		=> 'Link file types (separate file extensions with a vertical bar "|").',
	'ACP_EXTERNAL_LINK_TYPES'		=> 'Types de lien externe',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Seront traités comme des liens externes.<br />Exemple: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'		=> 'Types de lien interne',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Seront traités comme des références internes.<br />Exemple: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'MESSAGE_TEXT'	=> '<strong>Vous vous dirigez vers un lien externe&nbsp;: <span class="error">%s</span></strong><p>Soyez certain que ce lien est fiable et sécurisé.<br />Si ce lien est suspect, veuillez en avertir la modération.</p>',
	'URL_LINK'		=> '%sSuivre le lien%s',
	'CLOSE_PAGE'	=> '%sClose this page%s',
));
