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
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Asc\Model\SimpleInventoryTracker' 		=> 'system/modules/simple_inventory_tracker/library/Asc/Model/SimpleInventoryTracker.php'
));
