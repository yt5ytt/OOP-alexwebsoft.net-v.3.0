<?php

/**
 * @package alexWEBsoft.net
 */
 namespace App;

class Dbh
{

  private $hostname = 'localhost';
  private $username = 'root';
  private $password = '';
  private $dbName = 'alexwebsoft';

  protected function dbh()
  {
    $dsn = 'mysql: host=' . $this->hostname . '; dbname=' . $this->dbName . '; charset=utf8; connect_timeout=30';
    $pdo = new \PDO($dsn, $this->username, $this->password);
    $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);
    return $pdo;
  }
}
