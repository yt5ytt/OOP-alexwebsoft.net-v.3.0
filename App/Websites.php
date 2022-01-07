<?php

/**
 * @alexWEBsoft portfolio page
 * @param This class returns social websites that I uses
 */

 namespace App;


class Websites extends Dbh
{

    public function getWebsites(){
        $sql = "SELECT * FROM social";
        $result = $this->dbh()->prepare($sql);
        $result->execute();
        return $result->fetchAll();
    }

    public function socialIcons(){
        foreach($this->getWebsites() as $webs): ?>
            <?php if($webs->icon == 'linkedin'): ?>
              <a href="https://www.linkedin.com/in/aleksandar-safranec-0743b48b/" target="_blank"><i class="fab fa-linkedin"></i></a>
            <?php else: ?>
              <a href="<?php echo $webs->link; ?>" target="_blank"><i class="fab fa-<?php echo $webs->icon; ?>-square"></i></a>
            <?php endif;
        endforeach;
    }


}
