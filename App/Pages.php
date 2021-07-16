<?php

/**
 *
 */

 namespace App;


class Pages extends Dbh
{
  public $mainMenu;
  //public $subMenu;

  public function __construct(){
    $this->mainMenu = $this->mainMenu();
    //$this->subMenu = $this->subMenu();
  }

  private function mainMenu(){
    $sql = "SELECT * FROM pages WHERE status='Main'";
    $result = $this->dbh()->prepare($sql);
    $result->execute();
    return $result->fetchAll();
  }

  public function subMenu($status){
    $sql = "SELECT * FROM pages WHERE status='$status'";
    $result = $this->dbh()->prepare($sql);
    $result->execute();
    return $result->fetchAll();
  }



}
