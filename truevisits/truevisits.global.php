<?php
/* ====================
[BEGIN_COT_EXT]
Hooks=global
[END_COT_EXT]
==================== */

/**
 * [SEDBY] Truevisits main script
 *
 * @package truevisits
 * @version 1.00b
 * @author Dmitri Beliavski
 * @copyright Copyright (c) Dmitri Beliavski 2023
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

if ($usr['id']) {
 	$db_users = Cot::$db->users;

 	($usr['profile']['user_truevisits_since'] == 0) && $tv['user_truevisits_since'] = $sys['now_offset'];
	$tv['user_truevisits_last'] = $sys['now_offset'];

	if (($sys['now_offset'] - Cot::$cfg['plugin']['truevisits']['duration']) > $usr['profile']['user_truevisits_last']) {
		$tv['user_truevisits_count'] = ++$usr['profile']['user_truevisits_count'];
	}

 	Cot::$db->update($db_users, $tv, 'user_id = ' . $usr['id']);
}
