<?php
/**
 *
 * Best Answer. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, kinerity, https://www.layer-3.org
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
// ’ » “ ” …
//
$lang = array_merge($lang, array(
	'ANSWERS'	=> 'Answers',

	'BEST_ANSWER'	=> 'Best Answer',
	'BUTTON_MARK'	=> 'Mark answer',
	'BUTTON_UNMARK'	=> 'Unmark answer',

	'ENABLE_BEST_ANSWER'			=> 'Enable best answer',
	'ENABLE_BEST_ANSWER_EXPLAIN'	=> 'If enabled, the topic starter (if permitted) and moderators (where allowed) will be able to mark a topic reply as the best answer.',

	'FULL_POST'	=> 'GO TO FULL POST',

	'INVALID_FILTER'	=> 'The filter parameter is invalid. Please verify this variable is correct.',

	'LOG_MARK_ANSWER'	=> '<strong>Marked post as best answer</strong><br />» %1$s by %2$s',
	'LOG_UNMARK_ANSWER'	=> '<strong>Unmarked post as best answer</strong><br />» %1$s by %2$s',

	'MARK_ANSWER'			=> 'Mark post as best answer',
	'MARK_ANSWER_CONFIRM'	=> 'Are you sure you want to mark this post as the best answer?',

	'SEARCH_USER_ANSWERS'	=> 'Search user’s answers',

	'TOPIC_FIRST_POST'	=> 'You cannot mark this post as the best answer as it is the first post of the topic.',
	'TOTAL_ANSWERS'	=> 'Total answers',

	'UNMARK_ANSWER'			=> 'Unmark post as best answer',
	'UNMARK_ANSWER_CONFIRM'	=> 'Are you sure you want to unmark this post as the best answer?',
));
