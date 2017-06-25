<?php
/**
 *
 * Topic Prefixes. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2016 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_TOPIC_PREFIXES'	=> 'Préfixes des sujets',
	'ACP_MANAGE_PREFIXES'	=> 'Gérer les préfixes',

	// ACP Log messages
	'ACP_LOG_PREFIX_ADDED'		=> '<strong>Nouveau préfixe de sujet créé</strong><br />» %1$s pour le forum : %2$s',
	'ACP_LOG_PREFIX_DELETED'	=> '<strong>Préfixe de sujet supprimé</strong><br />» %1$s pour le forum : %2$s',
));
