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
 * Add a palette to tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['palettes']['locations_list'] 		= '{title_legend},name,headline,type;{template_legend:hide},customTpl,locations_customItemTpl;{expert_legend:hide},guests,cssID,space';

$GLOBALS['TL_DCA']['tl_module']['fields']['locations_customItemTpl'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['customItemTpl'],
	'exclude'                 => true,
	'inputType'               => 'select',
	'options_callback'        => array('Asc\Backend\Locations', 'getItemTemplates'),
	'eval'                    => array('includeBlankOption'=>true, 'chosen'=>true, 'tl_class'=>'w50'),
	'sql'                     => "varchar(64) NOT NULL default ''"
);
