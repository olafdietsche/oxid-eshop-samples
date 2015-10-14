<?php
/**
 * @link      http://www.olafdietsche.de
 * @copyright (C) Olaf Dietsche 2015
 * @version   0.1
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.0';

/**
 * Module information
 */
$aModule = array(
    'id' => 'module_config_values',
    'title' => 'Module config values sample',
    'description' => 'Module to show how to add a config tab.',
//    'thumbnail' => 'picture.png',
    'version' => '0.1',
    'author' => 'Olaf Dietsche',
    'extend' => array(
    ),
    'files' => array(
    ),
    'templates' => array(
    ),
    'blocks' => array(
    ),
    'settings' => array(
        array('group' => 'olafdietsche_module_config_values', 'name' => 'server', 'type' => 'str',  'value' => ''),
        array('group' => 'olafdietsche_module_config_values', 'name' => 'username', 'type' => 'str',  'value' => ''),
        array('group' => 'olafdietsche_module_config_values', 'name' => 'password', 'type' => 'password',  'value' => ''),
    ),
);
