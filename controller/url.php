<?php
/**
* @author Anvar [http://bb3.mobi]
* @version 1.0.0
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

namespace bb3mobi\exlinks\controller;

use Symfony\Component\HttpFoundation\Response;

class url
{
	protected $request;

	protected $user;

	protected $config;

	public function __construct(\phpbb\request\request_interface $request, \phpbb\user $user, \phpbb\config\config $config)
	{
		$this->request = $request;
		$this->user = $user;
		$this->config = $config;
	}

	public function main()
	{
		$this->user->add_lang_ext('bb3mobi/exlinks', 'info_acp_exlinks');

		$location = urldecode($this->request->server('QUERY_STRING'));
		$location = strip_tags($location);
		if (!preg_match('#.#u', $location))
		{
			$location = iconv('Windows-1251', 'UTF-8', $location);
		}

		if (preg_match('/^http(s)?:\/\//i', $location) && empty($user->data['is_bot']))
		{
			if (!$this->config['external_link_redirect'])
			{
				redirect($location, false, true);
				return;
			}
			meta_refresh($this->config['external_link_redirect'], $location, true); // Time redirect
			$parse =  parse_url($location);
			$message = sprintf($this->user->lang['MESSAGE_TEXT'], utf8_basename($parse['host']));
			$message .= '<script type="text/javascript">
			function timer(){
			var obj=document.getElementById(\'timer_inp\');
			obj.innerHTML--;
				if (obj.innerHTML==0){
					setTimeout(function(){},1000);
				} else {
					setTimeout(timer,1000);
				}
			}
			setTimeout(timer,1000);
			</script>';
			$message .= '<p class="error">' . $this->user->lang['ACP_EXTERNAL_LINK_EXACT'] . '&nbsp;<a href="' . $location . '">' . $location . '</a></p>';
			$message .= sprintf($this->user->lang['URL_LINK'], '&nbsp;<a href="' . $location . '" class="button">', '</a>');
			$message .= '&nbsp;<span id="timer_inp" class="button">' . $this->config['external_link_redirect'] . '</span>';
			$message .= sprintf($this->user->lang['CLOSE_PAGE'], '&nbsp;<a href="' . generate_board_url() . '" class="button" onclick="self.close()">', '</a>');
		}
		else
		{
			$message = '<div class="search-box"><form action="http://www.google.com/search"><fieldset>';
			$message .= '<input class="inputbox search tiny" type="search" name="q" value="' . $location . '" />';
			$message .= '<button type="submit" class="button icon-button search-icon" title="Google!">Google!</button>';
			$message .= '</fieldset></form></div>';
		}
		$copyright = ' &copy; <a href="http://bb3.mobi">' . $this->user->lang['ACP_MODED_LINKS_TITLE'] . ' phpBB3.1</a>';
		trigger_error($message . '<div class="copyright">' . $this->user->lang['ACP_MODED_LINKS'] . ' bb3.mobi' . $copyright . '</div>');
	}
}