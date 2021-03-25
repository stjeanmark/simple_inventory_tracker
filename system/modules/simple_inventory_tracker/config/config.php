<?php

/**
 * Simple Inventory Tracker - A simple way to track inventory manually.
 *
 * Copyright (C) 2021 Mark St. Jean.
 *
 * @package    stjeanmark/simple_inventory_tracker
 * @link       http://www.markstjean.com
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
* Back end modules
*/

// DECLARING LOCATIONS BACK END PLUGIN
$GLOBALS['BE_MOD']['content']['simple_inventory_tracker'] = array(
	'tables' => array('tl_simple_inventory_tracker'),
	'icon'   => 'system/modules/simple_inventory_tracker/assets/icons/simple_inventory_tracker.png',
	'exportLocations' => array('Asc\Backend\SimpleInventoryTrackerBackend', 'exportSimpleInventoryTracker')
);

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_simple_inventory_tracker'] = 'Asc\Model\SimpleInventoryTracker';


/**
 * Hooks
 */
if (\Config::getInstance()->isComplete()) {
	$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = array('SimpleInventoryTracker\SimpleInventoryTracker', 'onReplaceTag');
}
