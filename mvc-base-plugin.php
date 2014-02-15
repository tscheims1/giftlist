<?php
/*
Plugin Name: mvc-base-plugin
Text Domain: mvc-base-plugin
Plugin URI: 
Description:  MVC-Base-Plugin
Version: 1.1.0
Author: James Schüpbach
Author URI: http://cubetech.ch
License: A "Slug" license name e.g. GPL2
*/

include "core/Bootstrap.php";

\Core\Bootstrap::getInstance()->init();
$example = \Core\MVCFactory::factory('Example');

$example->templateRender();
