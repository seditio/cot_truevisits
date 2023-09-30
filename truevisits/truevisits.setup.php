<?php
/* ====================
[BEGIN_COT_EXT]
Code=truevisits
Name=[SEDBY] True Visits
Category=community-social
Description=Count visits of a registered user
Version=1.00b
Date=2023-09-30
Author=Dmitri Beliavski
Copyright=All rights reserved (c) Dmitri Beiavski 2023
Notes=BSD License
SQL=
Auth_guests=R
Lock_guests=12345WA
Auth_members=R
Lock_members=12345WA
Recommends_modules=
Recommends_plugins=
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
duration=01:string::1800:Min duration in seconds to finish a visit
[END_COT_EXT_CONFIG]
==================== */

/**
 * [SEDBY] Truevisits setup
 *
 * @package truevisits
 * @version 1.00b
 * @author Dmitri Beliavski
 * @copyright Copyright (c) Dmitri Beliavski 2023
 * @license BSD
 */

defined('COT_CODE') or die('Wrong URL');
