<div id="technologies">

  <div class="wrapper">

    <h1>USING TECHNOLOGIES</h1>
    
<?php

  use App\Technologies;

  $tech = new Technologies();

  foreach($tech->getTechnologies() as $techs):

    echo '<img class="techs" src="data:image/jpeg;base64,'.base64_encode( $techs->image ).'"/>';

  endforeach;

?>
  </div>

</div>
