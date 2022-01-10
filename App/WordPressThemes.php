<?php

/**
 * @alexWEBsoft WP themes page
 * @param This class returns WP themes that I've made in a past
 */

 namespace App;


class WordPressThemes extends Dbh
{
    public function wpThemes(){
        $sql = "SELECT * FROM wp_themes";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    public function getTitle($id){
        $sql = "SELECT title FROM wp_themes where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchColumn();
    }

    public function getSourceCode($id){
        $sql = "SELECT link FROM wp_themes where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchColumn();
    }

    public function getDescription($id){
        $sql = "SELECT text FROM wp_themes where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchColumn();
    }

    public function getImage($id){
        $sql = "SELECT text FROM wp_themes where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchColumn();
    }

    public function arrayAdding($id, $lista){
        $sql = "UPDATE wp_themes SET technologies='$lista' where id='$id'";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
    }
}
