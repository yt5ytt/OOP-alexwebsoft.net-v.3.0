<?php

/**
 *
 */

 namespace App;


class Pages extends Dbh
{
  public $mainMenu;
  
  public function __construct(){
    $this->mainMenu = $this->mainMenu();
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

  public function pageLink($pageID){
    $sql = "SELECT link FROM pages WHERE id='$pageID'";
    $result = $this->dbh()->prepare($sql);
    $result->execute();
    return $result->fetchColumn();
  }

  public function getTitle($pageID){
    $sql = "SELECT title FROM pages WHERE id='$pageID'";
    $result = $this->dbh()->prepare($sql);
    $result->execute();
    return $result->fetchColumn();
  }
}
