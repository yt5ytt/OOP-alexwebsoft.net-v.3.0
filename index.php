<?php

  /**
   * @package alexWEBsoft.net
   */

/** Define new line constant */
define('BR', '<br />');

/** Define doble new line constant */
define('BRBR', '<br /><br />');

/** Define directory separator */
define('DS', DIRECTORY_SEPARATOR);

/** Define ABSPATH */
define('ABSPATH', dirname(__FILE__) . DS);

/** Define ROOTURI */
$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
define ('ROOTURI', $protocol . '://' . $_SERVER['SERVER_NAME'] . DS);

/** Include autoloader */
include(ABSPATH . 'vendor' . DS . 'autoload.php');

if(!@$_GET['pageID']){
  $_GET['pageID'] = 1;
}

use App\Pages;
use App\Websites;

$menu = new Pages();
$websites = new Websites();

include('header.php');

include(ABSPATH . 'inc' . DS . $menu->pageLink($_GET['pageID']));

include('footer.php');
