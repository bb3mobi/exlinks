<?php
/**
*
* External Links [French]
* French translation by tomberaid (http://www.worshiprom.com/) & Galixte (http://www.galixte.com)
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
	'ACP_MODED_LINKS_TITLE'			=> 'Liens externes',
	'ACP_MODED_LINKS'					=> 'Gestion des liens',
	'ACP_MODED_LINKS_EXPLAIN'			=> 'Ken F. Innes IV <a href="http://www.absoluteanime.com/admin/mods.htm#links">Prime Links phpBB3.0</a> | Anvar S. <a href="http://bb3.mobi">External Links for phpBB3.1</a>',
	'ACP_MODED_LINKS_DESCRIPTION'	=> 'Cette page permet de personnaliser l’affichage et de gérer les liens externes postés sur le forum.',
	'ACP_MODED_LINKS_SETTINGS'			=> 'Paramètres des liens',
	'ACP_TARGET_ATTRIBUTE'				=> 'Utiliser l’attribut « target »',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'		=> 'Si désactivé, la fonction JavaScript de clic sur l’élément « OnClick » sera utilisée pour les liens.',
	'ACP_HIDE_LINKS_GUESTS'				=> 'Masquer les liens externes aux invités',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'		=> 'Le texte et le nom saisis remplaceront l’affichage des liens.',
	'ACP_HIDE_LINKS_MIN_POSTS'			=> 'Masquer les liens externes aux utilisateurs enregistrés',
	'ACP_HIDE_LINKS_MIN_POSTS_EXPLAIN'	=> 'Nombre minimum de messages nécessaires pour afficher les liens des utilisateurs enregistrés.',
	'ACP_EXTERNAL_LINK_PREFIX'		=> 'Préfixe des liens',
	'ACP_EXTERNAL_LINK_PREFIX_EXPLAIN'	=> 'En laissant vide, la page de confirmation standard sera affichée.',
	'ACP_EXTERNAL_LINK_PREFIX_LEVEL'	=> 'Préfixe ou page de confirmation',
	'LINK_PREFIX_LEVEL'	=> array(
		0	=> 'Ne pas utiliser de préfixe',
		1	=> 'Uniquement aux invités',
		2	=> 'Uniquement aux utilisateurs enregistrés',
		3	=> 'A tous',
	),
	'ACP_EXTERNAL_LINK_REDIRECT'		=> 'Durée de la redirection',
	'ACP_INTERNAL_LINK_DOMAINS'			=> 'Liste blanche',
	'ACP_INTERNAL_LINK_DOMAINS_EXPLAIN'	=> 'Liste des noms de domaines exemptés des paramètres ci-dessus. Saisir chaque nom de domaine sur une nouvelle ligne.',
	'ACP_FORBIDDEN_DOMAINS'				=> 'Noms de domaines bloqués',
	'ACP_FORBIDDEN_DOMAINS_EXPLAIN'		=> 'Liste des noms de domaines comportant des liens qui ne seront pas affichés. Saisir chaque nom de domaine sur une nouvelle ligne.',
	'ACP_FORBIDDEN_DOMAINS_TEXT'		=> 'Afficher un texte en lieu et place de l’adresse URL bloquée',
	'ACP_FORBIDDEN_NEW_URL'				=> 'Afficher une adresse URL en lieu et place des liens externes',
	'ACP_MODED_LINKS_ATTRIBUTES'		=> 'Attributs des liens',
	'ACP_INTERNAL_LINK_REL'				=> 'Attribut « rel » des liens internes',
	'ACP_EXTERNAL_LINK_REL'				=> 'Attribut « rel » des liens externes',
	'ACP_INTERNAL_LINK_TARGET'			=> 'Attribut « target » des liens internes',
	'ACP_EXTERNAL_LINK_TARGET'			=> 'Attribut « target » des liens externes',
	'ACP_INTERNAL_LINK_CLASS'			=> 'Attribut « class » des liens internes',
	'ACP_EXTERNAL_LINK_CLASS'			=> 'Attribut « class » des liens externes',
	'ACP_EXTERNAL_LINK_NOINDEX'			=> 'Attribut « noindex » des liens externes',
	'ACP_MODED_LINKS_TYPES'				=> 'Types de fichiers des liens',
	'ACP_PDF_LINK_TYPES'				=> 'Liens de type PDF',
	'ACP_IMG_LINK_TYPES'				=> 'Liens de type IMAGE',
	'ACP_ZIP_LINK_TYPES'				=> 'Liens de type ZIP',
	'ACP_SKIP_LINK_TYPES'				=> 'Exempter les liens pointant vers ces types de fichiers',
	'ACP_SKIP_PREFIX_TYPES'				=> 'Ne pas ajouter un préfixe aux liens externes pointant vers ces types de fichiers',
	'ACP_LINK_TYPES_EXPLAIN'			=> 'Types de fichiers des liens (les extensions des fichiers doivent être séparées par une barre verticale « | »).',
	'ACP_EXTERNAL_LINK_TYPES'			=> 'Types de fichiers des liens externes',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Types de fichiers considérés comme des liens externes.<br />Exemple : pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z.',
	'ACP_INTERNAL_LINK_TYPES'			=> 'Types de fichiers des liens internes',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Types de fichiers considérés comme des références internes.<br />Exemple : pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z.',
));
