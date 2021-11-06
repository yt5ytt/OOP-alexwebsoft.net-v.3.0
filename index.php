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

$menu = new Pages();

include('header.php');

echo $_GET['pageID'];

if($_GET['pageID'] != 1):
  include (ABSPATH . 'inc' . DS . $menu->pageLink($_GET['pageID']));
endif;




include('footer.php');
