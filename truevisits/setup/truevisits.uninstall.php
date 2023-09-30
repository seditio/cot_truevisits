<?php
/**
 * [SEDBY] Truevisits uninstall handler
 *
 * @package truevisits
 * @version 1.00b
 * @author Dmitri Beliavski
 * @copyright Copyright (c) Dmitri Beliavski 2023
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');

$db_users = Cot::$db->users;

cot_extrafield_remove($db_users, 'truevisits_since');
cot_extrafield_remove($db_users, 'truevisits_last');
cot_extrafield_remove($db_users, 'truevisits_count');
