<?php
/**
 * @author      Ivan Tcholakov <ivantcholakov@gmail.com>, 2014.
 * @license     The MIT License (MIT), http://opensource.org/licenses/MIT
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['migration_none_found'] = 'Не са намерени миграции.';
$lang['migration_not_found'] = 'Миграцията %s не може да бъде намерена.';
$lang['migration_sequence_gap'] = 'Има липса в последователносста за миграция близо до версия: %s.';
$lang['migration_multiple_version'] = 'Има няколко миграции с една и съща версия: %s.';
$lang['migration_class_doesnt_exist'] = 'Класът за миграция "%s" не може да бъде намерен.';
$lang['migration_missing_up_method'] = 'В класа за миграция "%s" липсва методът "up".';
$lang['migration_missing_down_method'] = 'В класа за миграция "%s" липсва методът "down".';
$lang['migration_invalid_filename'] = 'Миграцията "%s" е с невалидно име на файл.';
