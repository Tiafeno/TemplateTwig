<?php
/*
  Plugin Name: FALI. Engine TWIG
  Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
  Description: A brief description of the Plugin.
  Version: 1.0
  Author: Tiafeno
  Author URI: http://tiafenofinel.falicrea.com
  License: A "Slug" license name e.g. GPL2
 */
 
include_once 'vendor/autoload.php';
if(!defined('TWIG_ENGINE_PATH'))  
   define('TWIG_ENGINE_PATH', plugin_dir_path(__FILE__));

$loader = new Twig_Loader_Filesystem();