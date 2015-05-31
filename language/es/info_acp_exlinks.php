<?php
/**
*
* External Links [Spanish]
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
	'ACP_MODED_LINKS_TITLE'			=> 'Enlaces Externos',
	'ACP_MODED_LINKS'					=> 'Gestionar enlaces',
	'ACP_MODED_LINKS_EXPLAIN'			=> 'Ken F. Innes IV <a href="http://www.absoluteanime.com/admin/mods.htm#links">Prime Links phpBB3.0</a> | Anvar S. <a href="http://bb3.mobi">External Links for phpBB3.1</a>',
	'ACP_MODED_LINKS_DESCRIPTION'		=> 'Aquí puede personalizar la visualización de todos los enlaces externos publicados en el foro.',
	'ACP_MODED_LINKS_SETTINGS'			=> 'Ajustes básicos de enlaces',
	'ACP_TARGET_ATTRIBUTE'				=> '¿Usar el atributo «target»?',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'		=> 'Si está desactivada, se utilizará OnClick JavaScript.',
	'ACP_HIDE_LINKS_GUESTS'				=> '¿Ocultar enlaces externos a invitados?',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'		=> 'Introduzca el texto, y nombres de los enlaces que desea reemplazados.',
	'ACP_HIDE_LINKS_MIN_POSTS'			=> 'Hide from registered',
	'ACP_HIDE_LINKS_MIN_POSTS_EXPLAIN'	=> 'Minimum posts to view links registered users.',
	'ACP_EXTERNAL_LINK_PREFIX'			=> 'Prefijo antes del enlace',
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
	'ACP_INTERNAL_LINK_DOMAINS_EXPLAIN'	=> 'Lista de los dominios que no están cubiertos por el mantenimiento anteriormente.',
	'ACP_FORBIDDEN_DOMAINS'				=> 'Blocked domains',
	'ACP_FORBIDDEN_DOMAINS_EXPLAIN'		=> 'Lista de los dominios que no se muestran enlaces.',
	'ACP_FORBIDDEN_DOMAINS_TEXT'		=> 'Texto en lugar de URL bloqueada',
	'ACP_FORBIDDEN_NEW_URL'				=> 'URL en lugar de los enlaces remotos',
	'ACP_MODED_LINKS_ATTRIBUTES'		=> 'Atributos de enlaces',
	'ACP_INTERNAL_LINK_REL'				=> 'El atributo rel de enlaces internos',
	'ACP_EXTERNAL_LINK_REL'				=> 'El atributo rel de enlaces externos',
	'ACP_INTERNAL_LINK_TARGET'			=> 'Tipo de target para enlaces internos',
	'ACP_EXTERNAL_LINK_TARGET'			=> 'Tipo de target para enlaces externos',
	'ACP_INTERNAL_LINK_CLASS'			=> 'Clase de los enlaces internos',
	'ACP_EXTERNAL_LINK_CLASS'			=> 'Clase de los enlaces externos',
	'ACP_EXTERNAL_LINK_NOINDEX'			=> '¿Cerrar noindex en enlaces externos?',
	'ACP_MODED_LINKS_TYPES'				=> 'Enlaces de tipos de archivos',
	'ACP_PDF_LINK_TYPES'				=> 'Tipos de enlaces PDF',
	'ACP_IMG_LINK_TYPES'				=> 'Tipos de enlaces IMG',
	'ACP_ZIP_LINK_TYPES'				=> 'Tipos de enlaces ZIP',
	'ACP_SKIP_LINK_TYPES'				=> 'No procese enlaces a estos tipos de archivo',
	'ACP_SKIP_PREFIX_TYPES'				=> 'No agregue un prefijo de enlace externo para estos tipos de archivos',
	'ACP_LINK_TYPES_EXPLAIN'			=> 'Tipos de enlaces de archivo (separar extensiones de archivos con una barra vertical "|").',
	'ACP_EXTERNAL_LINK_TYPES'			=> 'Tipos de enlaces externos',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Serán tratados como los enlaces externos.<br />Ejemplo: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'			=> 'Tipos de enlaces internos',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Será tratado como referencias internas.<br />Ejemplo: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
));
