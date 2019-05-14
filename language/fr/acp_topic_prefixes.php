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
	'TOPIC_PREFIXES'			=> 'Préfixes des sujets',
	'TOPIC_PREFIXES_EXPLAIN'	=> 'Depuis cette page il est possible de gérer les préfixes des sujets des forums.',

	'TOPIC_PREFIX_TAG'			=> 'Libellé du préfixe',
	'TOPIC_PREFIX_ENABLED'		=> 'État du préfixe',
	'TOPIC_PREFIXES_EMPTY'		=> 'Il n’y a aucun préfixe pour ce forum.',
	'TOPIC_PREFIX_PLACEHOLDER'	=> '[Mon préfixe]',

	'CREATE_TOPIC_PREFIX'			=> 'Créer un nouveau préfixe de sujet',
	'DELETE_TOPIC_PREFIX_CONFIRM'	=> 'Suppression de ce préfixe de sujet.',
	'TOPIC_PREFIX_DELETED'			=> 'La préfixe de sujet a été supprimé.',

	'TOPIC_PREFIX_TOGGLE_STATE'	=> array(
		0	=> 'Cliquer pour activer',
		1	=> 'Cliquer pour désactiver',
	),

	// Nested set exception messages
	'TOPIC_PREFIXES_LOCK_FAILED_ACQUIRE'	=> 'L’extension « Topic Prefixes » a rencontré un problème pour verrouiller la table.',
	'TOPIC_PREFIXES_INVALID_ITEM'			=> 'Le préfixe de sujet demandé n’existe pas.',
	'TOPIC_PREFIXES_INVALID_PARENT'			=> 'Le préfixe de sujet demandé n’a pas de parent.',
));
