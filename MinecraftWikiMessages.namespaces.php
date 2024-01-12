<?php
/**
 * Internationalisation file for extension MinecraftWikiMessages.
 *
 * @file
 * @ingroup Extensions
 */

require_once __DIR__ . '/MinecraftWikiMessages.constants.php';

$namespaceNames = [];

$namespaceAliases = [];

$namespacesNames['en'] = [
	NS_TUTORIAL => 'Tutorial',
	NS_TUTORIAL_TALK => 'Tutorial_talk',
];

$namespaceNames['zh'] = [
	NS_TUTORIAL => 'Tutorial',
	NS_TUTORIAL_TALK => 'Tutorial_talk',
];

$namespaceNames['zh-hans'] = [
	NS_TUTORIAL => '教程',
	NS_TUTORIAL_TALK => '教程讨论',
];

$namespaceAliases['zh-hans'] = [
	'教程' => NS_TUTORIAL,
	'教程讨论' => NS_TUTORIAL_TALK,
];

$namespaceNames['zh-hant'] = [
	NS_TUTORIAL => '教學',
	NS_TUTORIAL_TALK => '教學討論',
];

$namespaceAliases['zh-hant'] = [
	'教學' => NS_TUTORIAL,
	'教學討論' => NS_TUTORIAL,
];
