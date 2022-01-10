<?php

/**
 * @alexWEBsoft portfolio page
 * @param This class returns project from portfolio that I've made in a past
 */

 namespace App;


class Portfolio extends Dbh
{
    public function portfolio(){
        $sql = "SELECT * FROM portfolio";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    public function getTitle($id){
        $sql = "SELECT title FROM portfolio where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchColumn();
    }

    public function getLink($id){
        $sql = "SELECT link FROM portfolio where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchColumn();
    }

    public function getText($id){
        $sql = "SELECT text FROM portfolio where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchColumn();
    }

    public function arrayAdding($id, $lista){
        $sql = "UPDATE portfolio SET technologies='$lista' where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
    }
}
