<?php
/**
*
* @package phpBB3.0
* @version $Id: prime_links.php,v 1.3.0 2012/02/08 13:15:00 primehalo Exp $
* @copyright (c) 2007-2012 Ken F. Innes IV
*
*
* @package phpBB3.1 External Links v 1.0.5
* @copyright (c) 2015 Anvar (http://bb3.mobi)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace bb3mobi\exlinks\core;

class helper
{
	/** @var \phpbb\config\config */
	protected $config;

	/** @var \phpbb\config\db_text */
	protected $config_text;

	/** @var \phpbb\user */
	protected $user;

	/** @var \phpbb\controller\helper */
	protected $helper;

	var $internal_link_domains;
	var $forbidden_domains;

	var $board_url;
	var $board_host;

	public function __construct(\phpbb\config\config $config, \phpbb\config\db_text $config_text, \phpbb\user $user, \phpbb\controller\helper $helper)
	{
		$this->config = $config;
		$this->user = $user;
		$this->helper = $helper;

		$user->add_lang_ext('bb3mobi/exlinks', 'exlinks');

		$this->internal_link_domains = $config_text->get('internal_link_domains');
		$this->forbidden_domains = $config_text->get('forbidden_domains');

		$this->link_type = array(
			$config['pdf_link_types'] => 'pdf-link',
			$config['img_link_types'] => 'img-link',
			$config['zip_link_types'] => 'zip-link',
		);
		$this->board_url = generate_board_url(true);
		$this->board_url = utf8_case_fold_nfc($this->board_url);
		$this->board_host = $this->extract_host($this->board_url);
	}
	/**
	* Modify links within a block of text.
	*/
	public function modify_links($message = '')
	{
		// A quick check before we start using regular expressions
		if (strpos($message, '<a ') === false)
		{
			return $message;
		}

		preg_match_all('#(<a\s[^>]+?>)(.*?</a>)#i', $message, $matches, PREG_SET_ORDER);
		foreach ($matches as $links)
		{
			$link = $new_link = $links[1];
			$href = preg_replace('/^.*href="([^"]*)".*$/i', '$1', $link);

			if ($href == $link) //no link was found
			{
				continue;
			}

			$href	= $this->decode_entities($href);
			$scheme	= substr($href, 0, strpos($href, ':'));

			if ($scheme)
			{
				$scheme = strtolower($scheme);
				if ($scheme != 'http' && $scheme != 'https') // Only classify links for these schemes (or no scheme)
				{
					continue;
				}
			}

			if ($this->config['skip_link_types'] && preg_match('/\.(?:' . $this->config['skip_link_types'] . ')(?:[#?]|$)/', $href))
			{
				continue;
			}

			$is_local = '';
			$is_local = ($this->config['internal_link_types'] && preg_match('/\.(?:' . $this->config['internal_link_types'] . ')(?:[#?]|$)/', $href)) ? true : $is_local;
			$is_local = ($this->config['external_link_types'] && preg_match('/\.(?:' . $this->config['external_link_types'] . ')(?:[#?]|$)/', $href)) ? false : $is_local;

			if ($is_local === '')
			{
				if (!empty($this->forbidden_domains) && $this->match_domain($href, $this->forbidden_domains))
				{
					$searches[]		= $links[0];
					$replacements[] = (!empty($this->config['forbidden_domains_text'])) ? $this->config['forbidden_domains_text'] : '';
					continue;
				}
				$is_local = $this->is_link_local($href);
			}

			if (!empty($this->config['external_link_noindex']) && !$is_local)
			{
				$searches[]		= $links[0];
				$replacements[] = '<!-- noindex -->' . $links[0] . '<!-- /noindex -->';
			}

			// Not local, now check forced local domains
			$not_local = '';
			if ($is_local && !empty($this->internal_link_domains))
			{
				$not_local = $this->match_domain($href, $this->internal_link_domains);
			}

			$new_class	= ($is_local && !$not_local) ? $this->config['internal_link_class'] : $this->config['external_link_class'];
			$new_target	= ($is_local && !$not_local) ? $this->config['internal_link_target'] : $this->config['external_link_target'];
			$new_rel	= ($is_local) ? $this->config['internal_link_rel'] : $this->config['external_link_rel'];

			// Check if this link needs a special class based on the type of file to which it points.
			foreach ($this->link_type as $extensions => $class)
			{
				if ($class && $extensions && preg_match('/\.(?:' . $extensions . ')(?:[#?]|$)/', $href))
				{
					$new_class .= ' ' . $class;
					break;
				}
			}

			if ($new_class)
			{
				$new_link = $this->insert_attribute('class', $new_class, $new_link, 'postlink');
			}

			if ($new_rel)
			{
				$new_link = $this->insert_attribute('rel', $new_rel, $new_link);
			}

			if (!$is_local && $this->config['hide_links_min_posts'] && $this->config['hide_links_min_posts'] > $this->user->data['user_posts'])
			{
				$new_target = false;
			}

			if ($new_target)
			{
				if(!empty($this->config['use_target_attribute']))
				{
					$new_link = $this->insert_attribute('target', $new_target, $new_link, true);
				}
				else
				{
					$new_link = $this->insert_attribute('onclick', "this.target='$new_target';", $new_link);
				}
			}

			// Remove the link?
			if ($new_target === false || (!empty($this->config['hide_links_from_guests']) && !$is_local && !$this->user->data['is_registered']))
			{
				if (!$this->user->data['is_registered'])
				{
					$new_text = $this->user->lang['HIDE_LINKS_GUESTS'];
					if (!is_numeric($this->config['hide_links_from_guests']))
					{
						$new_text = $this->config['hide_links_from_guests'];
					}
				}
				else
				{
					$new_text = sprintf($this->user->lang['HIDE_LINKS_MIN_POSTS'], $this->config['hide_links_min_posts']);
				}
				$new_link = '<a href="' . $this->config['forbidden_new_url'] . '" class="' . $new_class . '">' . $new_text . '</a>';
				$link = $links[0];
			}
			else if (!$is_local && $this->config['external_link_prefix_level'])
			{
				$link_prefix_level = $this->config['external_link_prefix_level'];
				if ($this->config['skip_prefix_types'] && preg_match('/\.(?:' . $this->config['skip_prefix_types'] . ')(?:[#?]|$)/', $href))
				{
					$link_prefix_level = 0;
				}
				if ($link_prefix_level == 3 || ($this->user->data['user_id'] != ANONYMOUS && $link_prefix_level == 2) || (!$this->user->data['is_registered'] && $link_prefix_level == 1))
				{
					if (!$external_prefix)
					{
						$replace_link = $this->helper->route("bb3mobi_exlinks_controller", array('url' => urlencode($href)), false, false);
						$new_link = str_replace($href, $replace_link, $new_link);
					}
					else
					{
						$external_prefix = $this->config['external_link_prefix'];
						$new_link = str_replace('href="', 'href="' . $external_prefix, $new_link);
					}
				}
			}

			$searches[]		= $link;
			$replacements[]	= $new_link;
		}

		if (isset($searches) && isset($replacements))
		{
			$message = str_replace($searches, $replacements, $message);
		}

		return($message);
	}
	/**
	* Decodes all HTML entities. The html_entity_decode() function doesn't decode numerical entities,
	* and the htmlspecialchars_decode() function only decodes the most common form for entities.
	*/
	private function decode_entities($text)
	{
		$text = html_entity_decode($text, ENT_QUOTES, 'ISO-8859-1');		 //UTF-8 does not work!
		$text = preg_replace_callback('/&#(\d+);/m', function ($matches) {return chr($matches[1]);}, $text);	//decimal notation
		$text = preg_replace_callback('/&#x([a-f0-9]+);/mi', function ($matches) {return chr('0x' . $matches[1]);}, $text);	//hex notation
		return($text);
	}

	/**
	* Extract the host portion of a URL (the domain plus any subdomains)
	*/
	private function extract_host($url)
	{
		// Remove everything before and including the double slashes
		if (($double_slash_pos = strpos($url, '//')) !== false)
		{
			$url = substr($url, $double_slash_pos + 2);
		}

		// Remove everything after the domain, including the slash
		if (($domain_end_pos = strpos($url, '/')) !== false)
		{
			$url = substr($url, 0, $domain_end_pos);
		}
		return $url;
	}

	/**
	* Determine if the URL contains a domain.
	* $domains	: list of domains (an array or a string separated by semicolons)
	* $remove	: list of subdomains to remove (or TRUE/FALSE to remove all/none)
	*/
	private function match_domain($url, $domains)
	{
		$url = $this->extract_host($url);
		$url = utf8_case_fold_nfc($url);
		$url_split = array_reverse(explode('.', $url));

		$domain_list = is_string($domains) ? explode("\n", $domains) : $domains;
		foreach ($domain_list as $domain)
		{
			$domain = $this->extract_host($domain);
			$domain = utf8_case_fold_nfc($domain);

			// Ignoring all subdomains, so check if our URL ends with domain
			if (substr($url, -strlen($domain)) == $domain)
			{
				return true;
			}
			$domain_split = array_reverse(explode('.', $domain));
			$match_count = 0;
			$match_list = array();
			foreach ($domain_split as $index => $segment)
			{
				if (isset($url_split[$index]) && strcmp($url_split[$index], $segment) === 0)
				{
					$match_count += 1;
					array_splice($match_list, 0, 0, $segment);
					continue;
				}
				break;
			}
			if ($match_count > 2 || ($match_count == 2 && strlen($match_list[0]) > 2)) // not the best check, but catches domains like 'co.jp'
			{
				return true;
			}
		}
		return false;
	}

	/**
	* Determines if a URL is local or external. If no valid-ish scheme is found,
	* assume a relative (thus internal) link that happens to contain a colon (:).
	*/
	private function is_link_local($url)
	{
		$url = strtolower($url);

		// Compare the URLs
		if (!($is_local = $this->match_domain($url, $this->board_url)))
		{
			// If there is no scheme, then it's probably a relative, local link
			$scheme = substr($url, 0, strpos($url, '://'));
			//$is_local = !$scheme || ($scheme && !in_array($scheme, array('http', 'https', 'mailto', 'ftp', 'gopher')));
			$is_local = !$scheme || ($scheme && !preg_match('/^[a-z0-9.]{2,16}$/i', $scheme));
		}

		// Not local, now check forced local domains
		if (!$is_local && !empty($this->internal_link_domains))
		{
			$is_local = $this->match_domain($url, $this->internal_link_domains);
		}
		return $is_local;
	}

	/**
	* Removes an attribute from an HTML tag.
	*/
	private function remove_attribute($attr_name, $html_tag)
	{
		$html_tag = preg_replace('/\s+' . $attr_name . '="[^"]*"/i', '', $html_tag);
		return $html_tag;
	}

	/**
	* Insert an attribute into an HTML tag.
	*/
	private function insert_attribute($attr_name, $new_attr, $html_tag, $overwrite = false)
	{
		$javascript	= (strpos($attr_name, 'on') === 0);	// onclick, onmouseup, onload, etc.
		$old_attr	= preg_replace('/^.*' . $attr_name . '="([^"]*)".*$/i', '$1', $html_tag);
		$is_attr	= !($old_attr == $html_tag);		// Does the attribute already exist?
		$old_attr	= ($is_attr) ? $old_attr : '';

		if ($javascript)
		{
			if ($is_attr && !$overwrite)
			{
				$old_attr = ($old_attr && ($last_char = substr(trim($old_attr), -1)) && $last_char != '}' && $last_char != ';') ? $old_attr . ';' : $old_attr; // Ensure we can add code after any existing code
				$new_attr = $old_attr . $new_attr;
			}
			$overwrite = true;
		}

		if ($overwrite && is_string($overwrite))
		{
			if (strpos(' ' . $overwrite . ' ', ' ' . $old_attr . ' ') !== false)
			{
				// Overwrite the specified value if it exists, otherwise just append the value.
				$new_attr = trim(str_replace(' '  . $overwrite . ' ', ' ' . $new_attr . ' ', ' '  . $old_attr . ' '));
			}
			else
			{
				$overwrite = false;
			}
		}
		if (!$overwrite)
		{
			 // Append the new one if it's not already there.
			$new_attr = strpos(' ' . $old_attr . ' ', ' ' . $new_attr . ' ') === false ? trim($old_attr . ' ' . $new_attr) : $old_attr;
		}

		$html_tag = $is_attr ? str_replace("$attr_name=\"$old_attr\"", "$attr_name=\"$new_attr\"", $html_tag) : str_replace('>', " $attr_name=\"$new_attr\">", $html_tag);
		return($html_tag);
	}
}
