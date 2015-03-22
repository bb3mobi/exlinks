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

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_MODED_LINKS_TITLE'			=> 'Liens externes',
	'ACP_MODED_LINKS'					=> 'Gestion des liens',
	'ACP_MODED_LINKS_EXPLAIN'			=> 'Ken F. Innes IV <a href="http://www.absoluteanime.com/admin/mods.htm#links">Prime Links phpBB3.0</a> | Anvar S. <a href="http://bb3.mobi">External Links for phpBB3.1</a>',
	'ACP_MODED_LINKS_DESCRIPTION'	=> 'Cette page permet de personnaliser l’affichage et la gestion des liens externes postés sur votre forum.',
	'ACP_MODED_LINKS_SETTINGS'			=> 'Paramètres des liens',
	'ACP_TARGET_ATTRIBUTE'				=> 'Utiliser l’attribut «&nbsp;target&nbsp;»&nbsp;?',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'		=> 'Si désactivé, les liens seront traité par le JavaScript «&nbsp;OnClick&nbsp;».',
	'ACP_HIDE_LINKS_GUESTS'				=> 'Masquer les liens externes aux visiteurs&nbsp;?',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'		=> 'Saisir un texte remplacera les liens par ce texte pour les visiteurs.',
	'ACP_HIDE_LINKS_MIN_POSTS'			=> 'Hide from registered',
	'ACP_HIDE_LINKS_MIN_POSTS_EXPLAIN'	=> 'Minimum posts to view links registered users.',
	'ACP_EXTERNAL_LINK_PREFIX'		=> 'Préfixe des liens',
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
	'ACP_INTERNAL_LINK_DOMAINS_EXPLAIN'	=> 'Liste des domaines non couverts par les paramètres ci-dessus.',
	'ACP_FORBIDDEN_DOMAINS'				=> 'Blocked domains',
	'ACP_FORBIDDEN_DOMAINS_EXPLAIN'		=> 'Liste des domaines qui ne seront pas traités comme liens, mais seront affichés.',
	'ACP_FORBIDDEN_DOMAINS_TEXT'		=> 'Texte à la place de l’URL bloqué',
	'ACP_FORBIDDEN_NEW_URL'				=> 'URL de base à ne pas traiter',
	'ACP_MODED_LINKS_ATTRIBUTES'		=> 'Attributs des liens',
	'ACP_INTERNAL_LINK_REL'				=> 'Attribut «&nbsp;rel&nbsp;» des liens internes',
	'ACP_EXTERNAL_LINK_REL'				=> 'Attribut «&nbsp;rel&nbsp;» des liens externes',
	'ACP_INTERNAL_LINK_TARGET'			=> 'Cible des liens internes',
	'ACP_EXTERNAL_LINK_TARGET'			=> 'Cible des liens externes',
	'ACP_INTERNAL_LINK_CLASS'			=> 'Classe des liens internes',
	'ACP_EXTERNAL_LINK_CLASS'			=> 'Classe des liens externes',
	'ACP_EXTERNAL_LINK_NOINDEX'			=> 'Près de noindex liens externes?',
	'ACP_MODED_LINKS_TYPES'				=> 'Link file types',
	'ACP_PDF_LINK_TYPES'				=> 'PDF Link types',
	'ACP_IMG_LINK_TYPES'				=> 'IMG Link types',
	'ACP_ZIP_LINK_TYPES'				=> 'ZIP Link types',
	'ACP_SKIP_LINK_TYPES'				=> 'Don\'t process links to these file types',
	'ACP_SKIP_PREFIX_TYPES'				=> 'Don\'t add an external link prefix for these file types',
	'ACP_LINK_TYPES_EXPLAIN'			=> 'Link file types (separate file extensions with a vertical bar "|").',
	'ACP_EXTERNAL_LINK_TYPES'			=> 'Types de lien externe',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Seront traités comme des liens externes.<br />Exemple: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'			=> 'Types de lien interne',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Seront traités comme des références internes.<br />Exemple: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
));
