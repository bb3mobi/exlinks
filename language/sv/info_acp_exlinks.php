<?php
/**
*
* External Links [English]
* Swedish translation by Holger (http://www.maskinisten.net)
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
	'ACP_MODED_LINKS_TITLE'				=> 'Externa länkar',
	'ACP_MODED_LINKS'					=> 'Hantera länkar',
	'ACP_MODED_LINKS_EXPLAIN'			=> 'Ken F. Innes IV <a href="http://www.absoluteanime.com/admin/mods.htm#links">Prime Links phpBB3.0</a> | Anvar S. <a href="http://bb3.mobi">External Links for phpBB3.1</a>',
	'ACP_MODED_LINKS_DESCRIPTION'		=> 'Här kan du ställa in hur externa länkar markeras i forumet.',
	'ACP_MODED_LINKS_SETTINGS'			=> 'Grundinställningar',
	'ACP_TARGET_ATTRIBUTE'				=> 'Skall Â«targetÂ»-attributet användas?',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'		=> 'Om detta deaktiveras så används OnClick JavaScript.',
	'ACP_HIDE_LINKS_GUESTS'				=> 'Dölj externa länkar för gäster?',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'		=> 'Ange den text som ska visas för gäster istället.',
	'ACP_HIDE_LINKS_MIN_POSTS'			=> 'Hide from registered',
	'ACP_HIDE_LINKS_MIN_POSTS_EXPLAIN'	=> 'Minimum posts to view links registered users.',
	'ACP_EXTERNAL_LINK_PREFIX'		=> 'Prefix före länken',
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
	'ACP_INTERNAL_LINK_DOMAINS_EXPLAIN'	=> 'Lista över domäner som ej ska täckas av ovanstående.',
	'ACP_FORBIDDEN_DOMAINS'				=> 'Blocked domains',
	'ACP_FORBIDDEN_DOMAINS_EXPLAIN'		=> 'Lista över domäner som ej ska visas, separera med ";"',
	'ACP_FORBIDDEN_DOMAINS_TEXT'		=> 'Text som ska ersätta blockerade URLer',
	'ACP_FORBIDDEN_NEW_URL'				=> 'URL som ska ersätta alla externa länkar',
	'ACP_MODED_LINKS_ATTRIBUTES'		=> 'Länk-attribut',
	'ACP_INTERNAL_LINK_REL'				=> 'rel-attributet för interna länkar',
	'ACP_EXTERNAL_LINK_REL'				=> 'rel-attributet för externa länkar',
	'ACP_INTERNAL_LINK_TARGET'			=> 'target för interna länkar',
	'ACP_EXTERNAL_LINK_TARGET'			=> 'target för externa länkar',
	'ACP_INTERNAL_LINK_CLASS'			=> 'class för interna länkar',
	'ACP_EXTERNAL_LINK_CLASS'			=> 'class för externa länkar',
	'ACP_EXTERNAL_LINK_NOINDEX'			=> 'noindex för externa länkar?',
	'ACP_MODED_LINKS_TYPES'				=> 'Länktyper',
	'ACP_PDF_LINK_TYPES'				=> 'PDF länktyper',
	'ACP_IMG_LINK_TYPES'				=> 'IMG länktyper',
	'ACP_ZIP_LINK_TYPES'				=> 'ZIP länktyper',
	'ACP_SKIP_LINK_TYPES'				=> 'Tillåt ej länkar till dessa filtyper',
	'ACP_SKIP_PREFIX_TYPES'				=> 'Lägg ej till extern länkprefix för dessa filtyper',
	'ACP_LINK_TYPES_EXPLAIN'			=> 'Länktyper (separera filtyperna med en vertikal balk "|").',
	'ACP_EXTERNAL_LINK_TYPES'			=> 'Externa länktyper',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Kommer att behandlas som externa lankar.<br />Exempel: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'			=> 'Interna länktyper',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Kommer att behandlas som interna referenser.<br />Exempel: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
));
