<?php
/**
*
* @package External Links
* @copyright (c) 2014 Anvar http://bb3.mobi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace bb3mobi\exlinks\migrations;

class exlinks_v_1_0_3 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['exlinks_version']) && version_compare($this->config['exlinks_version'], '1.0.3', '>=');
	}

	static public function depends_on()
	{
			return array('\phpbb\db\migration\data\v310\dev');
	}

	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('use_target_attribute', '0')),
			array('config.add', array('hide_links_from_guests', '0')),
			array('config.add', array('external_link_prefix', generate_board_url() . '/url.php?')),
			array('config.add', array('internal_link_domains', 'phpbbguru.net;bb3.mobi;apwa.ru')),
			array('config.add', array('forbidden_domains', '')),
			array('config.add', array('forbidden_domains_text', 'url blocked!')),
			array('config.add', array('forbidden_new_url', generate_board_url())),
			array('config.add', array('internal_link_rel', '')),
			array('config.add', array('external_link_rel', '')),
			array('config.add', array('internal_link_target', '')),
			array('config.add', array('external_link_target', '_blank')),
			array('config.add', array('internal_link_class', '')),
			array('config.add', array('external_link_class', 'exlinks')),
			array('config.add', array('external_link_noindex', '0')),
			array('config.add', array('external_link_redirect', '35')),
			array('config.add', array('pdf_link_types', 'pdf|doc|docx|txt')),
			array('config.add', array('img_link_types', 'gif|jpg|jpeg|png|bmp')),
			array('config.add', array('zip_link_types', 'zip|rar|tar|7z')),
			array('config.add', array('external_link_types', '')),
			array('config.add', array('internal_link_types', '')),
			array('config.add', array('skip_link_types', '')),
			array('config.add', array('skip_prefix_types', '')),

			// Current version
			array('config.add', array('exlinks_version', '1.0.3')),
			// Add ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_MODED_LINKS_TITLE')),
			array('module.add', array('acp', 'ACP_MODED_LINKS_TITLE', array(
				'module_basename'	=> '\bb3mobi\exlinks\acp\exlinks_module',
				'module_langname'	=> 'ACP_MODED_LINKS',
				'module_mode'		=> 'config_exlinks',
				'module_auth'		=> 'ext_bb3mobi/exlinks && acl_a_board',
			))),
		);
	}

	public function revert_data()
	{
		return array(
			// remove from ACP modules
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_MODED_LINKS_TITLE')),
			array('module.remove', array('acp', 'ACP_MODED_LINKS_TITLE', array(
				'module_basename'	=> '\bb3mobi\exlinks\acp\exlinks_module',
				'module_langname'	=> 'ACP_MODED_LINKS',
				'module_mode'		=> 'config_exlinks',
				'module_auth'		=> 'ext_bb3mobi/exlinks && acl_a_board',
			))),
		);
	}
}
