<div id="main">

  <div class="main-box wrapper">
    <h1>This is the main box!!!!!</h1>
  </div>

</div>

<div id="technologies">
  <div class="wrapper">
<?php

  use App\Technologies;

  $tech = new Technologies();

  foreach($tech->getTechnologies() as $techs){
    
    echo '<img class="techs" src="data:image/jpeg;base64,'.base64_encode( $techs->image ).'"/>';
  }

?>
  </div>



</div>

