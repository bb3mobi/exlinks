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
	'ACP_MODED_LINKS_TITLE'			=> 'External Links',
	'ACP_MODED_LINKS'					=> 'Менеджер ссылок',
	'ACP_MODED_LINKS_EXPLAIN'			=> 'Ken F. Innes IV <a href="http://www.absoluteanime.com/admin/mods.htm#links">Prime Links phpBB3.0</a> | Anvar S. <a href="http://bb3.mobi">External Links for phpBB3.1</a>',
	'ACP_MODED_LINKS_DESCRIPTION'		=> 'Тут вы можете настроить отображение всех внешних ссылок размещённых на форуме.',
	'ACP_MODED_LINKS_SETTINGS'			=> 'Основные настройки ссылок',
	'ACP_TARGET_ATTRIBUTE'				=> 'Использовать «target» атрибут',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'		=> 'Если выключен, будет использован OnClick на JavaScript.',
	'ACP_HIDE_LINKS_GUESTS'				=> 'Скрыть внешние ссылки от гостей',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'		=> 'Введите текст и названия ссылок будут заменены им, число скроет ссылки с текстом по умолчанию.',
	'ACP_HIDE_LINKS_MIN_POSTS'			=> 'Скрыть от зарегистрированных',
	'ACP_HIDE_LINKS_MIN_POSTS_EXPLAIN'	=> 'Минимум сообщений для просмотра ссылок зарегистрированными пользователями.',
	'ACP_EXTERNAL_LINK_PREFIX'			=> 'Префикс перед ссылкой',
	'ACP_EXTERNAL_LINK_PREFIX_EXPLAIN'	=> 'Оставьте поле пустым, для применения штатной страницы подтверждения.',
	'ACP_EXTERNAL_LINK_PREFIX_LEVEL'	=> 'Префикс/Страница подтверждения',
	'LINK_PREFIX_LEVEL'	=> array(
		0	=> 'Не применять префикс',
		1	=> 'Только для гостей',
		2	=> 'Для зарегистрированных',
		3	=> 'Применить для всех',
	),
	'ACP_EXTERNAL_LINK_REDIRECT'		=> 'Время для перенаправления',
	'ACP_INTERNAL_LINK_DOMAINS'			=> 'Доверенные домены',
	'ACP_INTERNAL_LINK_DOMAINS_EXPLAIN'	=> 'Список доменов, на которые не будут распространяться действия выше. Вводите каждый с новой строки.',
	'ACP_FORBIDDEN_DOMAINS'				=> 'Заблокированные домены',
	'ACP_FORBIDDEN_DOMAINS_EXPLAIN'		=> 'Список доменов, ссылки которых не будут отображаться. Вводите каждый с новой строки.',
	'ACP_FORBIDDEN_DOMAINS_TEXT'		=> 'Текст вместо заблокированных url',
	'ACP_FORBIDDEN_NEW_URL'				=> 'URL вместо любых удаленных ссылок',
	'ACP_MODED_LINKS_ATTRIBUTES'		=> 'Атрибуты ссылок',
	'ACP_INTERNAL_LINK_REL'				=> 'Атрибут rel внутрених ссылок',
	'ACP_EXTERNAL_LINK_REL'				=> 'Атрибут rel внешних ссылок',
	'ACP_INTERNAL_LINK_TARGET'			=> 'Тип target внутрених ссылок',
	'ACP_EXTERNAL_LINK_TARGET'			=> 'Тип target внешних ссылок',
	'ACP_INTERNAL_LINK_CLASS'			=> 'class внутренних ссылок',
	'ACP_EXTERNAL_LINK_CLASS'			=> 'class внешних ссылок',
	'ACP_EXTERNAL_LINK_NOINDEX'			=> 'Использовать «noindex» для внешних ссылок?',
	'ACP_MODED_LINKS_TYPES'				=> 'Конкретные типы ссылок',
	'ACP_PDF_LINK_TYPES'				=> 'PDF Link types',
	'ACP_IMG_LINK_TYPES'				=> 'IMG Link types',
	'ACP_ZIP_LINK_TYPES'				=> 'ZIP Link types',
	'ACP_SKIP_LINK_TYPES'				=> 'Не обрабатывать ссылки на типы файлов',
	'ACP_SKIP_PREFIX_TYPES'				=> 'Не добавлять ссылку префикс для типов файлов',
	'ACP_LINK_TYPES_EXPLAIN'			=> 'Отделяйте расширения файлов вертикальной чертой "|".',
	'ACP_EXTERNAL_LINK_TYPES'			=> 'Внешние ссылки на типы файлов',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Будут обработаны как внешние ссылки.<br />Пример: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'			=> 'Внутренние ссылки на типы файлов',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Будут обработаны как внутренние ссылки.<br />Пример: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
));
