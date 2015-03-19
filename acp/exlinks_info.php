<?php
/**
*
* @package External Links
* @copyright (c) 2014 Anvar http://bb3.mobi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

namespace bb3mobi\exlinks\acp;

class exlinks_info
{
	function module()
	{
		return array(
			'filename'	=> '\bb3mobi\exlinks\acp\exlinks_module',
			'title'		=> 'ACP_MODED_LINKS_TITLE',
			'version'	=> '1.0.0',
			'modes'		=> array(
				'config_exlinks'		=> array('title' => 'ACP_MODED_LINKS', 'auth' => 'ext_bb3mobi/exlinks && acl_a_board', 'cat' => array('ACP_MODED_LINKS_TITLE')),
			),
		);
	}
}
