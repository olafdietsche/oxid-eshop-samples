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
    'id' => 'admin_orders_tab',
    'title' => 'Admin orders tab sample',
    'description' => 'Module to add a tab in the admin orders panel.',
//    'thumbnail' => 'picture.png',
    'version' => '0.1',
    'author' => 'Olaf Dietsche',
    'extend' => array(
    ),
    'files' => array(
		'order_tab_details' => 'olafdietsche/admin_orders_tab/controllers/admin/order_tab_details.php',
    ),
    'templates' => array(
		'order_tab_details.tpl' => 'olafdietsche/admin_orders_tab/views/admin/tpl/order_tab_details.tpl',
    ),
    'blocks' => array(
    ),
    'settings' => array(
    ),
);
