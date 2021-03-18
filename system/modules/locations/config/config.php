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
* Back end modules
*/


// DECLARING LOCATIONS BACK END PLUGIN
$GLOBALS['BE_MOD']['content']['locations'] = array(
	'tables' => array('tl_location'),
	'icon'   => 'system/modules/locations/assets/icons/location.png',
	'exportLocations' => array('Asc\Backend\Locations', 'exportLocations')
);
// DECLARING CATEGORIES BACK END PLUGIN
$GLOBALS['BE_MOD']['content']['categories'] = array(
	'tables' => array('tl_category'),
	'icon'   => 'system/modules/locations/assets/icons/category.png',
	'exportCategories' => array('Asc\Backend\Categories', 'exportCategories')
);

/**
* Front end modules
*/
$GLOBALS['FE_MOD']['locations']['locations_list'] 	= 'Asc\Module\LocationsList';

/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_location'] = 'Asc\Model\Location';
$GLOBALS['TL_MODELS']['tl_category'] = 'Asc\Model\Category';