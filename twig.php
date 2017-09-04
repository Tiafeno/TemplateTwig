<?php
/*
  Plugin Name: WP Engine TWIG
  Plugin URI: https://twig.symfony.com/doc/1.x/
  Description: If you have any exposure to other text-based template languages, such as Smarty, Django, or Jinja, you should feel right at home with Twig. It's both designer and developer friendly by sticking to PHP's principles and adding functionality useful for templating environments.
  Version: 1.27
  Author: Tiafeno Finel
  Author URI: http://www.falicrea.com
  License: A "Slug" license name e.g. GPL2
 */
 
include_once 'vendor/autoload.php';
if(!defined('TWIG_ENGINE_PATH'))  
   define('TWIG_ENGINE_PATH', plugin_dir_path(__FILE__));

$loader = new Twig_Loader_Filesystem();