<?php
/**
*
* @package External Links
* @copyright (c) 2014 Anvar http://bb3.mobi
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace bb3mobi\exlinks\migrations;

class exlinks_v_1_0_4 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['exlinks_version']) && version_compare($this->config['exlinks_version'], '1.0.4', '>=');
	}

	static public function depends_on()
	{
		return array('\bb3mobi\exlinks\migrations\exlinks_v_1_0_3');
	}

	public function update_data()
	{
		$internal_link_domains = (!empty($this->config['internal_link_domains'])) ? $this->config['internal_link_domains'] : '';
		$forbidden_domains = (!empty($this->config['forbidden_domains'])) ? $this->config['forbidden_domains'] : '';
		return array(
			// Add config text
			array('config_text.add', array('internal_link_domains', $internal_link_domains)),
			array('config_text.add', array('forbidden_domains', $forbidden_domains)),

			// Remove old config
			array('if', array(
				(isset($this->config['internal_link_domains']) || isset($this->config['internal_link_domains'])),
				array('config.remove', array('internal_link_domains')),
				array('config.remove', array('forbidden_domains')),
			)),

			// Current version
			array('config.update', array('exlinks_version', '1.0.4')),
		);
	}

	public function revert_data()
	{
		return array(
			// Remove config text
			array('config_text.remove', array('internal_link_domains')),
			array('config_text.remove', array('forbidden_domains')),
		);
	}
}
