<?php
/**
 * Smarty shared plugin
 *
 * @package    Smarty
 * @subpackage PluginsShared
 */
/**
 * echo common function
 * Function: smarty_function_echo
 * Purpose:  echo var or object
 *
 * @author Vasya
 *
 * @param any $in
 *
 * @return string
 */
function smarty_function_echo($params, $template)
{
	if (is_object($params['var']) || is_array($params['var']))
		return '<pre>' . print_r($params['var'], true) . '</pre>';
	else
		return $params['var'];
}

?>