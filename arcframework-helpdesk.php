<?php

/*
Plugin Name: ArcFramework HelpDesk
Plugin URI: github.com/arcframework/arcframework-helpdesk
Description: A simple helpdesk for Arc Framework
Version: 0.0
Author: Arc Framework Contributors
Author URI: arc-framework.com
*/

/*
 * If this file is called directly, abort.
 */
if (!defined('WPINC')) {
    die;
}

/*
 * Include dependencies
 */
require __DIR__.'/vendor/autoload.php';

/*
 *  Boot Plugin
 */
$plugin = new \ArcFramework\HelpDesk\Plugin(__FILE__);
$plugin->start();
