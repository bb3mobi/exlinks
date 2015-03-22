<?php
/**
*
* @package External Links
* @copyright (c) 2014 Anvar [http://bb3.mobi]
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace bb3mobi\exlinks\acp;

class exlinks_module
{
	var $u_action;
	var $new_config = array();

	function main($id, $mode)
	{
		global $config, $user, $template, $request, $phpbb_container;

		$this->page_title = 'ACP_MODED_LINKS_TITLE';
		$this->tpl_name = 'acp_exlinks';

		$submit = $request->is_set_post('submit');

		$form_key = 'config_exlinks';
		add_form_key($form_key);

		$display_vars = array(
			'title'	=> 'ACP_MODED_LINKS',
			'vars'	=> array(
				'legend1'				=> 'ACP_MODED_LINKS_SETTINGS',
					'hide_links_from_guests'		=> array('lang' => 'ACP_HIDE_LINKS_GUESTS',				'validate' => 'string',		'type' => 'text:40:70', 'explain' => true),
					'hide_links_min_posts'			=> array('lang' => 'ACP_HIDE_LINKS_MIN_POSTS',			'validate' => 'int:0:200',	'type' => 'number:0:200', 'explain' => true),
					'external_link_prefix'			=> array('lang' => 'ACP_EXTERNAL_LINK_PREFIX',			'validate' => 'string',		'type' => 'text:30:255', 'explain' => true),
					'external_link_prefix_level'	=> array('lang' => 'ACP_EXTERNAL_LINK_PREFIX_LEVEL',	'validate' => 'int',		'type' => 'select', 'method' => 'select_display_type', 'explain' => false),
					'external_link_redirect'		=> array('lang' => 'ACP_EXTERNAL_LINK_REDIRECT',		'validate' => 'int:0:120',	'type' => 'number:0:120', 'explain' => false),
					'internal_link_domains'			=> array('lang' => 'ACP_INTERNAL_LINK_DOMAINS',			'validate' => '',			'type' => 'textarea:6:30', 'explain' => true),
					'forbidden_domains'				=> array('lang' => 'ACP_FORBIDDEN_DOMAINS',				'validate' => '',			'type' => 'textarea:6:30', 'explain' => true),
					'forbidden_domains_text'		=> array('lang' => 'ACP_FORBIDDEN_DOMAINS_TEXT',		'validate' => 'string',		'type' => 'text:40:70', 'explain' => false),
					'forbidden_new_url'				=> array('lang' => 'ACP_FORBIDDEN_NEW_URL',				'validate' => 'string',		'type' => 'text:30:255', 'explain' => false),

				'legend2'				=> 'ACP_MODED_LINKS_ATTRIBUTES',
					'use_target_attribute'		=> array('lang' => 'ACP_TARGET_ATTRIBUTE',		'validate' => 'bool', 'type' => 'radio:yes_no', 'explain' => true),
					'internal_link_rel'		=> array('lang' => 'ACP_INTERNAL_LINK_REL', 'validate' => 'string',	'type' => 'text:10:10', 'explain' => false),
					'external_link_rel'		=> array('lang' => 'ACP_EXTERNAL_LINK_REL', 'validate' => 'string',	'type' => 'text:10:10', 'explain' => false),
					'internal_link_target'	=> array('lang' => 'ACP_INTERNAL_LINK_TARGET', 'validate' => 'string',	'type' => 'text:10:10', 'explain' => false),
					'external_link_target'	=> array('lang' => 'ACP_EXTERNAL_LINK_TARGET', 'validate' => 'string',	'type' => 'text:10:10', 'explain' => false),
					'internal_link_class'	=> array('lang' => 'ACP_INTERNAL_LINK_CLASS', 'validate' => 'string',	'type' => 'text:12:12', 'explain' => false),
					'external_link_class'	=> array('lang' => 'ACP_EXTERNAL_LINK_CLASS', 'validate' => 'string',	'type' => 'text:12:12', 'explain' => false),
					'external_link_noindex'	=> array('lang' => 'ACP_EXTERNAL_LINK_NOINDEX', 'validate' => 'bool',	'type' => 'radio:yes_no', 'explain' => false),

				'legend3'				=> 'ACP_MODED_LINKS_TYPES',
					'pdf_link_types'		=> array('lang' => 'ACP_PDF_LINK_TYPES',		'validate' => 'string', 'type' => 'text:30:70', 'explain' => true, 'lang_explain' => 'ACP_LINK_TYPES_EXPLAIN'),
					'img_link_types'		=> array('lang' => 'ACP_IMG_LINK_TYPES',		'validate' => 'string', 'type' => 'text:30:70', 'explain' => true, 'lang_explain' => 'ACP_LINK_TYPES_EXPLAIN'),
					'zip_link_types'		=> array('lang' => 'ACP_ZIP_LINK_TYPES',		'validate' => 'string', 'type' => 'text:30:70', 'explain' => true, 'lang_explain' => 'ACP_LINK_TYPES_EXPLAIN'),
					'external_link_types'	=> array('lang' => 'ACP_EXTERNAL_LINK_TYPES',	'validate' => 'string', 'type' => 'text:50:90', 'explain' => true),
					'internal_link_types'	=> array('lang' => 'ACP_INTERNAL_LINK_TYPES',	'validate' => 'string', 'type' => 'text:50:90', 'explain' => true),
					'skip_link_types'		=> array('lang' => 'ACP_SKIP_LINK_TYPES',		'validate' => 'string', 'type' => 'text:50:90', 'explain' => true, 'lang_explain' => 'ACP_LINK_TYPES_EXPLAIN'),
					'skip_prefix_types'		=> array('lang' => 'ACP_SKIP_PREFIX_TYPES',		'validate' => 'string', 'type' => 'text:50:90', 'explain' => true, 'lang_explain' => 'ACP_LINK_TYPES_EXPLAIN'),

				'legend4'	=> 'ACP_SUBMIT_CHANGES',
			),
		);

		if (isset($display_vars['lang']))
		{
			$user->add_lang($display_vars['lang']);
		}

		$this->new_config = $config;

		$cfg_array = ($request->is_set('config')) ? utf8_normalize_nfc($request->variable('config', array('' => ''), true)) : $this->new_config;
		$error = array();

		// We validate the complete config if wished
		validate_config_vars($display_vars['vars'], $cfg_array, $error);

		if ($submit && !check_form_key($form_key))
		{
			$error[] = $user->lang['FORM_INVALID'];
		}
		// Do not write values if there is an error
		if (sizeof($error))
		{
			$submit = false;
		}

		$config_text = $phpbb_container->get('config_text');

		// We go through the display_vars to make sure no one is trying to set variables he/she is not allowed to...
		foreach ($display_vars['vars'] as $config_name => $null)
		{
			if (!isset($cfg_array[$config_name]) || strpos($config_name, 'legend') !== false)
			{
				continue;
			}

			$this->new_config[$config_name] = $config_value = $cfg_array[$config_name];

			if ($submit)
			{
				if ($config_name == 'internal_link_domains' || $config_name == 'forbidden_domains')
				{
					$config_text->set_array(array($config_name => $config_value));
				}
				else
				{
					$config->set($config_name, $config_value);
				}
			}
		}

		if ($submit)
		{
			trigger_error($user->lang['CONFIG_UPDATED'] . adm_back_link($this->u_action));
		}

		$this->page_title = $display_vars['title'];

		$template->assign_vars(array(
			'L_TITLE'				=> $user->lang[$display_vars['title']],
			'L_TITLE_EXPLAIN'		=> $user->lang[$display_vars['title'] . '_EXPLAIN'],
			'L_TITLE_DESCRIPTION'	=> $user->lang[$display_vars['title'] . '_DESCRIPTION'],

			'S_ERROR'			=> (sizeof($error)) ? true : false,
			'ERROR_MSG'			=> implode('<br />', $error),
		));
		
		// Output relevant page
		foreach ($display_vars['vars'] as $config_key => $vars)
		{
			if (!is_array($vars) && strpos($config_key, 'legend') === false)
			{
				continue;
			}

			if (strpos($config_key, 'legend') !== false)
			{
				$template->assign_block_vars('options', array(
					'S_LEGEND'		=> true,
					'LEGEND'		=> (isset($user->lang[$vars])) ? $user->lang[$vars] : $vars)
				);

				continue;
			}

			$type = explode(':', $vars['type']);

			$l_explain = '';
			if ($vars['explain'] && isset($vars['lang_explain']))
			{
				$l_explain = (isset($user->lang[$vars['lang_explain']])) ? $user->lang[$vars['lang_explain']] : $vars['lang_explain'];
			}
			else if ($vars['explain'])
			{
				$l_explain = (isset($user->lang[$vars['lang'] . '_EXPLAIN'])) ? $user->lang[$vars['lang'] . '_EXPLAIN'] : '';
			}

			$l_description = (isset($user->lang[$vars['lang'] . '_DESCRIPTION'])) ? $user->lang[$vars['lang'] . '_DESCRIPTION'] : '';

			if ($config_key == 'internal_link_domains' || $config_key == 'forbidden_domains')
			{
				$this->new_config[$config_key] = $config_text->get($config_key);
			}

			$content = build_cfg_template($type, $config_key, $this->new_config, $config_key, $vars);

			if (empty($content))
			{
				continue;
			}

			$template->assign_block_vars('options', array(
				'KEY'					=> $config_key,
				'TITLE'					=> (isset($user->lang[$vars['lang']])) ? $user->lang[$vars['lang']] : $vars['lang'],
				'S_EXPLAIN'				=> $vars['explain'],
				'TITLE_EXPLAIN'			=> $l_explain,
				'TITLE_DESCRIPTION'		=> $l_description,
				'CONTENT'				=> $content,
				)
			);

			unset($display_vars['vars'][$config_key]);
		}
	}
	/**
	* Select display method
	*/
	function select_display_type($selected_value, $value)
	{
		global $user;

		$act_options = '';

		foreach ($user->lang['LINK_PREFIX_LEVEL'] as $key => $value)
		{
			$selected = ($selected_value == $key) ? ' selected="selected"' : '';
			$act_options .= '<option value="' . $key . '"' . $selected . '>' . $value . '</option>';
		}

		return $act_options;
	}
}
