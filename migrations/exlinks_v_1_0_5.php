<?php
/**
*
* @package External Links
* @copyright BB3.Mobi 2015 (c) Anvar (http://apwa.ru)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace bb3mobi\exlinks\migrations;

class exlinks_v_1_0_5 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['exlinks_version']) && version_compare($this->config['exlinks_version'], '1.0.5', '>=');
	}

	static public function depends_on()
	{
		return array('\bb3mobi\exlinks\migrations\exlinks_v_1_0_4');
	}

	public function update_data()
	{
		return array(
			// Add config
			array('config.add', array('external_link_prefix_level', '1')),
			array('config.add', array('hide_links_min_posts', '0')),

			// Update config
			array('if', array(
				(isset($this->config['external_link_prefix'])),
				array('config.update', array('external_link_prefix', '')),
			)),

			// Update version
			array('if', array(
				(isset($this->config['exlinks_version']) && version_compare($this->config['exlinks_version'], '1.0.5', '<')),
				array('config.update', array('exlinks_version', '1.0.5')),
			)),
		);
	}
}
