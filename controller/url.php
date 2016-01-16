<?php
/**
* @author Anvar [http://bb3.mobi]
* @version 1.0.0
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

namespace bb3mobi\exlinks\controller;

class url
{
	/** @var \phpbb\template\template */
	protected $template;

	/** @var \phpbb\request\request_interface */
	protected $request;

	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\user */
	protected $user;

	/** @var bb3mobi\exlinks\idna_convert */
	protected $convert;

	public function __construct(\phpbb\template\template $template, \phpbb\request\request_interface $request, \phpbb\user $user, \phpbb\config\config $config, $convert)
	{
		$this->template = $template;
		$this->request = $request;
		$this->user = $user;
		$this->config = $config;
		$this->convert = $convert;
	}

	public function main()
	{
		$this->user->add_lang_ext('bb3mobi/exlinks', 'exlinks');

		$location = urldecode($this->request->server('QUERY_STRING'));
		if (!preg_match('#.#u', $location))
		{
			$location = iconv('Windows-1251', 'UTF-8', $location);
		}
		$redirect_url = $this->convert->encode_uri($location);

		if (/*filter_var($redirect_url, FILTER_VALIDATE_URL) && */empty($this->user->data['is_bot']))
		{
			$s_link_valid = true;
			if (!$this->config['external_link_redirect'])
			{
				redirect($redirect_url, false, true);
			}
			header('Refresh: ' . $this->config['external_link_redirect'] . '; url=' . $redirect_url); // Time redirect
			$parse = parse_url($location);
			$redirect_url = utf8_basename($parse['host']);
		}

		$this->template->assign_vars(array(
			'EXTERNAL_MSG'	=> sprintf($this->user->lang['EXTERNAL_MESSAGE_TEXT'], $redirect_url),
			'EXTERNAL_RED'	=> $this->config['external_link_redirect'],
			'EXTERNAL_URL'	=> $location,

			'S_LINK_VALID'	=> (isset($s_link_valid) ? true : false),
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
