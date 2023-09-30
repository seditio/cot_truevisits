<?php
/**
 * [SEDBY] Truevisits install handler
 *
 * @package truevisits
 * @version 1.00b
 * @author Dmitri Beliavski
 * @copyright Copyright (c) Dmitri Beliavski 2023
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

global $R;
$db_users = Cot::$db->users;

cot_extrafield_add($db_users, 'truevisits_since', 'input', $R['input_text'], '', '', false, '', 'Visits since', '', 1, false, 'INT NOT NULL DEFAULT 0');
cot_extrafield_add($db_users, 'truevisits_last', 'input', $R['input_text'], '', '', false, '', 'Last visit', '', 1, false, 'INT NOT NULL DEFAULT 0');
cot_extrafield_add($db_users, 'truevisits_count', 'input', $R['input_text'], '', '', false, '', 'Visit count', '', 1, false, 'INT NOT NULL DEFAULT 0');
