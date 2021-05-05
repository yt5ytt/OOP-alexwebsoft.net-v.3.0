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

include('header.php');

include(ABSPATH . 'inc' . DS . 'topLine.inc.php');





include('footer.php');
