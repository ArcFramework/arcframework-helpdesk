<?php
/**
 * PHPUnit bootstrap file.
 */
$_tests_dir = getenv('WP_TESTS_DIR');
if (!$_tests_dir) {
    $_tests_dir = posix_getpwuid(posix_getuid())['dir'].'/.arc/wordpress-tests-lib';
}

// Give access to tests_add_filter() function.
require_once $_tests_dir.'/includes/functions.php';

/**
 * Manually load the plugin being tested.
 */
function _manually_load_plugin()
{
    define('ARC_TESTING', true);
    require dirname(dirname(__FILE__)).'/arcframework-helpdesk.php';
}
tests_add_filter('muplugins_loaded', '_manually_load_plugin');

// Start up the WP testing environment.
require $_tests_dir.'/includes/bootstrap.php';