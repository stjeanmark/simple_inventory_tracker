<?php

/**
 * Locations - Location Plugin for Contao
 *
 * Copyright (C) 2018 Andrew Stevens
 *
 * @package    asconsulting/locations
 * @link       http://andrewstevens.consulting
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Asc\Model\SimpleInventoryTracker' 		=> 'system/modules/simple_inventory_tracker/library/Asc/Model/SimpleInventoryTracker.php',
	'Asc\SimpleInventoryTracker'		 		=> 'system/modules/simple_inventory_tracker/library/Asc/SimpleInventoryTracker.php
));
