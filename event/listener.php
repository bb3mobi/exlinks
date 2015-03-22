<?php
/**
*
* @package phpBB3.0
* @version $Id: prime_links.php,v 1.3.0 2012/02/08 13:15:00 primehalo Exp $
* @copyright (c) 2007-2012 Ken F. Innes IV
*
*
* @package phpBB3.1 External Links v 1.0.5
* @copyright BB3.Mobi 2015 (c) Anvar(http://apwa.ru)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace bb3mobi\exlinks\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @bb3mobi.exlinks.helper */
	protected $helper;

	public function __construct($helper)
	{
		$this->helper = $helper;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.modify_text_for_display_after' => 'external_links',
		);
	}

	public function external_links($event)
	{
		$text = $event['text'];
		$text = $this->helper->modify_links($text);
		$event['text'] = $text;
	}
}
