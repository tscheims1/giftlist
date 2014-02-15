<?php
/*
Plugin Name: giftlist
Text Domain: mvc-base-plugin
Plugin URI: 
Description:  giftlist for a wedding page
Version: 1.1.0
Author: James Schüpbach
Author URI: http://gemeinsamleben.ch
License: A "Slug" license name e.g. GPL2
*/

include "core/Bootstrap.php";

\Giftlist\Core\Bootstrap::getInstance()->init();
$frontend = \Giftlist\Core\MVCFactory::factory('Frontend');
$backend = \Giftlist\Core\MVCFactory::factory('Backend');

$frontend->bindAction('dispatchAjax','wp_ajax_giftlist');
