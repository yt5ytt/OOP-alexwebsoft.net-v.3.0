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

/** Define include folder path */
define('INC', ABSPATH . 'inc' . DS);

/** Include autoloader */
include(ABSPATH . 'vendor' . DS . 'autoload.php');

if(!@$_GET['pageID']){
  $_GET['pageID'] = 1;
}

use App\Pages;

$menu = new Pages();

include('header.php');

if($menu->pageLink($_GET['pageID']) != '#'):
  include(INC . $menu->pageLink($_GET['pageID']));
endif;

include('footer.php');
