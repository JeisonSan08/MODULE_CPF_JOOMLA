<?php
/**
 * @copyright	Copyright © 2021 - All rights reserved.
 * @license		GNU General Public License v2.0
 * @generator	http://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;

$doc = JFactory::getDocument();
// Include assets
$doc->addScript(JURI::root()."modules/mod_mascara_cpf/assets/js/jquery.mask.js");
$doc->addScript(JURI::root()."modules/mod_mascara_cpf/assets/js/script.js");
$doc->addScript(JURI::root()."modules/mod_mascara_cpf/assets/js/jquery-confirm.js");
$doc->addStyleSheet(JURI::root()."modules/mod_mascara_cpf/assets/css/jquery-confirm.css");
// $width 			= $params->get("width");

/**
	$db = JFactory::getDBO();
	$db->setQuery("SELECT * FROM #__mod_mascara_cpf where del=0 and module_id=".$module->id);
	$objects = $db->loadAssocList();
*/
require JModuleHelper::getLayoutPath('mod_mascara_cpf', $params->get('layout', 'default'));





