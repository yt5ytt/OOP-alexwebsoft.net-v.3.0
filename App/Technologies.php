<?php

/**
 *
 */

 namespace App;


class Technologies extends Dbh
{

    public function getTechnologies(){
        $sql = "SELECT * FROM technologies";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }


}
