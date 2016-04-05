<?php
/**
* @author Anvar [http://bb3.mobi]
* @version 1.0.5
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*/

namespace bb3mobi\exlinks\controller;

class url
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/** @var bb3mobi\exlinks\idna_convert */
	protected $convert;

	public function __construct(\phpbb\template\template $template, \phpbb\user $user, \phpbb\config\config $config, $convert)
	{
		$this->template = $template;
		$this->user = $user;
		$this->config = $config;
		$this->convert = $convert;
	}

	public function main($url)
	{
		$this->user->add_lang_ext('bb3mobi/exlinks', 'exlinks');

		$location = urldecode($url);

		$redirect_url = html_entity_decode($location, ENT_QUOTES);

		if (!preg_match('#(^|[\n\t (>.])(' . get_preg_expression('url_inline') . ')#iu', $redirect_url))
		{
			trigger_error('INSECURE_REDIRECT');
		}

		if (!preg_match('#.#u', $redirect_url))
		{
			$redirect_url = iconv('Windows-1251', 'UTF-8', $redirect_url);
		}

		$redirect_url = $this->convert->encode_uri($redirect_url);

		if (!$this->config['external_link_redirect'])
		{
			redirect($redirect_url, false, true);
		}

		// Time redirect
		meta_refresh($this->config['external_link_redirect'], $redirect_url, true);
		//header('Refresh: ' . $this->config['external_link_redirect'] . '; url=' . $redirect_url);

		$parse = parse_url($location);

		$redirect_url = utf8_basename($parse['host']);

		$this->template->assign_vars(array(
			'EXTERNAL_MSG'	=> sprintf($this->user->lang['EXTERNAL_MESSAGE_TEXT'], $redirect_url),
			'EXTERNAL_RED'	=> $this->config['external_link_redirect'],
			'EXTERNAL_URL'	=> $location,
			)
		);

		//
		// Start output of page
		//
		page_header($this->user->lang['EXTERNAL_REDIRECT']);

		$this->template->set_filenames(array(
			'body' => '@bb3mobi_exlinks/exlinks_body.html')
		);

		page_footer();
	}
}
